<!DOCTYPE html>
<html>

<head>
	<title>Shared Journal</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
		integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<style>
		html,
		body {
			min-height: 100%;
			padding: 0;
			margin: 0;
			font-family: Roboto, Arial, sans-serif;
			font-size: 14px;
		}

		h1 {
			margin: 0 0 20px;
			font-weight: 400;
		}

		p {
			margin: 0 0 5px;
		}

		.main-block {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}

		form {
			padding: 25px;
			margin: 25px;
			max-width: 20%;
			box-shadow: 0 2px 5px #f5f5f5;

		}

		.fas {
			margin: 25px 10px 0;
			font-size: 72px;
			color: #fff;
		}

		.fa-envelope {
			transform: rotate(-20deg);
		}

		.fa-at,
		.fa-mail-bulk {
			transform: rotate(10deg);
		}

		input,
		textarea {
			width: calc(100% - 18px);
			padding: 8px;
			margin-bottom: 20px;
			border: 1px solid #0000000a;
			outline: none;
			resize: none;
		}

		input::placeholder {
			color: #666;
		}

		button {
			width: 100%;
			padding: 10px;
			border: none;
			background: #1c87c9;
			font-size: 16px;
			font-weight: 400;
			color: #fff;
		}

		button:hover {
			background: #2371a0;
		}

		@media (min-width: 568px) {
			.main-block {
				flex-direction: row;
			}

			.left-part,
			form {
				width: 50%;
			}
		}

	</style>
</head>

<body>
	@include('includes.nav')

	<div class="main-block">
		<form method="POST" action="/login">
			@csrf
			<h1>Login</h1>
			<div class="info">
				<input value="{{old('username')}}"class="fname" type="text" required name="username" placeholder="Username">
				@error('username')
					<p style="font-size: 12px;color: red;"> {{$message}}</p>
				@enderror
				
				<input type="password"  required name="password" placeholder="Password">
				@error('password')
					<p style="font-size: 12px;color: red;"> {{$message}}</p>
				@enderror
			</div>

			<button type="submit" 	href="/">login</button>
		</form>
	</div>
</body>

<x-flash />


</html>