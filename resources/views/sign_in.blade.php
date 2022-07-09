
@extends('template')

@section('body')
    <div class="container-fluid p-0">
            <div class="create">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 m-auto">
                     <!-- <script>alert("{{Session('msg')}}")</script>
                     @if(Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::has('success'))
                        <p class="text-success">{{ Session::get('success') }}</p>
                    @endif  -->
                    <form action="{{ route('login')}}" method="POST">
                        @csrf
                        <div class="heading">Login</div>
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="name">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="name">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter Your Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="sign-up-btn">
                            <button type="submit">SIGN IN</button>
                        </div>
                        <div class="already">Don't have an account? <a href="/signup">Create Your Account</a></div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
    </div>

@endsection