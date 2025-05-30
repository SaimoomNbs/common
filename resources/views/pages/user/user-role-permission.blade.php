@extends('layouts.master')
<!-- custom title -->
@section('title')Role & Permission |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Admin Role Settings</h6>
            </div>
            <div class="card-body p-3">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Permission</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                        </div>
                    </li>
                </ul>
                <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0 pb-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Agent Role Settings</h6>
            </div>
            <div class="card-body p-3">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Permission</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                        </div>
                    </li>
                </ul>
                <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0 pb-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">User Role Settings</h6>
            </div>
            <div class="card-body p-3">
                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Permission</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                        </div>
                    </li>
                </ul>
                <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked="">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0 pb-0">
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection