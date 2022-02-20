<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.service', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.addService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new Service();
        $saving->title = $request->title;
        $saving->description = $request->description;        
       
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/services'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->save();
        return redirect()->route('admin.service');
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
        $service = Service::find($id);
        // dd($service);
        return view('admin.service.editService', ['service'=>$service]);
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
        $saving = Service::find($id);
        $saving->title = $request->title; 
        $saving->description = $request->description;        
        if($request->has('img')){
            $destination = 'storage/images/services/'.$saving->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/services'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
    }
        $saving->save();
        return redirect()->route('admin.service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Service::find($id);
        
        $image->delete();
        return redirect()->route('admin.service');
    } 
    
}
