<x-guest-layout>
<div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/clc-logo-removebg.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Registeration</h1>
                            <p class="account-subtitle">Access to your dashboard</p>

                            <form action="{{url('')}}/createuser" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group " novalidate>
                                    <input class="form-control" name="name"  type="text"  placeholder="Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                            Name field is required.
                                    </div>
                                   
                                </div>
                               
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" required>
                                    
                                    <div class="invalid-feedback">
                                            Email field is required.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="phone"  type="text" placeholder="Phone No." required>
                                    <div class="invalid-feedback">
                                            Phone No. field is required.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password"  type="password" placeholder="Password" required>
                                    
                                    <div class="invalid-feedback">
                                            Password field is required.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="confirmpassword"  type="password" placeholder="Confirm Password" required>
                                    
                                    <div class="invalid-feedback">
                                            Confirm Password field is required.
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                           

                            <div class="text-center dont-have">Already have an account? <a href="login.html">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>