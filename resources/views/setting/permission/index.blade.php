<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">
           <div class="page-header">
              <div class="row align-items-center">
                 <div class="col">
                    <h3 class="page-title">Course</h3>
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                       <li class="breadcrumb-item active">Students</li>
                    </ul>
                 </div>
                 @can('Permission create')
                 <div class="col-auto text-right float-right ml-auto">
                    
                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                   {{-- <th>ID</th> --}}
                                   
                                   <th>Permissions</th>
                                   <th class="text-right">Action</th>
                                </tr>
                             </thead>
                             <tbody>
                              @can('Permission access')
                              @foreach($permissions as $permission)
                                <tr>
                                   <td>{{ $permission->name }}</td>
                                   
                                   {{-- <td>22-05-2021</td>
                                   <td>26 Apr 1994</td>
                                   <td>Full Time</td>
                                   <td>Level 2</td>
                                   <td>$ 2500</td> --}}
                                   <td class="text-right">
                                      <div class="actions">
                                       @can('Permission edit')
                                         <a href="{{ route('admin.permissions.edit',$permission->id) }}" class="btn btn-sm bg-success-light mr-2">
                                         <i class="fas fa-pen"></i>
                                         </a>
                                       @endcan
                                         
                                    
                                       @can('Permission delete')
                                         <a href="#" class="btn btn-sm bg-danger-light">
                                          <form
                                                
                                          method="POST"
                                          action="{{ route('admin.permissions.destroy', $permission->id) }}"
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
           <p>Copyright © 2020 Dreamguys.</p>
        </footer>
     </div>
</x-dashboard-layout>