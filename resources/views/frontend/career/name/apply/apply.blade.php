@extends('frontend.layouts.navmain')
@section('title')
Apply Career
@endsection
@section('main-container')
<!--   Breadcrumb Section -->




<section class="bg-image">

 <div class="container apply-form">
    <div class="row">
        <div class="col-md-12">
                <div class="form-body">

                <p class="text-center">Application Form</p>
                <!-- <hr> -->
              
              <form action="{{route('careerform.save')}}" method="POST" class=" mt-5" id="myModal_success" enctype="multipart/form-data">@csrf

                          <div class="row">
                              <div class="col-12"><h5 class="mb-3">Personal Details</h5></div>
                              <div class="col-12 col-md-4">

                                  <div class="form-group mb-3">
                                      <label for="first_name">
                                          First Name <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" id="first_name" name="f_name" placeholder="First Name" required="">
                                  </div>

                              </div>

                              <div class="col-12 col-md-4">

                                  <div class="form-group mb-3">
                                      <label for="middle_name">
                                          Middle Name 
                                      </label>
                                      <input type="text" class="form-control" id="middle_name" name="m_name" placeholder="Middle Name" >
                                  </div>

                              </div>



                              <div class="col-12 col-md-4">

                                  <div class="form-group mb-3">
                                      <label for="last_name">
                                          Last Name <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" id="last_name" name="l_name" placeholder="Last Name" required="">
                                  </div>

                              </div>
                            
                          </div> <!-- / .row -->
                           
                           <div class="row">
                              <!-- <div class="col-12"><h5 class="mb-3">Contact Details</h5></div> -->

                                <div class="col-12 col-md-4">

                                  <div class="form-group mb-3">
                                      <label for="email">
                                          Email <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" id="email" name="email" placeholder="youremail@domain.com" required>
                                  </div>

                              </div>
                             
                              <div class="col-12 col-md-4">
                                
                                  <div class="form-group mb-3">
                                      <label for="phone">
                                          Phone <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone Number" required>
                                  </div>

                              </div>
                              
                              <div class="col-12 col-md-4">

                                <div class="form-group mb-3">
                                    <label for="city">
                                        City <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="city"id="city" placeholder="Enter the City" required>
                                </div>
                               
                            </div>
                            
                          </div> <!-- / .row -->


                            
                             
                            <div class="row">
                              <div class="col-12"><h5 class="mt-5 mb-3">Job Description</h5></div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group mb-3">
                                      <label for="experience">
                                          Total Years Of Work Experience <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" name="work_experience"id="experience" placeholder="Enter Total Years Of Work Experience" required="">
                                  </div>


                              </div>
                              <div class="col-12 col-md-6">

                                  <div class="form-group mb-3 Applying_for">
                                       <label for="position_applied">
                                          Position Applied <span class="text-danger">*</span>
                                      </label>
                                      <select class="form-control" id="position_applied" name="position_id"required>
                                           <option value="choose">Choose one of them </option>



                                         @foreach($detail as $select)
                                          <option >{{$select->title}} </option>
                                          @endforeach
                                          
                     
                     
                                           <option value="others">Others</option>    
                                            
                                           
                                      </select>
                                  </div>

                              </div>
                          </div> <!-- / .row -->

                           <div class="row">
                              
                              <div class="col-12 col-md-6">

                                    <div class="form-group mb-5">
                                      <label for="linkedin">
                                          LinkedIn 
                                      </label>
                                      <input type="url" class="form-control" id="linkedin" placeholder="Share Link Here..." required name="linkedin">
                                  </div>

                              </div>
                          </div> <!-- / .row -->
  

                         
                          
                          <div class="row">
                            
                              <div class="col-12">

                                  <div class="form-group mb-5">
                                      <label for="your_story">
                                          Cover Letter <span class="text-danger">*</span>
                                      </label>
                                      <textarea id="cover_letter" rows="5" class="form-control" name="cover_letter" placeholder="Cover Letter"></textarea>
                                  </div>

                              </div>

                              <div class="col-12 mb-5">
                                <label for="applyresume">Upload Resume <span class="text-danger" required>*pdf,dox,jpeg</span> </label> <br>
                                <input type="file" required name="img">
                                
                             </div>

                         
                          </div> <!-- / .row -->
                          <div class="row align-items-center">
                              <div class="col-12 col-md text-center">

                                  <!-- Submit -->
                                  <button class="hello-btn login-btn  mb-6 mb-md-0 lift"  onclick="return confirm('Are you sure?')" id="apply_now" data-toggle="modal" data-target="#myModal" >Apply Now
                                    </button>

                              </div>
                             
                          </div> <!-- / .row -->
                      
                      </form>
               </div>
              
        
        
    </div>
 </div>

         </div>
     </div>
 </div>

 <div class="modal fade custom_modal" id="myModal_success" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="{{asset('frontend/../../../../Assets/static/img/thumbs-up.png')}}" >
                <h4 class="p-2 mt-4 font-weight-bold" style="font-size:1.25rem;">Your application has been submitted successfully</h4>
            </div>
        </div>
    </div>
 </div>
  <div class="modal fade custom_modal" id="myModal_something_wrong" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="../../../../image.flaticon.com/icons/png/512/3176/3176047.png" >
                <h4 class="p-2 px-5 mt-4 font-weight-bold" style="font-size:1.25rem;">Something wrong has happened to our end. In case the problem presist ,either contact our team or drop your resume at people@icare.com</h4>
               
            </div>
        </div>
    </div>
  </div>
  <div class="modal fade custom_modal" id="myModal_required_fields" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="../../../../image.flaticon.com/icons/png/512/179/179386.png" >
                <h4 class="p-2 mt-4 font-weight-bold" style="font-size:1.25rem;">Please fill the required fields</h4>
                <span style="font-weight: 700;">You have not filled :-</span>  <ul id="required_fields_not_filled">
                  
                </ul>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection

  





  

  
