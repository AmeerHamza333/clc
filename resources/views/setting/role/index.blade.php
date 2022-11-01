<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">
           <div class="page-header">
              <div class="row align-items-center">
                 <div class="col">
                    <h3 class="page-title">Roles</h3>
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                       <li class="breadcrumb-item active">Roles</li>
                    </ul>
                 </div>
                 @can('Role create')
                 <div class="col-auto text-right float-right ml-auto">
                    {{-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> --}}
                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                   <th>Role Name</th>
                                   <th>Permissions</th>
                                   <th class="text-right">Action</th>
                                </tr>
                             </thead>
                             <tbody>
                              @can('Role access')
                              @foreach($roles as $role)
                                <tr>
                                   <td>{{ $role->name }}</td>
                                   <td>
                                    @foreach($role->permissions as $permission)
                                    <span class="bg-dark text-white rounded px-2" style="font-size: 13px">{{ $permission->name }}</span>
                                  @endforeach
                                   </td>
                                   {{-- <td>22-05-2021</td>
                                   <td>26 Apr 1994</td>
                                   <td>Full Time</td>
                                   <td>Level 2</td>
                                   <td>$ 2500</td> --}}
                                   <td class="text-right">
                                      <div class="actions">
                                       @can('Role edit')
                                         <a href="{{ route('admin.roles.edit',$role->id) }}" class="btn btn-sm bg-success-light mr-2">
                                         <i class="fas fa-pen"></i>
                                         </a>
                                       @endcan
                                         
                                    
                                       @can('Role delete')
                                         <a href="#" class="btn btn-sm bg-danger-light">
                                          <form
                                                
                                          method="POST"
                                          action="{{ route('admin.roles.destroy', $role->id) }}"
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
           <p>Copyright © 2022.</p>
        </footer>
     </div>
</x-dashboard-layout>