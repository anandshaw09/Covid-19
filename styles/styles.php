<style type="text/css">

*{margin:0; padding: 0; box-sizing: border-box;}

html {
  scroll-behavior: smooth;
}
.main-header
{
	height: 450px;
	width: 100%; 
}
#nav{
background-color:rgba(192,192,192,.2)!important;
}
.corona-ani img {
	animation: rotation 3s linear infinite;
}

@keyframes rotation{
	0% { transform : rotate(0); }
	100% { transform: rotate(360deg); }
}


.leftside img{animation : animate 5s linear infinite;}
@keyframes animate{
	0%{transform : scale(.75);}
	20%{transform:scale(1);}
	40%{transform:scale(.75);}
	60%{transform:scale(1);}
	80%{transform:scale(.75);}
	100%{transform:scale(1);}
}

.corona-updates{
	
}

.section{
	background-color:rgba(192,192,192,.2);
}

#sym
{
	color: red;

	border:.5px .5px .5px .5px;
	border-color: black;
	border-style: solid;
}

</style>