{{-- @extends('inc-student-dashboard/layout')
@section('content') --}}

<x-dashboard-layout>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Course</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Courses</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Title</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Course Level</th>
                                       <th>Study Mode</th>
                                       <th>Fee</th>
                                       <th>Duration</th>
                                       <th>Select Course of study</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                    @foreach($course as $item)
                                    <tr>
                                       <td>{{ $item->id }}</td>
                                       <td>
                                          {{ $item->coursename }}
                                       </td>
                                       <td>{{ $item->startdate }}</td>
                                       <td>{{ $item->enddate }}</td>
                                       <td>{{ $item->courselevel}}</td>
                                       <td>{{ $item->studymode }}</td>
                                       <td>$ {{$item->fee }}</td>
                                       <td>{{ $item->courseduration2 }}</td>
                                       <td class="text-center">
                                          <div class="actions">
                                             <a href ="{{ url('/student/showform/' . $item->id) }}" class="btn btn-sm bg-success-light mr-2">
                                             Enroll Now
                                             </a>
                                            
                                          </div>
                                       </td>
                                    </tr>

                                    @endforeach



                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright © 2020 Dreamguys.</p>
            </footer>
         </div>
{{-- @endsection --}}
      </x-dashboard-layout>