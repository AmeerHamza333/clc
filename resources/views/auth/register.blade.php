<x-guest-dashboard-layout>
    <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-left">
                            <img class="img-fluid" src="assets/img/clc-logo-removebg.png" alt="Logo">
                        </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Signup</h1>
                                <p class="account-subtitle">Access to your dashboard</p>
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
                                <form action="{{ route('register') }}" method="post" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group " novalidate>
                                        <input class="form-control" name="name"  type="text"  placeholder="Name" value="{{ old('name') }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                                Name field is required.
                                        </div>
                                       
                                    </div>
                                   
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                                        
                                        <div class="invalid-feedback">
                                                Email field is required.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="phone"  type="text" placeholder="Phone No." value="{{ old('phone') }}" required>
                                        <div class="invalid-feedback">
                                                Phone No. field is required.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password"  type="password" placeholder="Password" value="{{ old('password') }}" required>
                                        
                                        <div class="invalid-feedback">
                                                Password field is required.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password_confirmation"  type="password" placeholder="Confirm Password" required>
                                        
                                        <div class="invalid-feedback">
                                                Confirm Password field is required.
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Signup</button>
                                    </div>
                                </form>
    
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
    
                               
    
                                <div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-dashboard-layout>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
