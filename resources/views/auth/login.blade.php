<x-guest-layout>
    <section>
        <div class="page-header min-vh-85">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8 d-flex flex-column mx-lg-0 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start mt-4">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="small mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body pt-3">
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1 pb-0">
                                    <p class="text-sm mx-auto mb-0">
                                        Don't have an account?
                                        <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>