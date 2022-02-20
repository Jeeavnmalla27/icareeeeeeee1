<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = about::all();
        return view('admin.about.about', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.addAbout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new about();
        $saving->title = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/about'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->content = $request->description;
        $saving->save();
        return redirect()->route('admin.about.about');
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
        $about = about::find($id);
        return view('admin.about.editAbout', ['about'=>$about]);
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
        $saving = about::find($id);
        $saving->title = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/about'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->content = $request->description;
        $saving->save();
        return redirect()->route('admin.about.about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = about::find($id);
        $about->delete();
        return redirect()->route('admin.about.about');
    }
}
