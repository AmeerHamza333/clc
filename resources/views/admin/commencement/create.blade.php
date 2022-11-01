<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Course</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                            <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.commencement.store')}}" method="Post"
                                novalidate>
                                @csrf
                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Session Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            name="sessionname" required>
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
                                            value="" name="sessionstartdate" required>
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
                                            value="" name="sessionenddate" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="btn btn-primary" type="submit">Add </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
