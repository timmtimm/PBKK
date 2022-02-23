<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

	<title>Form Student Register</title>
</head>

<style>
	:root
	{
		--orange: #FFB548;
	}
	
	/* remove arrow from number input type */
	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}

	.orange-btn
	{
		/* width: 260px;
		height: 60px; */
		padding: 0.5rem;
		border-radius: 4px;
		color: black;
		background-color: var(--orange);
		border-style: none;
		font-weight: bold;
		font-size: 16px;
		line-height: 22px;
		text-align: center;
	}

	.animate_btn
	{
		animation-name: button_hover_back;
		animation-duration: 0.25s;
		animation-fill-mode: forwards;
	}

	.animate_btn:hover
	{
		animation-name: button_hover_go;
		animation-duration: 0.25s;
		animation-fill-mode: forwards;
	}

	@keyframes button_hover_go
	{
		from
		{
			background-color: var(--orange);
			color: black;
		}

		to
		{
			background-color: #A16000;
			color: white;
		}
	}

	@keyframes button_hover_back
	{
		from
		{
			background-color: #A16000;
			color: white;
		}

		to
		{
			background-color: var(--orange);
			color: black;
		}
	}
</style>

<body class="container" style="background-color: rgba(156, 131, 95, 1); font-family: 'Open Sans', sans-serif; display: flex; margin: 30px auto;">
	<div style="width: 1250px; margin: 30px auto; background: #fff; padding: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.05); border-radius: 1rem;">
		<div class="table-title">
		<div class="row">
			<div class="col-sm-8"><h2><b>Form</b> Student Registration</h2></div>
		</div>
	</div>
	
	<form method="POST" action="{{route('process-form')}}" enctype="multipart/form-data">
		@csrf

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<h3 style="margin-top: 2rem;">Biodata</h3>
		<hr style="margin-top: 0;"/>
		<div class="mb-3">
			<label for="name" class="form-label">Full Name</label>
			<input type="text" class="form-control" name="name" placeholder="Timotius Wirawan" value="{{ old('name') }}">
		</div>
		<div class="mb-3">
			<label for="dateOfBirth" class="form-label">Date of Birth</label>
			<input type="date" class="form-control" name="dateOfBirth" value="{{ old('dateOfBirth') }}">
		</div>
		<div class="mb-3">
			<label for="address" class="form-label">Address</label>
			<input type="text" class="form-control" name="address" placeholder="The Other Street Num. 19" value="{{ old('address') }}">
		</div>
		<div class="mb-3">
			<label for="image" class="form-label">Image</label>
			<input type="file" class="form-control" name="image" value="{{ old('image') }}">
		</div>

		<h3 style="margin-top: 2rem;">Previous School Data</h3>
		<hr style="margin-top: 0;"/>
		<div class="mb-3">
			<label for="schoolOrigin" class="form-label">School Origin</label>
			<input type="text" class="form-control" name="schoolOrigin" placeholder="Gayman Elementary" value="{{ old('schoolOrigin') }}">
		</div>
		<div class="mb-3">
			<label for="grade" class="form-label">Grade</label>
			<input type="text" class="form-control" name="grade" placeholder="50" value="{{ old('grade') }}">
		</div>
		
		<button type="submit" class="btn orange-btn animate_btn" style="margin-top: 1.5rem;">Submit</button>
	</form>
	</div>

	<script>

	</script>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	-->
</body>
</html>