@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Main / News /</span> Add News
</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Add News</h5>
        @if(session('error'))
            <div class="alert alert-success">
                <span><i class='bx bx-x'></i></span>{{ session('error') }}
            </div>
        @endif
    </div>
    <div class="card-body">
        <form action="{{ route('store-news') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="divider">
                <div class="divider-text">News Page</div>
            </div>

            <div class="d-flex flex-wrap align-items-start align-items-sm-center gap-4 mb-4">
                <div id="exampleImageContainer" class="mb-4" style="display: none;">
                    <img id="exampleImage" src="#" alt="Example Image" style="width: 1050px; height: 600px; object-fit:cover">
                </div>
                <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload cover photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" name="news_cover" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" id="resetbtn" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG or PNG. Max size of 20Mb. Recommend size is 1050x600 or more</p>
                </div>
            </div>

            <div class="mb-3">
                <label for="defaultFormControlInput" class="form-label">Title</label>
                <input type="text" class="form-control" required maxlength="500" name="news_title" id="defaultFormControlInput" placeholder="Product Name" aria-describedby="defaultFormControlHelp" />
            </div>

            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">category</label>
                <select class="form-select" required name="news_cate" id="exampleFormControlSelect1" aria-label="Example select with button addon">
                    <option value="0">News</option>
                    <option value="1">Blog</option>
                </select>
            </div>

            <div class="divider my-5">
                <div class="divider-text">News Detail Page</div>
            </div>

            <div class="mb-5">
                <label for="prodetail" class="form-label">Description</label>
                <textarea id="prodetail" name="news_desc" placeholder="Product Detail"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-outline-danger">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!--/ Hoverable Table rows -->
<script>
    tinymce.init({
        selector: 'textarea#prodetail'
    });

    // Get the file input element
    const fileInput = document.getElementById('upload');
    const resetbtn = document.getElementById('resetbtn');

    // Add an event listener to detect when a file is selected
    fileInput.addEventListener('change', handleFileSelect);
    resetbtn.addEventListener('click', resetImg);

    function handleFileSelect(event) {
        const file = event.target.files[0];

        // Check if a file is selected
        if (file) {
            // Display the example image container
            document.getElementById('exampleImageContainer').style.display = 'block';

            // Read the selected file as a data URL
            const reader = new FileReader();
            reader.onload = function (e) {
                // Set the source of the example image
                document.getElementById('exampleImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    };

    function resetImg(event) {
        const file = fileInput.files[0];

        // Check if a file is selected
        if (file) {
            // Display the example image container
            document.getElementById('exampleImageContainer').style.display = 'none';
            document.getElementById('exampleImage').src = '#';
            // Read the selected file as a data URL
        }

        fileInput.value = '';
    };
</script>
@endsection
