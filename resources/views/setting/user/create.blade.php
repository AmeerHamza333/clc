<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">


            <!-- progressbar -->



            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Add User</h3>

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
                        {{-- <div class="card-header">
                            <h5 class="card-title mb-2 font-weight-bold">Personal Details</h5>
                        </div> --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <form method="POST" action="{{route('admin.users.store')}}" class="needs-validation" novalidate>
                                        @csrf
                                       
                                   
                                        <div class="form-row">
                                            
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Username:</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="" name="name"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                        THis field is required.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Email:</label>
                                                <input type="email" class="form-control" id="validationCustom02"
                                                    placeholder="" name="email" value="{{ old('email') }}" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    THis field is required.
                                            </div>
                                            </div>
                                            
                                        </div>
                                        


                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Phone</label>
                                                <input type="number" class="form-control" id="validationCustom03"
                                                    placeholder="" name="phone" required>
                                        
                                                <div class="invalid-feedback">
                                                    THis field is required.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom04">Password</label>
                                                <input type="password" class="form-control" id="validationCustom04"
                                                    placeholder="" name="password" required>
                                                    <div class="invalid-feedback">
                                                        THis field is required.
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good.
                                                    </div>

                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom05">Confirm Password</label>
                                                <input type="password" class="form-control" id="validationCustom05"
                                                    placeholder="" name="password_confirmation" required>
                                                    <div class="invalid-feedback">
                                                        This field is required.
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good.
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5 class="card-title mb-2 font-weight-bold">Roles</h5>
                                        </div>
                                        <div class="form-row mt-3 mb-3">
                                            @foreach($roles as $role)
                                            <div class="col-lg-3 box">
                                                <input class="larger"  type="checkbox"  id="checkbox1" name="roles[]" value="{{$role->id}}">
                                                <label class="mt-1 ml-1"  for="checkbox1">{{ $role->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        

                                        <button class="btn btn-primary" type="submit">Submit form</button>
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
</x-dashboard-layout>