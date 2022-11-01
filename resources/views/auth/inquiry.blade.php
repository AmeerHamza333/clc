<x-guest-dashboard-layout>
   <div class="main-wrapper login-body">
      <div class="login-wrapper">
         <div class="container">
            <div class="loginbox">
               <div class="login-left">
                  <img class="img-fluid mb-5" src="assets/img/clc-logo-removebg.png" alt="Logo" >
               </div>
               <div class="login-right">
                  <div class="login-right-wrap">
                     <h1>Any Inquiry</h1>
                     <p class="account-subtitle"></p>
                     @if (Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                           {{ Session::get('message_sent') }}
                        </div>
                        {{-- <p>{{ Session::get('message_sent') }}</p> --}}
                     @endif
                     <form class="needs-validation" action="{{ route('inquiry.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                           <input id="validationCustom01" name="name" class="form-control" type="name" placeholder="Name"
                           value="{{ old('name') }}"  required>

                           <div class="invalid-feedback">
                              This field is required.
                           </div>
                        </div>
                        <div class="form-group">
                           <input id="validationCustom01" name="email" class="form-control" type="email" placeholder="Email"
                           value="{{ old('email') }}"  required>

                           <div class="invalid-feedback">
                              This field is required.
                           </div>
                        </div>
                        <div class="form-group">
                           <input id="validationCustom01" name="phone" class="form-control" type="phone" placeholder="Phone Number"
                           value="{{ old('phone') }}"  required>

                           <div class="invalid-feedback">
                              This field is required.
                           </div>
                        </div>

                        <div class="form-group">
                           <textarea id="validationCustom01" rows="5" name="message" class="form-control" type="message" placeholder="Message"
                           value="{{ old('message') }}"  required></textarea>

                           <div class="invalid-feedback">
                              This field is required.
                           </div>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary btn-block" type="submit">Send</button>
                        </div>
                     </form>
                     {{-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
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
                     </div> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-guest-dashboard-layout>