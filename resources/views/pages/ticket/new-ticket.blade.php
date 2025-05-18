@extends('layouts.master')
<!-- custom title -->
@section('title')New Ticket |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row">
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
            <h6 class="mb-0">New Project</h6>
            <p class="text-sm mb-0">Create new project</p>
            <hr class="horizontal dark my-3">
            <label for="projectName" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="projectName" onfocus="focused(this)" onfocusout="defocused(this)">
            <label class="mt-4">Project Description</label>
            <p class="form-text text-muted text-xs ms-1">
                This is how others will learn about the project, so make it good!
            </p>
            <label class="mt-4 form-label">Starting Files</label>
            <form action="/file-upload" class="form-control dropzone dz-clickable" id="dropzone">

                <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
            </form>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                <button type="button" name="button" class="btn btn-primary m-0 ms-2">Create Project</button>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection