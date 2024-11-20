<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('/log/css/style.css') }}">

</head>
<body class="img js-fullheight" style="background-image: url('/log/images/bg.jpg');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                    <form class="signin-form" action="{{route('register')}}" method="POST">
							@csrf   
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" required>
                    </div><br>
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required>
		      		</div><br>
	          
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div><br>
	            <div class="form-group">
	              <input type="password" class="form-control" placeholder="Confirm Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div><br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
			  <p class="w-100 text-center">&mdash; <a href="/login">Login</a>&mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>


	<script src="{{ asset('/log/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/log/js/popper.js') }}"></script>
  <script src="{{ asset('/log/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/log/js/main.js') }}"></script>
	</body>
</html>
