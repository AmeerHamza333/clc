@extends('incdashboard/layout')
@section('content')

        <div class="page-wrapper">
            <div class="content container-fluid">


                <!-- progressbar -->



                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add User</h3>
                            

                            <ul class="breadcrumb mt-3">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- //**admission form**// -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-2 font-weight-bold">User Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Full name:</label>
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
                                                    <label for="validationCustom02">Last Name</label>
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="" value="" >
                                                   
                                                </div>
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                             <div class="col-md-6 mb-3">
                                                 <label for="validationCustom01">User Name</label>
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
                                                <label for="validationCustom01">Email</label>
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
                                             <div class="form-group col-lg-4 px-4">
                                                <label class="col-lg- col-form-label">Password: </label>
                                                <div class="col-lg-">
                                                    <input type="password" class="form-control" required>
                                                </div>
                                                <div class="invalid-feedback">
                                                    THis field is required.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good.
                                                </div>
                                            </div> 
                                                
                                               
                                               
                                                <div class="form-group col-lg-2 ">
                                                    <label class=" col-form-label"></label>
                                                    <div class="">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="gender_male" value="option1" required>
                                                            <label class="form-check-label" for="gender_male">
                                                                active
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="gender_female" value="option2" required>
                                                            <label class="form-check-label" for="gender_female">
                                                                inactive
                                                            </label>
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            THis field is required.
                                                        </div>
                                                        <div class="valid-feedback">
                                                            Looks good.
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="form-group col-lg-3">
                                                   <label class="col-lg- col-form-label">Role </label>
                                                   <div class="col-lg-  ">
                                                       <select class="form-control " required>
                                                           <option value="0"></option>
                                                           <option>admin</option>
                                                           <option>user</option>
                                                       </select>
                                                   </div>
                                                   
                                               </div>  
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Designation</label>
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="" >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        THis field is required.
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good.
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