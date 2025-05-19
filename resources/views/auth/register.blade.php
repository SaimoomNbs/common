@extends('layouts.guest')
@section('title')Sign In |@endsection
@section('style')@endsection
@section('content')
<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8 d-flex flex-column mx-lg-0 mx-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card card-plain mt-5">
                            <div class="card-header pb-0 pt-5 text-left">
                                <h4 class="font-weight-bolder">Sign Up</h4>
                                <p class="small mb-2">Enter your email and password to register</p>
                            </div>
                            <div class="card-body pb-3 py-0">
                                <form role="form">
                                    <label>Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name">
                                    </div>
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email">
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password">
                                    </div>
                                    <label>Repeat Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password" aria-label="Repeat Password">
                                    </div>
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree the <a href="#" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                <p class="mb-4 mx-auto">
                                    Already have an account?
                                    <a href="{{route('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection