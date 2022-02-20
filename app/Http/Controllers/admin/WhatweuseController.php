<?php

namespace App\Http\Controllers\admin;
use App\Models\Whatweuse;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class WhatweuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Whatweuse::all();
        
        return view('admin.Whatweused.icon', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Whatweused.addicon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new Whatweuse();
        $saving->name = $request->name;
        if(request()->icon){
            $filename = time() . '.' . request()->icon->getClientOriginalExtension();
            request()->icon->move(public_path('images/images'), $filename);
            $saving->icon = $filename;
        }else
        {
            $saving->icon = 'file';
        }
        $saving->save();
        return redirect()->route('admin.icon');
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
        $images = Whatweuse::find($id);
        return view('admin.Whatweused.editIcon', ['images'=>$images]);
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
        $saving = Whatweuse::find($id);
        $saving->name = $request->name;
        if(request()->icon){
            $filename = time() . '.' . request()->icon->getClientOriginalExtension();
            request()->icon->move(public_path('images/images'), $filename);
            $saving->icon = $filename;
        }else
        {
            $saving->icon = 'file';
        }
        $saving->save();
        return redirect()->route('admin.icon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Whatweuse::find($id);
        $image->delete();
        return redirect()->route('admin.icon');
    }
}
