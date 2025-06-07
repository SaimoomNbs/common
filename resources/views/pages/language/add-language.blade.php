@extends('layouts.master')
<!-- custom title -->
@section('title')Add Language |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="col-lg-8 col-12 mx-auto">
        <div class="card card-body mt-4">
            <h6 class="mb-0">New Language</h6>
            <p class="text-sm mb-0">add new Language</p>
            <hr class="horizontal dark my-3">
            <label for="LanguageName" class="form-label">Language Title</label>
            <input type="text" class="form-control" id="LanguageName" placeholder="Ex: English" onfocus="focused(this)" onfocusout="defocused(this)">
            <div class="row mt-4">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label>
                            Language Active
                        </label>
                        <div class="form-check form-switch ms-1">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)" data-type="warning" data-content="Once a Language is made private, you cannot revert it to a public Language." data-title="Warning" data-icon="ni ni-bell-55">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label>Direction</label>
                        <select class="form-control">
                            <option selected="selected">...</option>
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label>Language code</label>
                        <input type="text" class="form-control" placeholder="Ex: en">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-primary m-0 ms-2">Add Language</button>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection