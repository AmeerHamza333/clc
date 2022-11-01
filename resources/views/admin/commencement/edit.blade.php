<x-dashboard-layout>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Course</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.commencement.index')}}">Edit Commencement</a></li>
                            <li class="breadcrumb-item active">Edit Course</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('admin.commencement.update',$commencements->id )}}"
                                method="Post" novalidate>
                                @csrf
                                @method('PATCH')
                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Session Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                            name="sessionname" value="{{ $commencements->sessionname }}" required>
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
                                            value="{{ $commencements->sessionstartdate }}" name="sessionstartdate" required>
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
                                            value="{{ $commencements->sessionenddate }}" name="sessionenddate" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            THis field is required.
                                        </div>
                                    </div>
                                </div>


                                <button class="btn btn-primary" type="submit">Edit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>