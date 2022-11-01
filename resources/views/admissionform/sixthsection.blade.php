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
                            <h3 class="page-title">Application For Admission <small class="fs-5"
                                    style="font-size:15px">(Higher Education Courses)</small></h3>
                            <small class="fs-5" style="font-size:15px">(Please read the collage prospectus and consult
                                the website before completing this form)</small>
                        </div>
                    </div>
                </div>

                <!-- //**admission form**// -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-2 font-weight-bold">Marketing Information:<br><small>it would be
                                        helpful if you could tell us about where you heard about the City of London
                                        College by ticking the appropriate box.
                                    </small>
                                </h5>
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


                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses" required>
                                                        <label class="mt-1 ml-1" for="checkbox1">Newspaper/Magazine
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="checkbox1">Name of
                                                            Newspaper/Magazine </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="checkbox1">Relative/Friend
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Internet
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">Social Media</label>
                                                    </div>
                                                    <div class="col-lg-3 box">
                                                        <input class="larger" type="checkbox" name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Other sources (please state)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <h5 class="card-title mb-2 font-weight-bold">Equal opportunities
                                                monitoring:<br><small>Your response will not influence the outcome of
                                                your application.You do not have to answer this question if you do
                                                not wish.</small>
                                            </h5>
                                            <br>
                                            <p><b>Ethic origin</b></p>


                                            <div class="mb-4">
                                                <div class="col-md-12 row mb-3">
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="checkbox1">White</label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="checkbox1">Asian or Asian British
                                                            - Pakistani</label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox" id="checkbox1"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="checkbox1">Mixed - white and
                                                            Asian</label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Gypsy or traveller
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Asian or Asian British - Bangladeshi
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Other mixed background
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Black or black British - Caribbean
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Chinese
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Arab
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Black or black British - African
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Other Asian background
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Other ethnic background
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Other black background
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Mixed - white and back Caribbean
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Prefer not to say
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Asian or Asian British - Indian
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-4 box">
                                                        <input class="larger" type="checkbox"
                                                            name="Undergraduate-courses">
                                                        <label class="mt-1 ml-1" for="">
                                                            Mixed - white and black African
                                                        </label>
                                                    </div>
                                                </div>

                                                <p><b>Religion</b></p>
                                                <div class="mb-4">
                                                    <div class="col-md-12 row mb-3">
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox" id="checkbox1"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="checkbox1">Christian</label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox" id="checkbox1"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="checkbox1">Muslim</label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox" id="checkbox1"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="checkbox1">No religion</label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Buddhist
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Sikh
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                               Any other religion or belief
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Hindu
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Chinese
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                baha'i faith
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Prefer not to say
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Jewish
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Pagan
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4 box">
                                                            <input class="larger" type="checkbox"
                                                                name="Undergraduate-courses">
                                                            <label class="mt-1 ml-1" for="">
                                                                Other
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <h5 class="card-title mb-2 font-weight-bold">Declaration:<br><small>I confirm that, to the best of my knowledge, the information in this form is correct. I have read the College prospectus/brochure and the College website. I understand and agree to abide by the conditions and regulations set out there, which I accept as a condition of this application:not wish.</small>
                                                    </h5>
                                                    <div class="mt-5 mb-2">

                                                        <div class="row">
                                                            
                                                                <div class="col-lg-6">
                                                                    <label class="mt-1 ml-1" for="checkbox1">Applicant's Signature</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"
                                                                    placeholder=""  required>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="mt-1 ml-1" for="">Date</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"
                                                                    placeholder=""  required>        
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="card-title mb-2 font-weight-bold">Enrolment Procedure:<br>
                                                    </h5>
                                                    <ol class="enrol-list">
                                                        <li class="mb-1"><span>Complete the Application for Admission and send it with</span>
                                                            <ol class="sub-list">
                                                                <li class="my-1">certified copies of relevant academic certificate & work related documents</li>
                                                                <li>1 colour photo</li>
                                                                <li class="my-1">copy of passport page</li>
                                                                <li>copy of National Insurance number document</li>
                                                                <li class="my-1">proof of address (driving license or bank statement), send to the Registrar, City of London College</li>
                                                            </ol>
                                                        </li>
                                                        <li><span> When your application has been processed. the College will issue a letter of Acceptance (LOC).</span>
                                                        </li>
                                                    </ol>
                                                    <h5 class="card-title mb-2 font-weight-bold">FOR REGISTRY USE ONLY:<br>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="">
                                                                Student interview
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <label for="">
                                                                Student interviewed by
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="">
                                                                Student interviewed on
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-1">
                                                            <input class="form-check-input" value=""
                                                            id="invalidCheck"  type="checkbox" required>
                                                            <label  for="invalidCheck">yes</label>
                                                            
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input class="form-check-input" value=""
                                                            id="invalidCheck"  type="checkbox" required>
                                                            <label  for="invalidCheck">no</label>
                                                            
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                        
                                                        <div class="col-lg-5">
                                                            <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="">Comments</label>
                                                        <textarea class="form-control"  cols="30" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="">Course title on which place offered</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="">Course Level(level 1-6)</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="">Course Duration <small>(please state START and END date )</small></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <select class="custom-select"  required>
                                                            <option value="">- Select -</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                            <option value="5">Option 5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="custom-select"  required>
                                                            <option value="">- Select -</option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                            <option value="3">Option 3</option>
                                                            <option value="4">Option 4</option>
                                                            <option value="5">Option 5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="">Start Date</label>
                                                    </div>
                                                    <div class="col-log-2">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder=""  required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <label for="">Course Code</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="">Tuition Fee</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="">Date Received</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" id="validationCustom01" required>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" id="validationCustom01" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" id="validationCustom01" required>
                                                        
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="">End Date</label>
                                                    </div>
                                                    <div class="col-log-2">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder=""  required>
                                                    </div>                                                  
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="">Processed by</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="">Allocated SEN:</label>
                                                    </div>                                                                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" id="validationCustom01">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" id="validationCustom01">
                                                    </div> 
                                                </div>                                                                                       
                                                <button class="btn btn-primary mt-3" type="submit">Submit form</button>
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