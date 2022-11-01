<x-dashboard-layout>
    <div class="page-wrapper" id="elementId">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Applications</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Application view</li>
                        </ul>
                    </div>
                    <div class="col-auto d-flex text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2" onclick="printDiv()"><i
                                class="fas fa-download"></i> Download</a>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle
                            @if ($studentapplications->status==1 || $studentapplications->status==2) disabled @endif
                            " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                @if ($studentapplications->status==1)
                                Approve
                                @elseif ($studentapplications->status==2)
                                Reject
                                @elseif ($studentapplications->status==3)
                                Revision
                                @elseif ($studentapplications->status==4)
                                Pending
                                @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item applicationStatus" data-status="1">Approve</a>
                                <a class="dropdown-item applicationStatus" data-status="2">Reject</a>
                                @if (!$studentapplications->status==3 || $studentapplications->status==4)
                                <a class="dropdown-item revisionBtn">Revision</a>
                                @endif
                                <!-- <button class="dropdown-item pendingBtn">Pending</button> -->
                            </div>
                        </div>
                        <!-- modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Application Comments</h5>
                                        <i class="fa fa-close modalClose"></i>
                                        <a href="#" class="btn mr-2 modalClose">
                                            <i class="fas fa-xmark"></i>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group text-left">
                                            <label for="comments" class="text-left">Comments</label>
                                            <textarea class="form-control" name="comments" id="comments"
                                                rows="3"></textarea>
                                            <input type="hidden" id="said" name="said"
                                                value="{{ $studentapplications->said}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modalClose">Close</button>
                                        <button type="button" class="btn btn-primary applicationStatus"
                                            data-status="3">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->

                        {{-- <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="messages"></div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">PERSONAL DETAILS</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Family Name
                                        </div>
                                        {{ $studentapplications->firstname }}
                                        <input id="" value="shahid" name="FamilyName" hidden="" />
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            First Name
                                        </div>
                                        {{ $studentapplications->lastname }}
                                        <input id="" value="rasool" name="FirstName" hidden="" />
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Previous Name
                                        </div>
                                        {{ $studentapplications->pfname }}
                                        <input id="" value="rasool" name="PreviousName" hidden="" />
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            DOB
                                        </div>
                                        {{ $studentapplications->dob }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Country
                                        </div>
                                        {{ $studentapplications->cob}}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Entry Date to Uk
                                        </div>
                                        {{ $studentapplications->edtouk }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Home/Parmanent Address
                                        </div>
                                        {{ $studentapplications->address }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Home Tel Number
                                        </div>
                                        {{ $studentapplications->hometelno }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Title
                                        </div>
                                        {{ $studentapplications->title }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Gender
                                        </div>
                                        {{ $studentapplications->gender }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            City
                                        </div>
                                        {{ $studentapplications->city }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Postal Code
                                        </div>
                                        {{ $studentapplications->postalcode }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Email
                                        </div>
                                        {{ $studentapplications->email }}
                                        <input id="" value="stu_shahid@hotmail.com" name="Email" hidden="" />
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Mobile
                                        </div>
                                        {{ $studentapplications->mobile }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Country of birth
                                        </div>
                                        {{ $studentapplications->cob }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Nationality
                                        </div>
                                        {{ $studentapplications->nationality }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">COURSE DETAILS</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Course Level
                                        </div>
                                        {{ $studentapplications->courselevel }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Undergraduate Course
                                        </div>
                                        {{ $studentapplications->undergraduatecourses }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Mode Of study
                                        </div>
                                        {{ $studentapplications->modeofstudy }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Commencment
                                        </div>
                                        {{ $studentapplications->commencement }}
                                    </div>
                                </li>
                                {{-- <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Course Duration
                                        </div>
                                        {{ $studentapplications->courseduration }}
                                    </div>
                                </li> --}}
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Who will pay your fees
                                        </div>
                                        {{ $studentapplications->feespaidby }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- aqachieve examinations achieved -->
            {{-- @foreach ($aqachieve as $value )
            @if(!empty($value->resultachieved))
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        Academic qualifications — examinations achieved
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Exams Date
                                        </div>
                                        {{ $value->examdate }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Examining Board/Institution
                                        </div>
                                        {{ $value->examingboard }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Subjects
                                        </div>
                                        {{ $value->subjects }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Qualification
                                        </div>
                                        {{ $value->qualification }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach --}}
            <!-- aqachieve examinations achieved -->
            
            <!-- aqachieve examinations pending -->
            {{-- @foreach ($aqachieve as $value )
            @if(empty($value->resultachieved))
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        Academic qualifications — examinations pending
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Exams Date
                                        </div>
                                        {{ $value->examdate }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Examining Board/Institution
                                        </div>
                                        {{ $value->examingboard }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Subjects
                                        </div>
                                        {{ $value->subjects }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Qualification
                                        </div>
                                        {{ $value->qualification }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach --}}
            <!-- aqachieve examinations pending -->

            {{-- aqachieves exammination achieved --}}

            <div class="card" style="width: 100%">
                <h5 class="card-title p-2">
                    Academic qualifications — examinations achieved
                </h5>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Exams Date</th>
                        <th scope="col">Examing Board/Institution</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Result achived</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($aqachieve as $value )
                        @if(!empty($value->resultachieved))
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{ $value->examdate }}</td>
                        <td>{{ $value->examingboard }}</td>
                        <td>{{ $value->subjects }}</td>
                        <td>{{ $value->qualification }}</td>
                        <td>{{ $value->resultachieved}}</td>
                    
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>
            
            {{-- aqachieves examination pendings --}}
            <div class="card" style="width: 100%">
                <h5 class="card-title p-2">
                    Academic qualifications — examinations Pending
                </h5>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Exams Date</th>
                        <th scope="col">Examing Board/Institution</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Qualification</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($aqachieve as $value )
            @if(empty($value->resultachieved))
                      <tr>
                        <th scope="row">{{$loop->index-2}}</th>
                        <td>{{ $value->examdate }}</td>
                        <td>{{ $value->examingboard }}</td>
                        <td>{{ $value->subjects }}</td>
                        <td>{{ $value->qualification }}</td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>
            
            
            
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">English Language</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Is english your first language
                                        </div>
                                        {{ $studentapplications->engfirstlang }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Have you attended any courses in English Language?
                                        </div>
                                        {{ $studentapplications->anyengcourse }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Have you taken any English Language Proficiency test?
                                        </div>
                                        {{ $studentapplications->proficiencytest }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>











            {{-- @foreach ($workexp as $value )
            <div class="card" style="width: 100%; margin-bottom: 0">
                <div class="card-body">
                    <h5 class="card-title">Work Experience</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Date from
                                        </div>
                                        {{ $value->datefrom }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Date to
                                        </div>
                                        {{ $value->dateto }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            FT/PT"
                                        </div>
                                        {{ $value->ftpt }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Post held
                                        </div>
                                        {{ $value->postsheld }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Organisation name and address
                                        </div>
                                        {{ $value->orgname }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Brief description of duties
                                        </div>
                                        {{ $value->orgaddress }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach --}}



            <div class="card" style="width: 100%">
                <h5 class="card-title p-2">
                    Work Experience
                </h5>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date from</th>
                        <th scope="col">Date to</th>
                        <th scope="col"> FT/PT</th>
                        <th scope="col">Post held</th>
                        <th scope="col">Organisation name and address</th>
                        <th scope="col"> Brief description of duties</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($workexp as $value )
                        @if(!empty($value->dateto))
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td> {{ $value->datefrom }}</td>
                        <td>{{ $value->dateto }}</td>
                        <td> {{ $value->ftpt }}</td>
                        <td> {{ $value->postsheld }}</td>
                        <td> {{ $value->orgname }}</td>
                        <td> {{ $value->despofduties }}</td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>



            @foreach ($workexp as $value )
            @if(empty($value->dateto))
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">
                        If currently employed, current employer details:
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Date from
                                        </div>
                                        {{ $value->datefrom }}
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            FT/PT
                                        </div>
                                        {{ $value->ftpt }}
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                           Organization Address
                                        </div>
                                        {{ $value->orgaddress }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Post held
                                        </div>
                                        {{ $value->postsheld }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Organisation name and address
                                        </div>
                                        {{ $value->orgname }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Brief description of duties
                                        </div>
                                        {{ $value->despofduties }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">Further Information</h5>

                    <div class="row">
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Please give reasons for choosing this programme of
                                            study.
                                        </div>
                                        {{ $studentapplications->anyengcourse }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            What are your future education plans?
                                        </div>
                                        {{ $studentapplications->futureplan }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            What kind of employment do you intend to seek on
                                            completion of your studies?
                                        </div>
                                        {{ $studentapplications->kindofemp }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Please write brief statement about your interests and
                                            hobbies.
                                        </div>
                                        {{ $studentapplications->interestandhobies }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            To help us provide assistance wherever possible please
                                            state briefly if you have any special needs requiring
                                            support or facilities.
                                        </div>
                                        {{ $studentapplications->specialneeds }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Are you currently on any state benefits?
                                        </div>
                                        {{ $studentapplications->statebenifits }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Do you have any criminal record within or outside
                                            the UK?
                                        </div>
                                        {{ $studentapplications->criminalrecord }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%; margin-bottom: 0">
                <div class="card-body">
                    <h5 class="card-title">Reference</h5>

                    <div class="row">
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            How long have you known the applicant and in what capacity?
                                        </div>
                                        {{ $studentapplications->specificity }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            What is your opinion of the Applicants suitability for the course chosen?
                                        </div>
                                        {{ $studentapplications->coursechoosen }}
                                    </div>
                                </li>
                            </ol>
                        </div>


                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;  margin-bottom: 0">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Intellectual / Academic ability
                                        </div>
                                        {{ $studentapplications->intellectual }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Fluent and logical communication in English oral
                                        </div>
                                        {{ $studentapplications->fluetandlogicoral }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Fluent and logical communication in English written
                                        </div>
                                        {{ $studentapplications->fluetandlogicwritten }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Concern for others
                                        </div>
                                        {{ $studentapplications->concern }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Ability to work hard
                                        </div>
                                        {{ $studentapplications->ability }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Perseverance
                                        </div>
                                        {{ $studentapplications->perseverance }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Leadership
                                        </div>
                                        {{ $studentapplications->leadership }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Creativity
                                        </div>
                                        {{ $studentapplications->creativity }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Referee's name
                                        </div>
                                        {{ $studentapplications->refreesname }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Referee's signatures
                                        </div>
                                        {{ $studentapplications->refreessign }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Date
                                        </div>
                                        {{ $studentapplications->refreesdate }}
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title">Marketing Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">

                                        </div>
                                        {{ $studentapplications->marketinginfo }}
                                    </div>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <h5 class="card-title"> Equal opportunities monitoring</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Ethnic Origen
                                        </div>
                                        {{ $studentapplications->ethicorigin }}
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Religion
                                        </div>
                                        {{ $studentapplications->religion }}
                                    </div>
                                </li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Applicant Signature
                                        </div>
                                        White
                                    </div>
                                </li>


                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold" style="font-weight: bold; font-size: 19px">
                                            Date
                                        </div>
                                        7/8/2001
                                    </div>
                                </li>


                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%">
                <!-- <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between">
                            <button class="btn btn-primary mt-3" type="submit">Revision</button>
                            <button class="btn btn-danger mt-3" type="submit">Reject</button>
                            <button class="btn btn-success mt-3" type="submit">Approve</button>
                        </div>
                    </div>
                </div> -->
                <h5 class="card-title" style = "margin: 10px">Student Files</h5>
@foreach ($file as $item)

                  <div class="card" style = "border-radius: 0px; margin: 0px 5px">
                    <h5 class="card-header">{{$item->filename}}</h5>
                    <div class="card-body" style = "border-radius: 0px">
                      <a href="#" class="btn btn-primary">Download</a>
                    </div>
                  </div>

                  @endforeach

                <footer>
                    <p>Copyright © 2022.</p>
                </footer>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script>
            function printDiv(divName) {
                var printContents = document.getElementById('elementId').innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;

            }

            $(document).ready(function() {
                $(".revisionBtn").click(function() {
                    $("#exampleModal").modal();
                });

                $(".modalClose").click(function() {
                    $("#exampleModal").modal('hide');
                });

                $(".applicationStatus").click(function() {
                    var token = $("meta[name='csrf-token']").attr("content");
                    var message = $('textarea#comments').val();
                    var status = $(this).data('status');
                    var id = $('input#said').val();
                    var url = '{{ url("/admin/application/status") }}' + '/' + id;
                    $.ajax({
                        /* the route pointing to the post function */
                        url: url,
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            "_token": token,
                            status,
                            status,
                            message: message
                        },
                        dataType: 'JSON',
                        /* remind that 'data' is the response of the AjaxController */
                        success: function(response) {
                            console.log(response);
                            var messages = $('.messages');
                            if (response.status) {
                                $("#exampleModal").modal('hide');
                                var successHtml =
                                    `<div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="glyphicon glyphicon-ok-sign push-5-r"></strong>${response.msg}</div>`;
                                $(messages).html(successHtml);
                                location.reload(() => {
                                    $(messages).html(successHtml);
                                }, 5000);
                            } else {
                                var successHtml =
                                    `<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="glyphicon glyphicon-ok-sign push-5-r"></strong>${response.msg}</div>`;
                                $(messages).html(successHtml);
                            }
                        }
                    });
                });
            });
            // function printDiv() {
            //     let printElement = document.getElementById(elementId);
            //     var printWindow = window.open('', 'PRINT');
            //     printWindow.document.write(document.documentElement.innerHTML);
            //     setTimeout(() => { // Needed for large documents
            //     printWindow.document.body.style.margin = '0 0';
            //     printWindow.document.body.innerHTML = printElement.innerHTML;
            //     printWindow.document.close(); // necessary for IE >= 10
            //     printWindow.focus(); // necessary for IE >= 10*/
            //     printWindow.print();
            //     printWindow.close();
            //     }, 1000)
            // }
            </script>
</x-dashboard-layout>



