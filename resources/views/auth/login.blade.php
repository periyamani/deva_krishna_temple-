@extends('layouts.app')
<style>
#remember-me {
    position: inherit;
    margin-left: 0px;
    margin-top: 3px;
}
</style>
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">

            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="frontend_view.home" class="app-brand-link gap-2">
                            <!-- <span class="app-brand-logo demo">
                                
                            </span> -->
                            <span class="app-brand-text demo h3 mb-0 fw-bold">Devakrishna Temple</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to Devakrishna Temple 🙏</h4>
                    <p class="mb-4">Please sign-in </p>

                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Enter your email">
                            @error('email')
                            <span class="invalid-feedback" style="display:none;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                @if (Route::has('password.request'))

                                <a href="{{ route('password.request') }}">
                                    <small>Forgot Password?</small>
                                </a>
                                @endif

                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer" style=background:none;><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">

                            <input class="form-check-input" type="checkbox" id="remember-me"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember-me">
                                Remember Me
                            </label>

                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100 disabled_button" type="submit">Sign in</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<script src="{{URL::asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection