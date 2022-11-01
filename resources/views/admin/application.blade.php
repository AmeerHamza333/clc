<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Applications</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Applications</li>
                        </ul>
                    </div>
                    {{-- <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div> --}}
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

                                        @foreach  ($data as $value )
                                        {{-- {{ dd($studentapplications) }} --}}
                                        <tr>
                                            <td> {{ $value->said}}</td>
                                            <td>
                                                {{ $value->firstname}}
                                            </td>
                                            <td> {{ $value->coursename}}</td>
                                            <td> {{ $value->startdate}}</td>
                                            <td> {{ $value->enddate}}</td>
                                            <!-- <td id="sidebar-menu">
                                                <div class="dropdown show">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        @if ($value->status==1)
                                                        Approve
                                                        @elseif ($value->status==2)
                                                        Reject
                                                        @elseif ($value->status==3)
                                                        Revision
                                                        @elseif ($value->status==4)
                                                        Pending
                                                        @endif

                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.applications-approve',$value->said )}}">Approve</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.applications-reject',$value->said) }}">Reject</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.applications-revision',$value->said) }}">Revision</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.applications-pending',$value->said )}}">Pending</a>
                                                    </div>
                                                </div>
                                                {{-- <select class="form-control " name="status">
                                             <option>- Select -</option>
                                             <button><a href="{{ route('admin.applications-approve',$value->said) }}"
                                                class="bg-danger"><option>Approve</option></a></button>
                                                <option><a
                                                        href="{{ route('admin.applications-review',$value->said) }}">Review</a>
                                                </option>
                                                <option><a
                                                        href="{{ route('admin.applications-revision',$value->said) }}">Revision</a>
                                                </option>
                                                <option><a
                                                        href="{{ route('admin.applications-pending',$value->said )}}">Pending</a>
                                                </option>
                                                </select> --}}
                                            </td> -->
                                            <td>
                                                <span class="badge badge-secondary p-2"> @if ($value->status==1)
                                                    Approve
                                                    @elseif ($value->status==2)
                                                    Reject
                                                    @elseif ($value->status==3)
                                                    Revision
                                                    @elseif ($value->status==4)
                                                    Pending
                                                    @endif</span>
                                            </td>
                                            <td class="text-right">

                                                <div class="actions">

                                                    <a href="{{ route('admin.applicationview',$value->said) }}"
                                                        class="btn btn-sm bg-success-light mr-2">
                                                        View
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
            <p>Copyright © 2022</p>
        </footer>
    </div>
</x-dashboard-layout>