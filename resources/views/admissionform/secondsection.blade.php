@extends('inc-student-dashboard/layout')
@section('content')

  

        <div class="page-wrapper">
            <div class="content container-fluid">
                <!-- progressbar -->
                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                      <div class="step-counter">1</div>
                      <div class="step-name">First</div>
                    </div>
                    <div class="stepper-item completed">
                      <div class="step-counter">2</div>
                      <div class="step-name">Second</div>
                    </div>
                    <div class="stepper-item active">
                      <div class="step-counter">3</div>
                      <div class="step-name">Third</div>
                    </div>
                    <div class="stepper-item">
                      <div class="step-counter">4</div>
                      <div class="step-name">Forth</div>
                    </div>
                  </div>


                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Application For Admission <small class="fs-5" style="font-size:15px">(Higher Education Courses)</small></h3>
                            <small class="fs-5" style="font-size:15px">(Please read the collage prospectus and consult the website before completing this form)</small>

                            
                        </div>
                    </div>
                </div>

                <!-- //**admission form**// -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-2 font-weight-bold">Course:<small class="fs-5" style="font-size:15px">(Please indicate the code you wish to apply)</small></h3></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <!-- <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">Family name as appears in password:</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label">First name as appears in passport:</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>  -->

                                            <div class="mb-4">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Foundation Courses:</label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio" id="invalidCheck" name="foundation-courses" required>
                                                        <label class="mt-1 ml-1"  for="invalidCheck"> business</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio" id="invalidCheck" name="foundation-courses" required >
                                                          <label class="mt-1 ml-1" for="invalidCheck">
                                                           law  
                                                          </label>
                                                      </div>
                                                      <div class="invalid-feedback">
                                                        Please enter a message in the textarea.
                                                        </div>
                                                    
                                                   
                                                </div>
                                                
                                            </div>

                                            <div class="mb-4">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Undergraduate Courses:</label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1" name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1"  for="checkbox1">HNC L4 in Business</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="Undergraduate-courses">
                                                          <label class="mt-1 ml-1" for="">
                                                            HND L5 in Business 
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1"  for="checkbox1">HNC L4 in Computing</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="Undergraduate-courses">
                                                          <label class="mt-1 ml-1" for="">
                                                            HND L4 in Computing  
                                                          </label>
                                                    </div>
                                                   
                                                </div>


                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1"  for="checkbox1">VTCT L4 in Eduacton & Training</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="Undergraduate-courses">
                                                          <label class="mt-1 ml-1" for="">
                                                            VTCT L5 in Eduacton & Training
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1"  for="checkbox1">BTEC L4 in Eduacton & Training</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="Undergraduate-courses">
                                                          <label class="mt-1 ml-1" for="">
                                                            BTEC L in Eduacton & Training
                                                          </label>
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>

                                            <div class="mb-4">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Mode of studies:</label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="mode-of-study">
                                                        <label class="mt-1 ml-1"  for="checkbox1">Full-time</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="mode-of-study">
                                                          <label class="mt-1 ml-1" for="">
                                                            part-time 
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="mode-of-study">
                                                        <label class="mt-1 ml-1"  for="checkbox1">Part-time(Evening)</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="mode-of-study">
                                                          <label class="mt-1 ml-1" for="">
                                                            One-Day Release 
                                                          </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Commencement:<small  style="font-size:15px">(Please indicate the date you wish to commence your studies by ticking one of the folowing)</small></label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="commencement">
                                                        <label class="mt-1 ml-1"  for="checkbox1">September 2022</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="commencement">
                                                          <label class="mt-1 ml-1" for="">
                                                            January 2023
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="commencement">
                                                        <label class="mt-1 ml-1"  for="checkbox1">March/April 2023</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="commencement">
                                                          <label class="mt-1 ml-1" for="">
                                                            July 2023 
                                                          </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Course Duration:<small  style="font-size:15px">(Please indicate the duration of your intended course by ticking one of the folowing)</small></label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="course-duration">
                                                        <label class="mt-1 ml-1"  for="checkbox1">1 term</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="course-duration">
                                                          <label class="mt-1 ml-1" for="">
                                                           2 term
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="course-duration">
                                                        <label class="mt-1 ml-1"  for="checkbox1">3 term</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="">
                                                
                                                <div class="col-md-12 ">
                                                    <label class="font-weight-bold"  for="">Who will pay your fees?:<small  style="font-size:15px">(Please ick as appropriate & attach evidence)</small></label>
                                                </div>
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="mode-of-study">
                                                        <label class="mt-1 ml-1"  for="checkbox1">Parents</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="mode-of-study">
                                                          <label class="mt-1 ml-1" for="">
                                                            Family member
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  id="checkbox1"  name="mode-of-study">
                                                        <label class="mt-1 ml-1"  for="checkbox1">Employer</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="mode-of-study">
                                                          <label class="mt-1 ml-1" for="">
                                                            Self
                                                          </label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger"  type="Radio"  name="mode-of-study">
                                                          <label class="mt-1 ml-1" for="">
                                                            Other please specify
                                                          </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                           

                    </div>
                </div>

            </div>

            <footer>
                <p>Copyright © 2020.</p>
            </footer>

        </div>




@endsection