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
                     <h4 class="card-header">Garden Fence</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
			   <div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header">Select or take a photo:</h4>
					<div class="card-img">
						
					
						<!-- Image Preview Container -->
						<div class="card-img-preview" id="previewContainer">
							<img id="selected-image" class="img-fluid" alt="Preview Image">
						</div>
					</div>
					<div class="card-body">
						
					</div>
					<div class="card-footer">
						<input  type="file" name="image" accept="image/*" id="imageInput" onchange="previewImage()">
						@error('image')
							<div>{{ $message }}</div>
						@enderror
						
						<button class="btn btn-primary" onclick="uploadImage()" style="display:none">Upload Image</button>
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
            var preview = document.getElementById('previewContainer');
            var file = input.files[0];

            if (file) {
                preview.style.display = 'block';
                document.getElementById('selected-image').src = URL.createObjectURL(file);
                document.querySelector('.card-footer button:nth-child(2)').style.display = 'block'; // Show the upload button
            }
        }

        function uploadImage() {
            // Implement your image upload logic here
            alert('Image upload logic goes here!');
        }
    </script>
    <!-- /.container -->

    <!--footer starts from here-->
   @endsection
