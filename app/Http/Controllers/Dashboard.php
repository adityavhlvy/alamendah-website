<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Requests\PackageRequest;
use App\Http\Requests\updateUserStatusRequest;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Author;
use App\Models\Gallery;
use App\Models\Packetoptions;
use App\Models\Paket;
use App\Models\PaketActivity;
use App\Models\Subarticle;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function package() {
        return view('package', [
            'title' => 'Package Dashboard'
        ]);
    }

    public function blog() {
        return view('blog', [
            'title' => 'Dashboard'
        ]);
    }

    // method pemformatan sub artikel
    private function convertToArrayData($contents, $articleid) {
        $contents = str_replace("<div>", "", $contents);
        $contents = str_replace("</div>", "", $contents);
        $contents = str_replace("<script>", "", $contents);
        $contents = str_replace("</script>", "", $contents);
        $contents = str_replace("<br><strong>", ",", $contents);
        $contents = explode(",", $contents);
        foreach($contents as &$content) {
            $content = str_replace("</strong><br>", ",", $content);
            $content = str_replace("<br></strong>", ",", $content);
            $content = explode(",", $content);
            $content[0] = str_replace("<strong>", "", $content[0]);
            $content = [
                "article_id" => $articleid,
                "title" => count($content) > 1 ? $content[0] : " ",
                "description" => count($content) > 1 ? $content[1] : $content[0]
            ];
        }
        return $contents;
    }

    public function postblog(BlogRequest $request) {
        // post artikel
        $article = Article::create([
            'title' => $request->title,
        ]);

        // post gallery
        foreach($request->file('img') as $key => $requestimg) {
            $formatImage = $requestimg->getClientOriginalExtension();
            $img = $requestimg->storeAs('public/articles', $request->title." ".$article->id." ".$key.".".$formatImage);
            $img = str_replace('public/', "", $img);
            Gallery::create([
                'article_id' => $article->id,
                'img' => $img,
            ]);
        }

        // post author
        foreach($request->author as $author) {
            Author::create([
                'article_id' => $article->id,
                'user_id' => $author
            ]);
        }

        // post sub artikel
        $contents = $this->convertToArrayData($request->content, $article->id);
        foreach($contents as $content) {
            Subarticle::create($content);
        }
        
        return redirect()->route('dashboard.index')->with(['success' => "Artikel berhasil di posting"]);
    }

    public function postPackage(PackageRequest $request) {
        $packages = Paket::latest()->first();
        if($packages) {
            $newId = $packages->id + 1;
        } else {
            $newId = 1;
        }
        $formatImage = $request->file('img_package')->getClientOriginalExtension();
        $img = $request->file('img_package')->storeAs('public/package', $request->package_name.$newId.".".$formatImage);
        $img = str_replace('public/', "", $img);

        $paket = Paket::create([
            'name' => $request->package_name,
            'description' => $request->description_package,
            'img' => $img,
            'slogan' => $request->package_slogan
        ]);

        foreach($request->name_activity as $key => $name_activity) {
            $formatImageActivity = $request->file('img_activity')[$key]->getClientOriginalExtension();
            $img = $request->file('img_activity')[$key]->storeAs('public/activity', $name_activity." ".$paket->id." ".$key.".".$formatImageActivity);
            $img = str_replace('public/', "", $img);
            $activity = Activity::create([
                'name' => $name_activity,
                'description' => $request->description_activity[$key],
                'img' => $img,
            ]);
            PaketActivity::create([
                'paket_id' => $paket->id,
                'activity_id' => $activity->id,
            ]);
        }

        foreach($request->package_price as $key => $package_price) {
            Packetoptions::create([
                'paket_id' => $paket->id,
                'price' => $package_price,
                'minimum_person' => $request->minimum_person[$key]
            ]);
        }

        return redirect()->route('dashboard.index')->with(['success' => 'Paket terbaru sudah ditambahkan']);
    }

    public function changeUserStatus(updateUserStatusRequest $request) {
        $user = User::with(['admin'])->where('id', $request->userid)->first();
        $admin = $user->admin;
        $admin->isAdmin = $request->isAdmin;
        $admin->save();
        return response()->json(['success' => $user->admin]);
    }

    public function deleteUser($id) {
        $user = User::with(['verifiedaccount', 'author', 'admin'])->where('id', $id)->first();
        $achievements = $user->admin->achievements;
        foreach($achievements as $achievement) {
            $achievement->delete();
        }
        $verifiedaccount = $user->verifiedaccount;
        $author = $user->author;
        $admin = $user->admin;
        if($author) {
            $author->delete();
        } 
        $user->delete();
        $admin->delete();
        return redirect()->back()->with('success', 'Pengguna berhasil dihapus');
    }

    public function deleteArtikel($id){
        $artikel = Article::where('id', $id)->first();
        $authors = $artikel->authors;
        $subarticles = $artikel->subarticles;
        $galleries = $artikel->galleries;
            
        $artikel->delete();
        foreach($galleries as $gallery) {
            $gallery->delete();
        }
        foreach($authors as $author) {
            $author->delete();
        }
        foreach($subarticles as $subarticle) {
            $subarticle->delete();
        }
        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function deletePaket($id) {
        $paket = Paket::where('id', $id)->first();
        $paket->delete();
        $paketoptions = $paket->paketoptions;
        foreach($paketoptions as $paketoption) {
            $paketoption->delete();
        }
        $paketactivities = $paket->paketactivities;
        foreach($paketactivities as $paketactivity) {
            $activity = $paketactivity->activity;
            $activity->delete();
            $paketactivity->delete();
        }
        return redirect()->back()->with('success', 'Paket berhasil dihapus');
    }

    public function formUpdatePackage($id) {
        $package = Paket::with(['paketactivities', 'paketoptions'])->where('id', $id)->first()->toArray();
        return view('package', [
            'title' => 'Package Dashboard',
            'package' => $package,
        ]);
    }

    public function formUpdateBlog($id) {
        $article = Article::with(['authors', 'subarticles', 'galleries'])->where('id', $id)->first();
        $subarticle = '';
        foreach($article->subarticles as $subarticles) {
            $subarticle .= "<strong>$subarticles->title</strong><br>$subarticles->description<br>";
        }
        $article->subarticle = $subarticle;
        $article = $article->toArray();
        return view('blog', [
            'title' => 'Dashboard',
            'article' => $article,
        ]);
    }

    public function updatePackage(PackageRequest $request, $id) {
        // update data paket
        $paket = Paket::where('id', $id)->first();
        $img = '';
        if(isset($request->img_package)){
            $formatImage = $request->file('img_package')->getClientOriginalExtension();
            $img = $request->file('img_package')->storeAs('public/', explode('.', $paket->img)[0].'.'.$formatImage);
            $paket->img = str_replace('public/', "", $img);
        }
        $paket->name = $request->package_name;
        $paket->description = $request->description_package;
        $paket->slogan = $request->package_slogan;
        $paket->save();

        // update data opsi paket
        $paketoptions = $paket->paketoptions;
        foreach($paketoptions as $paketoption) {
            $paketoption->delete();
        }
        foreach($request->package_price as $key => $package_price) {
            Packetoptions::create([
                'paket_id' => $paket->id,
                'price' => $package_price,
                'minimum_person' => $request->minimum_person[$key]
            ]);
        }

        // update tipe aktifitas paket
        $paketactivities = $paket->paketactivities;
        foreach($paketactivities as $paketactivity) {
            $activity = $paketactivity->activity;
            $activity->delete();
            $paketactivity->delete();
        }
        foreach($request->name_activity as $key => $name_activity) {
            $img = "";
            if(isset($request->img_activity[$key])) {
                $formatImageActivity = $request->file('img_activity')[$key]->getClientOriginalExtension();
                $img = $request->file('img_activity')[$key]->storeAs('public/', explode(".", $request->img_activity_old[$key])[0].".".$formatImageActivity);
                $img = str_replace('public/', "", $img);
            } else {
                $img = $request->img_activity_old[$key];
            }
            $activity = Activity::create([
                'name' => $name_activity,
                'description' => $request->description_activity[$key],
                'img' => $img,
            ]);
            PaketActivity::create([
                'paket_id' => $paket->id,
                'activity_id' => $activity->id,
            ]);
        }

        return redirect()->route('dashboard.index')->with("success", 'Paket berhasil diubah');
    }

    public function updateBlog(BlogRequest $request, $id) {
        $article = Article::with(['authors', 'subarticles', 'galleries'])->where('id', $id)->first();

        // update data artikel
        $article->title = $request->title;
        $article->save();

        // update data gallery
        if(isset($request->img)){
            // reset gallery jika terdapat data gambar yang diupload
            $galleries = $article->galleries;
            foreach($galleries as $gallery) {
                $gallery->delete();
            }
            // post gallery
            foreach($request->file('img') as $key => $requestimg) {
                $formatImage = $requestimg->getClientOriginalExtension();
                $img = $requestimg->storeAs('public/articles', $request->title." ".$article->id." ".$key.".".$formatImage);
                $img = str_replace('public/', "", $img);
                Gallery::create([
                    'article_id' => $article->id,
                    'img' => $img,
                ]);
            }
        }

        // update authors
        $authors = $article->authors;
        foreach($authors as $author) {
            $author->delete();
        }
        foreach($request->author as $author) {
            Author::create([
                'article_id' => $article->id,
                'user_id' => $author,
            ]);
        }

        // update subarticle
        $contents = $this->convertToArrayData($request->content, $article->id);
        $subarticles = $article->subarticles;
        foreach($subarticles as $subarticle) {
            $subarticle->delete();
        }
        foreach($contents as $content) {
            Subarticle::create($content);
        }
        return redirect()->route('dashboard.index')->with("success", "Artikel telah berhasil diubah");
    }
}
