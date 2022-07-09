
@extends('template')

@section('body')
    <div class="container-fluid p-0">
            <div class="create">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 m-auto">
                    @if (Session::has('error'))
                        <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif 
                    <form action="{{ route('register') }}" method="POST" name="register">
                        @csrf
                        <div class="heading">Create Your Account</div>
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="name">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="name" placeholder="Enter Your Name" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="name">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="name">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter Your Password" value="">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        {{-- <div class="name">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password_confirm" placeholder="Password Confirmation">
                        </div> --}}
                        <div class="sign-up-btn">
                            <button type="submit">SIGN UP</button>
                        </div>
                        <div class="already">Already have an account? <a href="/signin">Login Now</a></div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
    </div>

@endsection

