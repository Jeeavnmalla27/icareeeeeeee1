<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\topclient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = topclient::all();
        return view('admin.ourtopclient.topclient', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourtopclient.addTopclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new topclient();
        $saving->name = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/topclient'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->save();
        return redirect()->route('admin.topclient');
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
        $images = topclient::find($id);
        return view('admin.ourtopclient.editTopclient', ['images'=>$images]);
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
        $saving = topclient::find($id);
        $saving->name = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/topclient'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->save();
        return redirect()->route('admin.topclient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = topclient::find($id);
        $image->delete();
        return redirect()->route('admin.topclient');
    }
}
