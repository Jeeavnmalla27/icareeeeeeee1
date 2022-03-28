<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Homevideo;
use Illuminate\Http\Request;

class HomeBgvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Homevideo::all();
        return view('admin.video', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addVideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new Homevideo();
        $saving->name = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/video'), $filename);
            $saving->video = $filename;
        }else
        {
            $saving->video = 'file';
        }
        $saving->save();
        return redirect()->route('admin.video');
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
        $images = Homevideo::find($id);
        return view('admin.editVideo', ['images'=>$images]);
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
        $saving = Homevideo::find($id);
        $saving->name = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/video'), $filename);
            $saving->video = $filename;
        }else
        {
            $saving->video = 'file';
        }
        $saving->save();
        return redirect()->route('admin.video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Homevideo::find($id);
        $image->delete();
        return redirect()->route('admin.video');
    }
}
