<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Requests\PackageRequest;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Author;
use App\Models\Packetoptions;
use App\Models\Paket;
use App\Models\PaketActivity;
use App\Models\Subarticle;
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
        $formatImage = $request->file('img')->getClientOriginalExtension();
        $img = $request->file('img')->storeAs('public/articles', $request->title.".".$formatImage);
        $img = str_replace('public/', "", $img);
        $article = Article::create([
            'title' => $request->title,
            'img' => $img
        ]);
        $contents = $this->convertToArrayData($request->content, $article->id);
        foreach($request->author as $author) {
            Author::create([
                'article_id' => $article->id,
                'user_id' => $author
            ]);
        }
        foreach($contents as $content) {
            Subarticle::create($content);
        }
        return redirect()->route('dashboard.index');
    }

    public function addPackage(PackageRequest $request) {
        $packages = Paket::latest()->first();
        $newId = $packages->id + 1;
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

        return redirect()->route('dashboard.index');
    }
}
