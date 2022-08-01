<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        File::
        Str::slug()
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'uid' => 'required|integer',
        ]);

        if($request->image_index) {
            $image = $request->image_index;
            $image_name = $image->getClientOriginalName();
            $image->storeAs('public/temp/' .$request->uid, $image_name);
        } else if($request->image_main) {
            $image = $request->image_main;
            $image_name = $image->getClientOriginalName();
            $image->storeAs('public/temp/' .$request->uid, $image_name);
        } else if($request->gallery) {
            Storage::disk('public')->makeDirectory('temp/' .$request->uid . '/gallery/thumbs' );
            foreach($request->gallery as $key=>$file) {
                $image_name[] = $file[$key]->getClientOriginalName();
                $file[$key]->storeAs('public/temp/' .$request->uid . '/gallery', $image_name[$key]);
                $file_thumb[$key] = IMAGE::make($file[$key]->getRealPath())->orientate()->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $file_thumb[$key]->save(storage_path('app/public/temp/' . $request->uid . '/gallery/thumbs/thumb_' . $image_name[$key]));
            }
        }
        return $image_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
