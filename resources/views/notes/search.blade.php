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

<div class="notes-profile">
	<div class="div">
	<div class="notes-option">
		<input  name="view" type="radio" id="notes" value="notes" checked="checked"> Notes
	</div>
	
	<div class="profiles-option"> 
		<input name="view" type="radio" id="profile" value="profile"> Profiles
	</div>
	
	
	</div>
</div>
	


<div class="cards-container">
	<div class="search-metadata">
		"{{$search != '' ? $search: "all"}}"
		<br>
		<small>{{count($notes)}} results</small> 
	</div>
	
	@foreach ($notes as $note)
	@include('includes.card', [ 'card' => $note ])
	@endforeach
	
</div>

<div class="profiles-container hidden">
	<div class="search-metadata">
		"{{$search != '' ? $search: "all"}}"
		<br>
		<small>{{count($users)}} results</small> 
	</div>

	@foreach ($users as $user)
		@include('includes.profile', [ 'user' => $user ])
	@endforeach

</div>
<style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Roboto, Arial, sans-serif;
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
	
<script >
	const radios = document.querySelectorAll('input[type="radio"]');
	console.log("i'm alive");
	
	radios.forEach( btn => {
		btn.addEventListener('click', (e) => {
			checkButtons();
		});
	});
	
	const hide = (selector) => {
		const x = document.querySelector(selector);
		x.classList.add('hidden');
	}
	
	const show = (selector) => {
		const x = document.querySelector(selector);
		x.classList.remove('hidden');
	}

	const checkButtons = () => {
		for (var i = 0; i < radios.length; i++) {
			if (radios[i].type === 'radio' && radios[i].checked) {
				// get value, set checked flag or do whatever you need to
				value = radios[i].value;
				if (value == 'notes') {
					hide('.profiles-container');
					show('.cards-container');
				} 
				else {
					show('.profiles-container');
					hide('.cards-container');

				}   
			}
		}
	}

</script>

<x-flash />

</body>
</html>

