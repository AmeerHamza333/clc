<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">





            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Add Permissions</h3>
                        

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
                                    <form method="POST" action="{{ route('admin.permissions.store')}}" class="needs-validation" novalidate>
                                        @csrf
                                        @method('post')
                                   
                                        <div class="form-row">
                                            
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Permission Name:</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="" name="name"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                        This field is required.
                                                </div>
                                            </div>
                                            
                                            
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