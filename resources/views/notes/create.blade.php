<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SharedNotes</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

		#formid {
			padding: 25px;
			margin: 25px;
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
		

		<form id="formid" method="POST" action="/create">
			@csrf
			<h1>Create Note</h1>
			<div class="info">
				<input class="fname" type="text" name="title" placeholder="Title of your note">
				<input type="text" name="tags" placeholder="Tags separeted by colons ex: drama,personal,happy">
			</div>
			<div>
				<textarea name="description" placeholder="Description" rows="4"></textarea>
			</div>
			<button type="submit" 	href="/">Create</button>
		</form>
	</div>
</body>

</html>