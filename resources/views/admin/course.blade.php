<x-dashboard-layout>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Course</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Course</li>
                        </ul>
                     </div>
                     @can('Course create')
                     <div class="col-auto text-right float-right ml-auto">
                        {{-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> --}}
                        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                     @endcan
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
                                       <th>Name</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Course Level</th>
                                       <th>Study Mode</th>
                                       <th>Fee</th>
                                       <th>Course</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @can('Course access')
                                    @foreach ($courses as $value)
                                    <tr>
                                       <td>{{ $value->id }}</td>
                                       <td>
                                          {{ $value->coursename }}
                                       </td>
                                       <td>
                                          {{ $value->startdate }}
                                       </td>
                                       <td>
                                          {{ $value->enddate }}
                                       </td>
                                       <td>
                                          {{ $value->courselevel }}
                                       </td>
                                       <td>
                                          {{ $value->studymode }}
                                       </td>
                                       <td>
                                          {{ $value->fee }}
                                       </td>
                                       <td>
                                          {{ $value->courseduration1  }}/{{ $value->courseduration2  }}
                                       </td>
                                       
                                       <td class="text-right" >
                                          <div class="actions d-flex"  >
                                             @can('Course edit')
                                             <a href="{{ route('admin.courses.edit',$value->id) }}" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             @endcan

                                             @can('Course delete')
                                             <a href="#" class="">
                                             <form
                                                
                                                method="POST"
                                                action="{{ route('admin.courses.destroy', $value->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                               
                                                <button type="submit" style=" border: none; padding:0%; background-color:none" ><i class="fas fa-trash  btn btn-sm bg-danger-light"></i></button>
                                             </form>
                                          </a>
                                          @endcan
                                             
                                          </div>
                                       </td>
                                    </tr>
                                    @endforeach
                                    @endcan
                               
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright ?? 2020.</p>
            </footer>
         </div>
      </x-dashboard-layout>
