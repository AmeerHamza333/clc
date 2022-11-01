<x-dashboard-layout>

    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        <title>Bootstrap demo</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />



   

</head>
<body>

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Course</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                            <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.courses.store')}}" method="Post"
                                novalidate>
                                @csrf
                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Course Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            name="coursename" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Start Date</label>
                                        <input type="date" class="form-control" id="validationCustom02" placeholder=""
                                            value="" name="startdate" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">End Date</label>
                                        <input type="date" class="form-control" id="validationCustom02" placeholder=""
                                            value="" name="enddate" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">

                                    {{-- <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Course Type</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            name="coursetype" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Student level</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder=""
                                            value="" name="studentlevel" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Fee</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder=""
                                            value="" name="fee" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Course Level</label>
                                        <select  class="form-control" name="courselevel" required>
                                            <option value="">Select </option>
                                            @foreach ($foundationcourses as $foundationcoursesvalue )
                                            <option value="{{ $foundationcoursesvalue->id }}">{{ $foundationcoursesvalue->coursename }}</option>
                                            @endforeach
                                            <option value="Foundation">Foundation</option>
                                            <option value="Under-Graduate">Under-Graduate</option>
                                            <option value="Post-Graduate">Post-Graduate</option>
                                         </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>

                                   




                                    {{-- <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Study Mode</label>
                                        <select name="fcid" class="form-control"    required>
                                            <option value="">Select </option>
                                            @foreach ($foundationcourses as $foundationcoursesvalue )
                                            
                                            <option value="{{ $foundationcoursesvalue->id }}">{{ $foundationcoursesvalue->coursename }}</option>
                                            @endforeach
                                         
                                            <option value="Foundation">Foundation</option>
                                            <option value="Under-Graduate">Under-Graduate</option>
                                            <option value="Post-Graduate">Post-Graduate</option>
                                         </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div> --}}



                                    {{-- <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Study Mode</label>
                                    <select  class="selectpicker form-control" multiple data-live-search="true" name="studymode">
                                        <option>Full Time</option>
                                        <option>Part-Time</option>
                                        <option>Blended-Learning</option>
                                      </select>
                                    </div> --}}


                                 

                                    <!-- Button trigger modal -->
<!-- Button trigger modal -->
<div class="col-md-4 mb-3" style = "display: flex; flex-direction: column">
<label for="validationCustom02">Mode of Study</label>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style = "height: 40px; background-color: white; border: 1px solid rgb(201, 197, 197); width: 100%">
    
  </button>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mode of Study</h5>
        
        </div>
        <div class="modal-body">
            
            <div class="col-md-12 row mb-3" style = "display: flex; flex-direction: column; gap: 10px">
                <div class="col-lg-4 box">
                    <input class="larger" name="mos[]" value="Full Time" type="checkbox" id="checkbox1">
                    <label class="mt-1 ml-1" for="">Full Time
                    </label>
                </div>

                <div class="col-lg-4 box">
                    <input class="larger" name="mos[]" value = "Part-Time" type="checkbox" id="checkbox1">
                    <label class="mt-1 ml-1" for="">Part-Time</label>
                </div>

                <div class="col-lg-4 box">
                    <input class="larger" name="mos[]" value = "Part-Time" type="checkbox" id="checkbox1">
                    <label class="mt-1 ml-1" for="">Part-Time(Evening)</label>
                </div>
                
                <div class="col-lg-4 box">
                    <input class="larger" name="mos[]" value = "Blended-Learning" type="checkbox" id="checkbox1">
                    <label class="mt-1 ml-1" for="">Blended-Learning
                    </label>
                </div>
               
            </div>
    


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>
      </div>
    </div>
  </div>                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                    {{-- <div class="col-md-2 mb-3">
                                        <label for="validationCustom02">Course Duration</label>
                                        <input type="number" class="form-control" id="validationCustom02" placeholder=""
                                            value="" name="courseduration1" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4 mb-3">
                                        
                                        <label for="validationCustom02 " ></label>
                                        <select name="courseduration2" class="form-control" required>
                                            <option value="">Select </option>
                                            <option value="day">Day</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                           
                                         
                                            {{-- <option value="hosting">Hosting</option> --}}
                                         </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="invalidCheck"
                                            id="isinstallment" name="isinstallment">
                                        <label class="form-check-label" for="invalidCheck">
                                            Allow installment
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn-primary" type="submit">Add </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>   
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}


</body>
</html>


</x-dashboard-layout>
