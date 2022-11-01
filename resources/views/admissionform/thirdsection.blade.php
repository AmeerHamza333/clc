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
                    <div class="stepper-item completed ">
                        <div class="step-counter">2</div>
                        <div class="step-name">Second</div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter">3</div>
                        <div class="step-name">Third</div>
                    </div>
                    <div class="stepper-item ">
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
                                <h5 class="card-title mb-2 font-weight-bold">Academic Qualification - examination
                                    achived</h5>
                                <small class="fs-5" style="font-size:15px">Please list all qualifications taken,whatever
                                    the result, in chronological order, Documentary evidance of known result should be
                                    submitted with this form. Only certified photocopies are acceptable</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <div class="myTable">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Exams Date</label>


                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <label class="col-lg- col-form-label">Examing Board/Institution:
                                                        </label>

                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Subjects: </label>

                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Qualification</label>

                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Result achived</label>

                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            required>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-1">
                                                        <input type="button" class="form-control w-100 bg-success"
                                                            id="addrow" value="+">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                                <h5 class="card-title mb-2 font-weight-bold">Academic Qualification -
                                                    examination Pending</h5>
                                                <small class="fs-5" style="font-size:15px">Complete the section only if you are awaiting the results of any examination taken recently</small>
                                                <hr>

                                            <div class="mynewTable">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <label class="col-lg- col-form-label">Exams Date</label>


                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <label class="col-lg- col-form-label">Examing Board/Institution:
                                                        </label>

                                                    </div>
                                                    <div class="form-group col-lg-4 ">
                                                        <label class=" col-form-label">Subjects: </label>

                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Qualification</label>

                                                    </div>
                                                   
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-2">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            required>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-4 ">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" required>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group col-lg-1">
                                                        <input type="button" class="form-control w-100 bg-success"
                                                            id="add" value="+">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save and Continue</button>
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