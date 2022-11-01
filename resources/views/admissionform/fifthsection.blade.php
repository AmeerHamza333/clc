@extends('inc-student-dashboard/layout')
@section('content')

   


        <div class="page-wrapper">
            <div class="content container-fluid">


                <!-- progressbar -->
                <div class="stepper-wrapper">
                    <div class="stepper-item active">
                      <div class="step-counter">1</div>
                      <div class="step-name">First</div>
                    </div>
                    <div class="stepper-item ">
                      <div class="step-counter">2</div>
                      <div class="step-name">Second</div>
                    </div>
                    <div class="stepper-item ">
                      <div class="step-counter">3</div>
                      <div class="step-name">Third</div>
                    </div>
                    <div class="stepper-item">
                      <div class="step-counter">4</div>
                      <div class="step-name">Forth</div>
                    </div>
                  </div>




                <!-- //**admission form**// -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-2 font-weight-bold">Further Information</h5>
                                <small style="font-size:15px">Please use this section to tell us about yourself and your reasons for wanting to study this course.</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">                                              
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Please give reasons for choosing this programme of study?:</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Family name as appears in password:</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What are your future education plans?</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What kind of employment do you intend to seek on completion of your studies?</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Please write brief statement about your interests and hobbies.</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">To help us provide assistance wherever possible please state briefly if you have any special needs requiring support or facilities. </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Do you have any criminal record within or outside the UK? If yes, please state: </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="">
                                                <h5 class="card-title mb-2 font-weight-bold">Reference:</h5>
                                                <small style="font-size:15px">This section must be completed by your present or past teacher, employer or a person who knows you well, academically and/or socially. <br>
                                                    Incomplete application forms will not be processed. An interview with the applicant will be required. </small>
                                                    <br>
                                                <small class="font-weight-bold" style="font-size:15px">Note to Referee:</small><br>  
                                                <small style="font-size:15px">As many potential candidates apply, selection is extremely competitive. Your comments will provide us with important information in assessing this application.
                                                    </small>  
                                                <hr>
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">How long have you known the applicant and in what capacity? </label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What is your opinion of the Applicants suitability for the course chosen?</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                <label for="validationCustom01">Please tick appropriately - ONE tick per row: </label>                                        
                                            </div>

                                            <div> 
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label"></label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <label class=" col-form-label">Outstanding </label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ml-2 ">
                                                        <label class="col-lg- col-form-label">Excellent<br><small style="font-size:13px">90-94%</small></label>

                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class="col-lg- col-form-label">Very Good<br><small style="font-size:13px">75-89%</small></label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class="col-lg- col-form-label">Good<br><small style="font-size:13px">60-74%</small></label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Averege</label>
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <label class=" col-form-label">Below averege</label>
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <label class=" col-form-label">Not know</label>
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Intellectual / Academic ability </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Academic-ability" id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Fluent and logical Oral communication in English Written 
                                                            oral </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Oral-Written " id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Fluent and logical Oral communication in English Written 
                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name=" Written " id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name=" Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name="Written " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name="Written " id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name="Written " id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name="Written " id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Ability to work hard  

                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name="work-hard " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name="work-hard " id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name="work-hard " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name="work-hard " id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio" name="work-hard "  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="work-hard "  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio" name="work-hard "  id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Perseverance  

                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance" id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="Perseverance"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Perseverance"  id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">  
                                                            Leadership
                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Leadership" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Leadership" id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Leadership" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Leadership" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Leadership"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="Leadership"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Leadership"  id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">  
                                                            Creativity
                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Creativity" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Creativity" id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Creativity" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Creativity" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Creativity"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="Creativity"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Creativity"  id="checkbox1">
                                                        
                                                    </div>       
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">  
                                                            Concern for others 
                                                        </label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="Concern" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Concern" id="checkbox1">
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Concern" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Concern" id="checkbox1">
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input class="larger"  type="Radio"name=" Concern"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name="Concern"  id="checkbox1">
                                                        
                                                    </div>   
                                                    <div class="form-group col-lg-1 ">
                                                        <input class="larger"  type="Radio"name=" Concern"  id="checkbox1">
                                                        
                                                    </div>       
                                                </div>

                                                <div class="form-row">
                                                    <label for="validationCustom01">Any other information that you feel is relevant. 
                                                    </label>                                        
                                                </div>

                                                <div class="form-row">
                                                
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom01">Referee's name:</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder=""  required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                                THis field is required.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom02"> Referee's signatures: :</label>
                                                        <input type="text" class="form-control" id="validationCustom02"
                                                            placeholder="" value="" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            THis field is required.
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 mb-3 row">
                                                    <label for="validationCustom01">Date</label>
                                                    <input type="date" class="form-control" id="validationCustom01"
                                                        placeholder=""  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
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
