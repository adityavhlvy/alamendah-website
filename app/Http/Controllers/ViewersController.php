<?php

namespace App\Http\Controllers;

use App\Models\Viewers;
use App\Http\Requests\StoreViewersRequest;
use App\Http\Requests\UpdateViewersRequest;

class ViewersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViewersRequest $request)
    {
        $viewer = Viewers::where('user_id', $request->userid)
                            ->where('article_id', $request->articleid)
                            ->first();
        if(!$viewer) {
            Viewers::create([
                'user_id' => $request->userid,
                'article_id' => $request->articleid,
                'likes' => $request->viewer_impression
            ]);
        } else {
            $viewer->likes = $request->viewer_impression;
            $viewer->save();
        }
        return response()->json([
            'status' => true,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Viewers $viewers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viewers $viewers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateViewersRequest $request, Viewers $viewers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viewers $viewers)
    {
        //
    }
}
