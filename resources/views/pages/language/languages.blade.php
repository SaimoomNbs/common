@extends('layouts.master')
<!-- custom title -->
@section('title')All Languages |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="d-sm-flex justify-content-between mt-5">
        <div>
            <a href="{{route('add.language')}}" class="btn btn-primary btn-icon mb-0">
                Add Language
            </a>
        </div>
    </div>
    <div class="col-12">
        <div class="card mt-4" id="sessions">
            <div class="card-header pb-3">
                <h5>Language</h5>
                <p class="text-sm">This is a list of devices that have logged into your account. Remove those that you do not recognize.</p>
            </div>
            <div class="card-body pt-0">
                <div class="d-flex align-items-center">
                    <div class="my-auto ms-3">
                        <div class="h-100">
                            <p class="text-sm mb-1">
                                English
                            </p>
                            <p class="mb-0 text-xs">
                                Your current language
                            </p>
                        </div>
                    </div>
                    <span class="badge badge-success badge-sm my-auto ms-auto me-3">Active</span>
                    <p class="text-secondary text-sm my-auto me-3">RTL</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">Translate
                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                </div>
                <hr class="horizontal dark">
                <div class="d-flex align-items-center">
                    <p class="my-auto ms-3">Bangla</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">LTR</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">Translate
                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                </div>
                <hr class="horizontal dark">
                <div class="d-flex align-items-center">
                    <p class="my-auto ms-3">French</p>
                    <p class="text-secondary text-sm ms-auto my-auto me-3">LTR</p>
                    <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">Translate
                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection