<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journey;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journey = Journey::all();
        return view('admin.Journey.journey', ['journey' => $journey]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Journey.addJourney');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journey = new Journey();
        $journey->step1 =$request->step1;
        $journey->step2 =$request->step2;
        $journey->step3 =$request->step3;
        $journey->step4 =$request->step4;
        $journey->step5 =$request->step5;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/journey'), $filename);
            $journey->image = $filename;
        }else
        {
            $journey->image = 'file';
        }
        $journey->save();
        return redirect()->route('admin.journey');
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
        $journey = Journey::find($id);
        return view('admin.journey.editJourney', ['journey'=>$journey]);
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
        $journey = new Journey();
        $journey->step1 =$request->step1;
        $journey->step2 =$request->step2;
        $journey->step3 =$request->step3;
        $journey->step4 =$request->step4;
        $journey->step5 =$request->step5;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('images/journey'), $filename);
            $journey->image = $filename;
        }else
        {
            $journey->image = 'file';
        }
        $journey->save();
        return redirect()->route('admin.journey');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journey = Journey::find($id);
        $journey->delete();
        return redirect()->route('admin.journey');
    }
}
