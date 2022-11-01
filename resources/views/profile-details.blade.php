@extends('incdashboard/layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Student Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                    <li class="breadcrumb-item active">Student Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-info">
                        <h4>About Me</h4>
                        
                        
                        <form action="/User/EditStudentInfo" method="post" id="form1">

                            <h2 class="form-heading">PROFILE DETAILS</h2>
                            <input class="form-control" placeholder="Business Development" name="AspNetUserID" value="4ab86223-8064-4ca0-83a7-faa4d46f6fe1" required="" hidden="">
                            <input class="form-control" placeholder="Business Development" name="UserTypeID" value="1" required="" hidden="">
                            <div class="row pl-4 pl-4-remove-mobile">
                                <div class="col-md-5 m-0 p-0 d-inline-block half">
                                    <div>
                                        <img src="assets/img/user.jpg" id="ProfilePicture" style="width:95%;height:350px;" class="img-fluid">
                                        <label class="next cursor-pointer" for="ProfilePic" style="text-align: center;padding: 5px;text-align: center;padding: 8px;margin-top: 10px;">Change Picture</label>
                                        <input type="file" accept="image/*" value="Change Picture" onchange="sendFilesAjax('ProfilePic')" onclick="empty_value()" id="ProfilePic" name="ProfilePic">
                                    </div>
                                </div>
                                <div class="col-md-6 m-0 p-0 d-inline-block half form-mobile-padding-right">
                
                                    <div>
                                        <div class="form-group ">
                                            <label for="usr" class="form-label">First Name</label>
                                            <input class="form-control" placeholder="First Name" name="FirstName" value="ADMIN" required="" id="FirstName">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group ">
                                            <label for="usr" class="form-label">Last Name</label>
                                            <input class="form-control" placeholder="Last Name" name="LastName" value="ADMIN" required="" id="LastName">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group ">
                                            <label for="usr" class="form-label">Email</label>
                                            <input type="text" class="form-control" placeholder="example@example.com" name="Email" value="admin@admin.com" required="" id="Email" readonly="">
                                        </div>
                                    </div>
                
                                    <div>
                                        <div class="form-group ">
                                            <label for="usr" class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="Country" value="" id="Password" minlength="8">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-0 p-0 text-right mb-3 mt-3">
                                        <button type="submit" class="next cursor-pointer">Update Info</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    
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

