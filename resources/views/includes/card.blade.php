<!-- Card1 -->
<style>


/* Add some padding inside the card container */
.card-text-container {
	padding: 1rem;
	overflow: hidden;
}
.card {
	width: 25rem;
}

.card {
	padding: 0.5rem;
	border-radius: 10px;
	background-color: beige;
	/* Add shadows to create the "card" effect */
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	transition: 0.2s;
	display: flex;
	align-items: center;
}
.card-text {
	text-overflow: ellipsis;
}
.card img{
	width: 145px;
	border-radius: 8px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

</style>
<div class="card"  onclick="location.href='/view/{{$card->id}}';" style="cursor: pointer;">
	<div class="card-text-container">
		<div class="card-title"><h4><b>{{$card->title}}</b></h4></div>
		<div class="card-data">👁️:{{$card->reads}} 🌟:{{$card->votes}}</div>
		<div class="card-text">{{$card->description}}
			@auth
			@if(auth()->user()->id == $card->id_owner)
			<form method="get" action="/edit/{{$card->id}}">
	    	<button type="submit">edit</button>
			</form>
			
			<form method="get" action="/delete/{{$card->id}}">
	    	<button type="submit">delete</button>
			</form>
			@endif
			@endauth
		</div>
	</div>
</div>