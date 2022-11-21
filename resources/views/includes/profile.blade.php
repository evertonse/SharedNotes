<!-- Card1 -->
<style>


/* Add some padding inside the card container */
.card-text-container {
	padding: 1rem;
	display: flex;
	align-items: center;
	flex-direction: column;
	align-content: center;
	gap: 1rem;
	overflow: hidden;
}
.card {
	width: 25rem;
}
.card-button-container{
	display: flex;
	align-items: center;
	align-content: center;
	gap: 0.7rem;
}
}

.card {
	padding: 0.5rem;
	border-radius: 2px;
	background-color: beige;
	/* Add shadows to create the "card" effect */
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	transition: 0.3s;
	display: flex;
	align-items: center;
}
.card-text {
	text-overflow: ellipsis;
}
.card img{
	width: 145px;
	height: 145px;
	border-radius: 50%;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

</style>
<div class="card">
	<div class="card-text-container">
		<div class="card-title"><h4><b>{{$user->name}}</b></h4></div>
		<div class="card-button-container">
			<a href="/profile/{{$user->id}}"><button>see</button></a>
		</div>
	</div>
</div>