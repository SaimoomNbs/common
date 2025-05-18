@extends('layouts.master')
@section('title')Update Profile |@endsection
@section('style')@endsection
@section('content')
<div class="card card-body mb-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-auto col-4">
            <div class="avatar avatar-xl position-relative">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=57c149&background=EBF4FF" alt="bruce" class="w-100 border-radius-lg shadow-sm">
            </div>
        </div>
        <div class="col-sm-auto col-8 my-auto">
            <div class="h-100">
                <h5 class="mb-1 font-weight-bolder text-capitalize">
                    {{ Auth::user()->name }}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                    Admin
                </p>
            </div>
        </div>
        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
            <label class="form-check-label mb-0">
                <small id="profileVisibility">
                    Switch to invisible
                </small>
            </label>
            <div class="form-check form-switch ms-2">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked="" onchange="visible()">
            </div>
        </div>
    </div>
</div>
@include('profile.partials.update-profile-information-form')
@include('profile.partials.update-password-form')
@include('profile.partials.delete-user-form')
@endsection