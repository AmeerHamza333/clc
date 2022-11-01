<x-guest-dashboard-layout>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
           <div class="container">
              <div class="loginbox" style="min-height: 326px;padding:30px">
                 {{-- <div class="login-left">
                    <img class="img-fluid mb-5" src="assets/img/clc-logo-removebg.png" alt="Logo" >
                 </div> --}}
                 <div class="container">
                    <div class="login-right-wrap">
                       <h1 class="text-center" >Verify Email</h1>
                       <p class="account-subtitle">'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.'</p>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600 " style="color: green">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                
                                
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Resend Verification Email</button>
                                     </div>
                                    {{-- <x-button>
                                        {{ __('Resend Verification Email') }}
                                    </x-button> --}}
                                
                            </form>
                
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Home</button>
                                 </div>
                                {{-- <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Log Out') }}
                                </button> --}}
                            </form>
                        </div>
                       {{-- <form class="needs-validation " novalidate action="{{ route('login') }}" method="POST" >
                        @csrf
                          <div class="form-group">
                             <input id="validationCustom01" name="email" class="form-control" type="email" placeholder="Email"
                             value="{{ old('email') }}"  required>
  
                             <div class="invalid-feedback">
                                Email field is required.
                             </div>
                          </div>
  
                          <div class="form-group">
                             <input class="form-control" id="inputValidationEx2" name="password" type="password" placeholder="Password"
                                required>
                             <div class="invalid-feedback">
                                Password field is required.
                             </div>
                          </div>
                          <div class="form-group">
                             <button class="btn btn-primary btn-block" type="submit">Login</button>
                          </div>
                       </form>
                       
                       <div class="text-center forgotpass"><a href="#">Forgot Password?</a></div>
                       <div class="login-or">
                          <span class="or-line"></span>
                          <span class="span-or">or</span>
                       </div>
                       <div class="social-login">
                          <span>Login with</span>
                          <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i
                                class="fab fa-google"></i></a>
                       </div>
                       <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a>
                       </div> --}}
                    </div>
                 </div>
                 {{-- <div class="mb-4 text-sm text-gray-600 text-center ">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
        
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif --}}
                
        
                {{-- <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
        
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Resend</button>
                         </div>
                    </form>
        
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div> --}}
              </div>
           </div>
        </div>
     </div>
 
 </x-guest-dashboard-layout>
{{-- 
<x-guest-layout> --}}
    {{-- <x-auth-card> --}}
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div> --}}
    {{-- </x-auth-card> --}}
{{-- </x-guest-layout> --}}
