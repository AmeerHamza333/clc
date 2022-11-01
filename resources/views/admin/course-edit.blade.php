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
                        <h3 class="page-title">Edit Course</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index')}}">Course</a></li>
                            <li class="breadcrumb-item active">Edit Course</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.courses.update',$course->id )}}"
                                method="Post" novalidate>
                                @csrf
                                @method('PATCH')
                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Course Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            name="coursename" value="{{ $course->coursename }}" required>
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
                                            value="{{ $course->startdate }}" name="startdate" required>
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
                                            value="{{ $course->enddate }}" name="enddate" required>
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
                                        <label for="validationCustom01">Course Level</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            value="{{ $course->courselevel }}" name="courselevel" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div> --}}


                                    {{-- <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Study Mode</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder=""
                                            value="{{ $course->studymode }}" name="studymode" required>
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
                                            value="{{ $course->fee }}" name="fee" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>


                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Course Level</label>
                                        <select name="courselevel" class="form-control"    required>
                                            <option value="">Select </option>
                                            @foreach ($foundationcourses as $foundationcoursesvalue )
                                            
                                            <option value="{{ $foundationcoursesvalue->id }}"  @if ($foundationcoursesvalue->id == $course->fcid)
                                                {{'selected="selected"'}}
                                                @endif >{{ $foundationcoursesvalue->coursename }}</option>
                                            @endforeach
                     
                                            <option value="Foundation" @if ($course->courselevel == "Foundation")selected="selected" @endif>Foundation</option>
                                            <option value="Under-Graduate" @if ($course->courselevel == "Under-Graduate")selected="selected" @endif>Under-Graduate</option>
                                            <option value="Post-Graduate" @if ($course->courselevel == "Post-Graduate")selected="selected" @endif>Post-Graduate</option>
                                           

                                         </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>



                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Study Mode</label>
                                    <select  value="{{ $course->studymode }}" class="selectpicker form-control" multiple data-live-search="true"  name="studymode">
                                        <option>Full Time</option>
                                        <option>Part-Time</option>
                                        <option>Blended-Learning</option>
                                      </select>
                                    </div>



                                    {{-- <div class="col-md-2 mb-3">
                                        <label for="validationCustom02">Course Duration</label>
                                        <input type="number" class="form-control" id="validationCustom02" placeholder=""
                                        value="{{ $course->courseduration1 }}" name="courseduration1" required>
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
                                            <option value="day" @if ($course->courseduration2 == "day")selected="selected" @endif>Day</option>
                                            <option value="month" @if ($course->courseduration2 == "month")selected="selected" @endif>Month</option>
                                            <option value="year" @if ($course->courseduration2 == "year")selected="selected" @endif>Year</option>
                                           
                                         
                                            
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
                                    <div class="form-check p-0">
                                        <input class="form-check-input" type="checkbox" value="1" id="invalidCheck"
                                            id="isinstallment" name="isinstallment" @if($course->isinstallment)
                                        checked @endif
                                        >
                                        <label class="form-check-label" for="invalidCheck">
                                            Allow installment
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Edit </button>
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
    
    
</body>
</html>


</x-dashboard-layout>