@extends('layouts.app')

@section('content')


<!-- wrapper -->
<div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="login_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                </div>
                <form action="{{route('login')}}" method="post" class="d-block">
                        @csrf
                    <div class="form-group icon_parent">
                        <label for="password">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="" required autocomplete="email" autofocus placeholder="Email Address">
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"   name="password" required autocomplete="current-password" placeholder="Password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="chech_container">Remember me
                            <input type="checkbox" name="remember" id="remember" >
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <a href="{{route('register')}}" class="registration" >Create new account</a><br>
                        @if (Route::has('password.request'))
                            <a href="{{route('password.request')}}" class="text-white">I forgot my password</a>
                        @endif
                        <button type="submit" class="btn btn-blue">Login</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; {{date('Y')}} <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div><!--/ content wrapper -->
</div><!--/ wrapper -->





@endsection
