@extends('layouts.master')
<!-- custom title -->
@section('title')New Category |@endsection

<!-- custom style -->
@section('style')
<style>
    .dropzone {
        min-height: 200px !important;
    }
</style>
@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="col-lg-6 col-12 mx-auto">
        <div class="card card-body mt-4">
            <form id="my-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <h6 class="mb-0">New Category</h6>
                <p class="text-sm mb-0">Create new category</p>
                <hr class="horizontal dark my-3">
                <label for="CategoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="CategoryName" onfocus="focused(this)" onfocusout="defocused(this)">
                <div class="row mb-2">
                    <div class="col-12 col-lg-6">
                        <label class="mt-4 form-label">Starting Files</label>
                        <input type="hidden" name="uploaded_image" id="uploaded_image">
                        <div id="my-dropzone" class="dropzone border rounded"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="mt-4">Category Description</label>
                        <textarea name="" class="form-control" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        Category Active
                    </label>
                    <div class="form-check form-switch ms-1">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="notify(this)" data-type="warning" data-content="Once a Category is made private, you cannot revert it to a public Category." data-title="Warning" data-icon="ni ni-bell-55">
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                    </div>
                </div>
                <label class="mt-2 form-label">Assign Category To Agent</label>
                <select id="choices-multiple-remove-button" multiple>
                    <option value="php">PHP</option>
                    <option value="laravel" selected>Laravel</option>
                    <option value="vue">Vue.js</option>
                    <option value="react">React</option>
                    <option value="next">Next js</option>
                    <option value="python">Python</option>
                    <option value="javascript">Javascript</option>
                </select>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" name="button" class="btn btn-primary m-0 ms-2">Create Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')
<script src="{{asset('assets/js/plugins/dropzone.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/choices.min.js')}}"></script>
<script>
    if (document.getElementById('choices-multiple-remove-button')) {
        var element = document.getElementById('choices-multiple-remove-button');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }

    const myDropzone = new Dropzone("#my-dropzone", {
        url: "/upload-image", // Laravel route for image upload
        maxFiles: 1,
        maxFilesize: 0.1, // 100KB
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        autoProcessQueue: true, // Immediately upload image when selected
        init: function() {
            this.on("success", function(file, response) {
                // Save uploaded file name or path to hidden input
                document.getElementById('uploaded_image').value = response.path;
            });

            this.on("error", function(file, message) {
                // alert(message);
                // this.removeFile(file);
                console.log(message);
            });

            this.on("removedfile", function(file) {
                // Clear hidden input if image removed
                document.getElementById('uploaded_image').value = '';
            });
        }
    });

    // Optional: prevent form submission if image not uploaded
    document.getElementById('my-form').addEventListener('submit', function(e) {
        const imagePath = document.getElementById('uploaded_image').value;
        if (!imagePath) {
            e.preventDefault();
            alert('Please upload an image under 100KB.');
        }
    });
</script>
@endsection