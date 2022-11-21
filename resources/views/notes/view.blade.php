<!DOCTYPE html>
<html>

<head>
	<title>Shared Notes</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
		integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<style>
		html,
		body {
			min-height: 100%;
			padding: 0;
			margin: 0;

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
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			gap: 5rem;
		}
		.owner-profile{
			text-align: center;

		}

		.owner-profile img{
			width: 8rem;
			height: 8rem;
			border-radius: 50%;
		}
		
		.journal{
			flex-basis: 30%;
		}
		
		.title{
			text-align: center;
			text-shadow: 0 0 2px rgb(0, 0, 0);
		}

		footer{
			display: flex;
			min-height: 20vh;
			flex-direction: column;
			align-items: center;
			
		}

		.comments-section {
		}
		.comment {
			padding: 0.3rem;
			padding-right: 1rem;
			padding-left: 1rem;
			margin: 0.5rem;
			background-color: rgba(2, 2, 2, 0.06);
			width: 20rem;
		}
		input[type='submit'],
		button {
			padding: .7rem;
			border: none;
			border-radius: 10px;
			background: #1c87c9;
			font-size: 14px;
			font-weight: 400;
			color: #fff;
		}
		button:hover {
			background: #2371a0;
		}

	</style>
</head>

<body>
	@php
		$note->reads = $note->reads + 1; 	
		$note->save();
	@endphp
	@include('includes.nav')

		<div class="main-block">
			<div class="owner-profile">
				<p>by {{
					$note->owner == null ? "anonymous":$note->owner
					}}</p>
				<a href="/profile/{{$note->id_owner}}">
					<button type="button"> see </button>
				</a>

			</div>
			<div class="journal">
				<div class="title">
					<h1> {{ $note->title }}</h1>
						👁️:{{$note->reads}}

				</div>
					<p>{{ $note->content }}</p>
			</div>

		</div>
		<footer>
			
			<div class="comment-form">
						

			<form id="formid" method="POST" action="/view/post">
				@csrf
				<input class="title-input" value=" " type="text" name="content" placeholder="Leave a comment">
				<input class="title-input" type="hidden" name="id_note" value="{{$note->id}}">
				<input type="submit" value="send">
			</form>
			</div>

			<div class="comments-section">
				@foreach ($comments as $comment)
				<div class="comment">
					<h5>{{$comment->owner}}</h5>
					<p>{{$comment->content}}</p>
				</div>
				@endforeach
			</div>
		</footer>

</body>

</html>