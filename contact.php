<!DOCTYPE html>

<head>
<title>contact form</title>

<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width,initial-scale=1">

<!---------------css------------------------->
<link rel="stylesheet" href="style.css" type="text/css">
<!-----------bootstrap-------------------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!----------fontawesome---------------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<div class="container">
        
<div class="form-container log-in-container">
			<form action="insert.php" method="GET">
				<h1>HAVE SOME QUESTIONS?</h1>
        <ul class="info">
          <li><a href="#"><i class="fas fa-globe-africa"></i>&nbsp;&nbsp; MOLDOVA </a></li>
          <li><a href="#">UK </a><span>:31 August 1989 78, Chisinau, MD-2012</span> </li>

        </ul>
       	
       
       <div class="details">
         <div class="left">
           <img src="letter.png" alt="letter">
      
         </div>
         <div class="right">
           <div class="form-group">
            <input type="text" class="form-control" placeholder="First name" name="first"  required/>
           </div>
          <div class="form-group">
            <input type="text" class="form-control"placeholder="Last name" name="last" required/>
          </div>
          <div class="form-group">
            <input type="email"class="form-control" placeholder="What's your email?"  name="email" required/>
          </div>
         
          <div class="form-group" >
            <textarea class="form-control" placeholder="Your question...." name="msg" required></textarea>
          </div>
          <div class="form-group">
            <button  type="submit" style="border-radius: 30px;" name="submit">SEND MESSAGE</button>
          </div>
         

         </div>
       </div>
      </div>
</form>
</div>
</body>
</html>
