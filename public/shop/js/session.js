class Session{
	constructor(user){
			this.user = user;
			/* Adding updateSession to the user associated with it */
			Session.currentUser = this.user;
	}

	updateSession(){

	}
	endSession(){
		
	}
}