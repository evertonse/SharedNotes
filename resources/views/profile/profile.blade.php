<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SharedNotes</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>


@include('includes.nav')

<div class="title">
	<h2>{{$user->name}}</h2>
</div>

<main>

	<div class="notes-profile">
		@foreach ($notes as $note)
		@include('includes.card', [ 'card' => $note ])
		@endforeach
	</div>
		
</main>
<style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Roboto, Arial, sans-serif;
}
main {
	margin-top: 20rem;
	text-align: center;
}		
.title{
	margin-top: 10rem;
	text-align: center;
	text-shadow: 0 0 2px rgb(0, 0, 0);
}

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


button {
	padding: 0.2rem;
	border: none;
	border-radius: 16px;
	background: #1c87c9;
	font-size: 10px;
	font-weight: 400;
	color: #fff;
}

button:hover {
	background: #2371a0;
}




.search-metadata {
	position: absolute;
	top: 1rem;
	left: 1rem;
}
/*<<*/

/*>> PROFILE OR NOTES*/
.notes-profile {
	padding: 2rem;
	height: 5vh;
	gap: 2rem;
	display: flex;
	align-items: center;
	align-content: center;
	flex-wrap: nowrap

}
/*<<*/

.profiles-container,
.cards-container  {
	position: relative;
	background-color: azure;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
	gap: 1rem;
	
	/*Avoid those text */
	overflow-wrap: break-word;
}

.hidden {
	display: none;
}

</style>
	

<x-flash />

</body>
</html>

