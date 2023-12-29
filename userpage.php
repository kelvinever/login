<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
    <h1>
        Hello Please wait a moment while we direct you to the voting area 
        THANK YOU
    </h1>
	<div class="box"></div>
	<div class="shadow">loading</div>
	<div class="m1"></div>
</div>
    <STYle>
    *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
 body{
 	max-width: 355px;
 	width: 355px;
 	height: 100vh;
 	display: flex;
 	align-items: center;
 	justify-content: center;
   
 }
 .container{
 	display: flex;
     flex-direction: column;
 	align-items: center;
     justify-content: center;

 }
 .box{
 	width: 50px;
 	height: 100vh;
 	border-radius: 50%;
 	background-color: black;
    color: red;
    border: 5px solid black;
    
 }

 .shadow{
 	height: 50px;
 	width: 140px;
 	background-color: whitesmoke;
 	font-size: 40px;
 }
       @keyframes bounce{
 	0%{
 		transform: translateY(0%);
        
        width: 10%;
 	}
 	
 	
 	50%{
 		transform: translateY(-100%);
        background-color: red;
        width: 10%;
 	}
 	 100%{
 		transform: translateY(0%);
        
        
 	}
 	
 }
 .box{
 	animation: bounce 1s infinite;
 }
  @keyframes shadow{
 	0%{
 		transform: scalex(1);

 	}
 	
 	
 	50%{
 		transform: scalex(0);
        background-color: red;
 	}

 	
 }
 .shadow{
 	animation: shadow 2s infinite;
 }






















    </STYle>
</body>
</html>