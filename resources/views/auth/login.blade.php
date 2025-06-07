@extends('layouts.guest')
@section('title')Sign In |@endsection
@section('style')@endsection
@section('content')
<section>
    <div class="page-header min-vh-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8 d-flex flex-column mx-lg-0 mx-auto">
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start mt-4">
                                <h4 class="font-weight-bolder">Sign In</h4>
                                <p class="small mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body pt-3">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" checked>
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="login-button" class="btn btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1 pb-0">
                                <p class="text-sm mx-auto mb-0">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="position-fixed top-1 end-0 z-index-9999">
    <div class="toast fade p-2 bg-dark" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
        <div class="toast-header border-0 bg-dark text-white p-1">
            <span class="me-auto font-weight-bold">{{ config('app.name') }} says</span>
            <small class="text-body">few seconds ago</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
        </div>
        <hr class="horizontal m-0 bg-white">
        <div class="toast-body text-success p-1 fw-bold">
            Hello, world! This is a notification message.
        </div>
    </div>
</div>
<div class="position-fixed top-1 end-0 z-index-9999">
    <div class="toast fade p-2 bg-dark" role="alert" aria-live="assertive" id="failedToast" aria-atomic="true">
        <div class="toast-header border-0 bg-dark text-white p-1">
            <span class="me-auto font-weight-bold">{{ config('app.name') }} says</span>
            <small class="text-body">few seconds ago</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
        </div>
        <hr class="horizontal m-0 bg-white">
        <div class="toast-body text-danger p-1 fw-bold">
            Hello, world! This is a notification message.
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('login-form');
        const loginButton = document.getElementById('login-button');

        // Toast elements
        const successToast = document.getElementById('successToast');
        const failedToast = document.getElementById('failedToast');
        const successBody = successToast.querySelector('.toast-body');
        const failedBody = failedToast.querySelector('.toast-body');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            loginButton.disabled = true;
            loginButton.innerText = 'Signing...';

            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        showToast('Login successful! Redirecting...', 'success');
                        window.location.href = '/';
                        return response;
                    }
                    // Handle validation error (422) or other
                    return response.json().then(error => {
                        const message = error.message || 'Invalid credentials. Please try again.';
                        throw new Error(error.message || 'Invalid credentials');
                    });
                })
                .then(data => {
                    showToast('Login successful! Redirecting...', 'success');
                    // ✅ Successful login — redirect now
                    window.location.href = '/';
                })
                .catch(error => {
                    showToast(error.message || 'Something went wrong!', 'error');
                    loginButton.disabled = false;
                    loginButton.innerText = 'Sign in';
                });
        });

        function showToast(message, type) {
            if (type === 'success') {
                successBody.textContent = message;
                const toast = new bootstrap.Toast(successToast);
                toast.show();
            } else {
                failedBody.textContent = message;
                const toast = new bootstrap.Toast(failedToast);
                toast.show();
            }
        }
    });
</script>

@endsection