<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\careerform;
// use App\Models\Category;
use App\Models\Contact;
use App\Models\CompanyContact;
use App\Models\HomeVideo;
use App\Models\Journey;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\topclient;
use App\Models\Whatweuse;
use App\Models\Frequent;
use App\Models\Consulation;
use App\Models\term;
use App\Models\privacy;
use App\Models\detail;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $about = about::all();
    //   $careerform = careerform::all();
    //   $category = Category::all();
      $contact = Contact::all();
      $company = CompanyContact::first();
      $homevideo = HomeVideo::all();
      $journey = Journey::all();
      $service = Service::all();
      $testimonial = Testimonial::all();
      $topclient = topclient::all();
      $whatweuse = Whatweuse::all();
      $frequent=Frequent::all();
      $terms=term::all();
      $privacy=privacy::all();
      $detail=detail::all();
      $careers=detail::all();
      return view('frontend.index' ,compact('homevideo','service','whatweuse','journey','topclient','testimonial','company','terms','privacy','detail','careers'));
      
      
     
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {    $company = CompanyContact::first();
        $about = about::get();
        return view('frontend.About.About', compact('about','company'));
    }
    public function contact()
    {
        $contact = Contact::get();
        $company = CompanyContact::first();
        return view('frontend.contact.contact', compact('contact','company'));
    }
    public function service()
    {
        $serv = Service::all();
        $company = CompanyContact::first();
        return view('frontend.service.service', compact('serv','company'));
    }
    public function frequent()
    {
        $frequent = Frequent::all();
        $company = CompanyContact::first();
        return view('frontend.faq.Faq', compact('frequent','company'));
    }
    public function privacy()
    {
        $privacy=privacy::all();
        $company = CompanyContact::first();
        return view('frontend.privacy.privacy', compact('privacy','company'));
    }
    public function term()
    {
        $terms=term::all();
        $company = CompanyContact::first();
        return view('frontend.terms.terms', compact('terms','company'));
    }
    public function career()
    {
        $careers=detail::all();
        // $detail=detail::all();
        $company = CompanyContact::first();
        return view('frontend.career.career', compact('careers','company'));
    }

    public function detail($id)
    {
        
        $detail=detail::find($id);
        $company = CompanyContact::first();
        return view('frontend.career.name.detail', compact('detail','company'));
    }
    // public function careerform()
    // {
    //     $careerform = careerform::all();
    //     $detail=detail::all();
    //     $company = CompanyContact::first();
    //     return view('frontend.career.name.detail', compact('detail','careerform','company'));
    // }

    public function apply()
    {   $detail=detail::all();
        $careerform = careerform::all();
        $company = CompanyContact::first();
        return view('frontend.career.name.apply.apply', compact('careerform','detail','company'));
    }
    public function save_contact(Request $request)
    {
        $saving = new Contact();
        $saving->name = $request->name;
        $saving->email = $request->email;
        $saving->contact = $request->phone;
        $saving->message = $request->message;
        $saving->save();
        
        
        // if($saving){
        //     return back()->with('Success','Message has been submitted!');
        // }
        // else{
        //     return back()->with('fail','Something went wrong');
        // }
        // return redirect()->route('frontend.contact.contact');

        $query = Contact::insert([
            'name' =>$request->input('name'),
            'contact' =>$request->input('phone'),
            'email' =>$request->input('email'),
            'message' =>$request->input('message'),
        ]);
        if($query){
            return back()->with('success','Data has been inserted');
        }else{
            return back()->with('fail','something goes wrong');
        }
    }

    public function save_consulation(Request $request)
    {
        $saving = new Consulation();
        $saving->name = $request->name;
        $saving->phone = $request->phone;
        $saving->order = $request->consulation_order;
        $saving->save();
        return redirect()->route('frontend.index');
    }

    public function save_careerform(Request $request)
    {   
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
        if($request->img){
            $filename = time() . '.' . $request->img->getClientOriginalExtension();
            //return $filename;
            $request->file('img')->move(public_path('images/resume'), $filename);
            $forms->resume = $filename;
        }else
        {
            $forms->resume = 'file';
        }
        $forms->save();
        return redirect()->route('frontend.apply');
    }


   
   
   
}