@extends('layouts.master')
<!-- custom title -->
@section('title')New Tag |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="col-lg-6 col-12 mx-auto">
        <div class="card card-body mt-4">
            <h6 class="mb-0">New Tag</h6>
            <p class="text-sm mb-0">Create new Tag</p>
            <hr class="horizontal dark my-3">
            <label for="TagName" class="form-label">Tag Name</label>
            <input type="text" class="form-control" id="TagName" onfocus="focused(this)" onfocusout="defocused(this)">
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>
                            Tag Active
                        </label>
                        <!-- <p class="form-text text-muted text-xs ms-1">
                            If you are available for hire outside .
                        </p> -->
                        <div class="form-check form-switch ms-1">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)" data-type="warning" data-content="Once a Tag is made private, you cannot revert it to a public Tag." data-title="Warning" data-icon="ni ni-bell-55">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-primary m-0 ms-2">Create Tag</button>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection