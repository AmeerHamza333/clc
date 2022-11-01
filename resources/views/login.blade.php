<x-guest-layout>
   <div class="main-wrapper login-body">
      <div class="login-wrapper">
         <div class="container">
            <div class="loginbox">
               <div class="login-left">
                  <img class="img-fluid mb-5" src="assets/img/clc-logo-removebg.png" alt="Logo" >
               </div>
               <div class="login-right">
                  <div class="login-right-wrap">
                     <h1>Login</h1>
                     <p class="account-subtitle">Access to our dashboard</p>
                     <form class="needs-validation " novalidate action="#">
                        <div class="form-group">
                           <input id="validationCustom01" class="form-control" type="email" placeholder="Email"
                              required>

                           <div class="invalid-feedback">
                              Email field is required.
                           </div>
                        </div>

                        <div class="form-group">
                           <input class="form-control" id="inputValidationEx2" type="password" placeholder="Password"
                              required>
                           <div class="invalid-feedback">
                              Password field is required.
                           </div>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                     </form>
                     <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                     <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                     </div>
                     <div class="social-login">
                        <span>Login with</span>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i
                              class="fab fa-google"></i></a>
                     </div>
                     <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</x-guest-layout>