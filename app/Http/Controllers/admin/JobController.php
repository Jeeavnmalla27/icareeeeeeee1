<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = detail::all();
        return view('admin.Jobdetail.detail', ['detail'=>$detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Jobdetail.adddetail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new detail();
        $saving->title = $request->title;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/career'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->level= $request->level;
        $saving->salary = $request->salary;
        $saving->experience = $request->experience;
        $saving->type= $request->type;
        $saving->description = $request->description;
        $saving->save();
        return redirect()->route('admin.Jobdetail');
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
        $detail = detail::find($id);
        return view('admin.Jobdetail.editdetail', ['detail'=>$detail]);
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
        $saving = detail::find($id);
        $saving->title = $request->title;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/career'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->level= $request->level;
        $saving->salary = $request->salary;
        $saving->experience = $request->experience;
        $saving->type= $request->type;
        $saving->description = $request->description;
        $saving->save();
        return redirect()->route('admin.Jobdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail =detail::find($id);
        $detail->delete();
        return redirect()->route('admin.Jobdetail')->with(['message'=> 'Successfully deleted!!']);
    }
}
