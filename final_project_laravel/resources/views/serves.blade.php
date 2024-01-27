@extends('frontend.master')
<!-- full Title -->
@section('content')
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Services
                <small>Subheading</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>

        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />

        <!-- Services Section -->
        <div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Select or take a photo befor:</h4>
						<div class="card-img">


                            <!-- Image Preview Container -->
                            <div class="card-img-preview" id="previewContainer">
                                
                            </div>
							<div class="card-body">
								<img id="selected-image2" class="img-fluid" alt="Preview Image2">

							</div>
                        </div>


                        <div class="card-footer">
                            <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="file" name="image2" accept="image/*" id="imageInput2"
                                    onchange="previewImage()">
                                @error('image2')
                                    <div>{{ $message }}</div>
                                @enderror
								
                            
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Select or take a photo:</h4>
                        <div class="card-img">


                            <!-- Image Preview Container -->
                            <div class="card-img-preview" id="previewContainer">
                               
                            </div>
                        </div>
                        <div class="card-body">
							<img id="selected-image" class="img-fluid" alt="Preview Image">
                           
                        </div>

                        <div class="card-footer">
                            
                                

                                <input type="file" name="image" accept="image/*" id="imageInput"
                                    onchange="previewImage()">
                                @error('image')
                                    <div><h1>{{ $message }}</h1></div>
                                @enderror
								<button class="btn btn-primary upload-button" style="display:none">Upload Image</button>
                            </form>
							
                        </div>
						
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- Our Customers -->


    </div>
    <script>
        function previewImage() {
            var input = document.getElementById('imageInput');
			var input2 = document.getElementById('imageInput2');
            var preview = document.getElementById('previewContainer');
			var preview2 = document.getElementById('previewContainer2');
            var file = input.files[0];
			var file2 = input2.files[0];
			
			
			document.getElementById('selected-image').src = URL.createObjectURL(file);
            document.getElementById('selected-image2').src = URL.createObjectURL(file2);
			var uploadButton = document.querySelector('.upload-button');

            if (file&&file2) {
               // preview.style.display = 'block';
                uploadButton.style.display = 'block'; // Show the upload button
            } else {
               // preview.style.display = 'none';
                uploadButton.style.display = 'none'; // Hide the upload button if no file is selected
            }
        }

        function uploadImage() {
            // Implement your image upload logic here
            alert('Image upload logic goes here!');
        }




		/*function previewImage2() {
            var input = document.getElementById('imageInput2');
            var preview = document.getElementById('previewContainer2');
            var file = input.files[0];
            var uploadButton = document.querySelector('.upload-button2');

            if (file) {
                preview.style.display = 'block';
                document.getElementById('selected-image2').src = URL.createObjectURL(file);
                uploadButton.style.display = 'block'; // Show the upload button
            } else {
                preview.style.display = 'none';
                uploadButton.style.display = 'none'; // Hide the upload button if no file is selected
            }
        }

        function uploadImage2() {
            // Implement your image upload logic here
            alert('Image upload logic goes here!');
        }*/
    </script>

    <!-- /.container -->

    <!--footer starts from here-->
@endsection