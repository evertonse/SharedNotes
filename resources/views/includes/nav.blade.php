<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Roboto, Arial, sans-serif;

}

/*>> Search bar*/
.nav {
	margin: 0;
	height: 7vh;
	width: 99vw;
	position: relative;
	display: flex;
	justify-content: space-around;
	align-content: center;
	align-items: center;
	flex-wrap: nowrap;
	box-shadow: 0 4px 2px -2px rgba(128, 128, 128, 0.541);
}
.logo {
	flex-basis: 20%;
}
/*Resize the wrap to see the search bar change!*/
.search-wrap {
	flex-basis: 30%;
}	

.search-wrap-form {
	align-self: center;
	flex-basis: 30%;
}	
.search {
	width: 98%;
	display: flex;
}
.search > input {
	height: 100%;
	display: flex;
}

.searchTerm {
	width: 100%;
	border: 3px solid #000ecc2f;
	border-right: none;
	padding: 5px;
	height: 20px;
	border-radius: 5px 0 0 5px;
	outline: none;
	color: #9DBFAF;
}

.searchTerm:focus {
	color: #00B4CC;
}

.searchButton {
	width: 40px;
	height: 36px;
	border: 1px solid #00b4cc4d;
	text-align: center;
	color: #fff;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
	font-size: 20px;
}


.user {
	flex-basis: 20%;
}

#logo-img {
	width: 60%;
	vertical-align: top
}
a {
 display: inline-block;
 transition: .1s;
 font-weight:bold;
 text-decoration:none;
 }
 a:hover {
 -webkit-transform: scale(1.02);
 transform: scale(1.01);
 }
/*<<*/
</style>
<div class="nav">
	<div class="logo">
		<a href="/">
			<img id="logo-img" src="/img/logo.png" alt="" srcset="">
		</a>
	</div>

	<form class="search-wrap-form" action="/" method="GET">
	<div class="search-wrap">
		<div class="search">
			<input name="search" type="search" class="searchTerm" placeholder="What are you looking for?">
			<button type="submit" class="searchButton">
				<i class="fa fa-search"></i>
			</button>
		</div>
	</div>
</form>
	
	<div class="writre"><a href="/create">Write a Note ✏️</a></div>
@auth
		<div class="user"> 
			<h5>
				Welcome, <a href="/profile/{{auth()->user()->id}}">{{auth()->user()->name}}</a>
			</h5>
		</div>
	
		<a href="/logout">Log-out</a>
@else 
	<a href="/register">Register</a>
	<a href="/login">Login</a>
@endauth

</div>


