@extends('layouts.master')
<!-- custom title -->
@section('title')Create Page |@endsection

<!-- custom style -->
@section('style')
<style>
    #editor {
      height: 300px !important;
    }
    .ql-container {
      border-radius: 5px;
    }
  </style>
@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="col-lg-12 col-12">
        <div class="card card-body mt-4">
            <h6 class="mb-0">New Page</h6>
            <p class="text-sm mb-0">Create new Page</p>
            <hr class="horizontal dark my-3">
            <label for="PageName" class="form-label">Page Title</label>
            <input type="text" class="form-control" id="PageName" onfocus="focused(this)" onfocusout="defocused(this)">
            <div class="row mt-4">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>
                            Page Active
                        </label>
                        <div class="form-check form-switch ms-1">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)" data-type="warning" data-content="Once a Page is made private, you cannot revert it to a public Page." data-title="Warning" data-icon="ni ni-bell-55">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                    </div>
                </div>
            </div>
            <label class="mt-4">Page Description</label>
            <div id="toolbar">
                <select class="ql-header">
                    <option value="1">Heading 1</option>
                    <option value="2">Heading 2</option>
                    <option selected>Normal</option>
                </select>
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-code-block"></button>
                <button class="ql-link"></button>
                <button class="ql-image"></button>
            </div>
            <div id="editor"></div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-primary m-0 ms-2">Create Page</button>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')
<script src="{{asset('assets/js/plugins/quill.min.js')}}"></script>
<script>
    if (document.getElementById('editor')) {
        var quill = new Quill('#editor', {
            theme: 'snow', // Specify theme in configuration
            modules: {
                toolbar: '#toolbar'
            }
        });
    }
</script>
@endsection