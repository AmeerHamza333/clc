@extends('incdashboard/layout')
@section('content')
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Application</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Students</li>
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
                                       <th>Student Name</th>
                                       <th>Course Name</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Status</th>
                                       
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                    
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          Shahzad Yousaf
                                       </td>
                                       <td>Level 3 Diploma</td>
                                       <td>26 Apr 1994</td>
                                       <td>25 Aug 1994</td>
                                       <td>Rejected</td>
                                       
                                       <td class="text-right">
                                        
                                          <div class="actions">
                                             <a href="application-view.html" class="btn btn-sm bg-success-light mr-2">
                                             View
                                             </a>
                                             
                                          </div>
                                       </td>
                                    </tr>
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

@endsection

