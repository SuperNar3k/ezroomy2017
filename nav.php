<div class="header">
            <img class="icon" src="icon/hiresweb.png" alt="Icon">
			<a class="name">EZROOMY</a>
			<button class="homeprflbutton">Home Profile<i class="fa fa-caret-down"></i></button>
            <button class="userprflbutton">User Profile<i class="fa fa-caret-down"></i></button>
            <button class="signinbutton" href="login.php"> Sign-up/Log-in<i class="fa fa-caret-down"></i></button>
</div>
<style>
.header {
	overflow: hidden;
	position: fixed;
	height: 50px;
	width:100%;
	background-color: #393939;
	display: flex;
	align-self: center;
	justify-content: space-around;
	flex-flow: row nowrap;
	flex-basis: 10px;
    box-shadow: 0px 15px 15px -10px rgba(0,0,0,0.15);
}

.name{
	float:left;
    position:relative;
	font-weight:bold;
	font-size: 40px;
	color: rgb(255, 255, 255);
	text-decoration: none;
	flex-grow: 1;
}

.icon:hover{
	transform: translateY(-2px);
	transition: 400ms;
}
.name:hover{
	color:rgb(74, 202, 111);
	transform: translateY(-2px);
	transition: 400ms;
}

.icon{
	transition:400ms;
	height:50px;
}
</style>