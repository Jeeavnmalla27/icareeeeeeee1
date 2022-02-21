<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\careerform;
use App\Models\Category;
use Illuminate\Http\Request;

class CareerformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = careerform::all();
        return view('admin.careerform.form',compact("forms"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.careerform.addForm',compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->f_name);
        $forms = new careerform();
        
        $forms->f_name = $request->f_name;
        $forms->l_name = $request->l_name;
        $forms->email = $request->email;
        $forms->phone= $request->phone;
        $forms->city = $request->city;
        $forms->work_experience= $request->work_experience;
        $forms->position_id = $request->position_id;
        $forms->linkedin = $request->linkedin;
        $forms->cover_letter = $request->cover_letter;
        if(request()->resume){
            $filename = time() . '.' . request()->resume->getClientOriginalExtension();
            request()->resume->move(public_path('images/resume'), $filename);
            $forms->resume = $filename;
        }else
        {
            $forms->resume = 'file';
        }
        $forms->save();
        return redirect()->route('admin.form');

        


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
        $forms = careerform::find($id);
        $category = Category::all();
        return view('admin.careerform.editForm',compact("forms","category"));

    
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
        $forms = careerform::find($id);
        
        $forms->f_name = $request->f_name;
        $forms->l_name = $request->l_name;
        $forms->email = $request->email;
        $forms->phone= $request->phone;
        $forms->city = $request->city;
        $forms->work_experience= $request->work_experience;
        $forms->position_id = $request->position_id;
        $forms->linkedin = $request->linkedin;
        $forms->cover_letter = $request->cover_letter;
        if(request()->resume){
            $filename = time() . '.' . request()->resume->getClientOriginalExtension();
            request()->resume->move(public_path('images/resume'), $filename);
            $forms->resume = $filename;
        }else
        {
            $forms->resume = 'file';
        }
        $forms->save();
        return redirect()->route('admin.form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms = careerform::find($id);
        $forms->delete();
        return redirect()->route('admin.form');
    }
}
