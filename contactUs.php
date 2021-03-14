<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
  }
  .formAlign{
	  padding-top: 30px;
	  padding-bottom: 30px;
	  margin: auto;
	  align-content: center;
  }
  footer {
		position: fixed;
		text-align: center;
		width: 100%;
		bottom: 0;
		padding: 3px 3px 0 3px;
		background-color: #343a40;
		color: white;
  }
  
  </style>
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">		
	  <img src="images/logo1.jpg" alt="Logo" width="64" height="48">
		<a class="navbar-brand" href="index.php">Online Bank</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="viewcustomers.php">View Customers</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="contactUs.php">Contact Us</a>
			</li>
		</div>
	  </div>
	</nav>
	
<div class="formAlign">
	<div class="container style=m-auto">
	  <h2>Write to us:</h2>
	  <form action="contact.php">
		<div class="form-group">
		  <label>Name:</label>
		  <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
		</div>
		<div class="form-group">
		  <label>Email:</label>
		  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		</div>
		<div class="form-group">
		  <label>Mobile No:</label>
		  <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
		</div>
		<div class="form-group">
		  <label>Comment:</label>
		  <textarea type="text" class="form-control" id="cmnt" name="comment">Your Comment</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	  </form>
	</div>
</div>

<footer>
  <p>This project is made by ANANYA UPADHYAY for THE SPARKS FOUNDATION'S GRIP March-2021<br>
	  <a href="https://www.linkedin.com/in/ananya-upadhyay-1110/" target="_blank"><img src="images/linkedin.png" style="width:40px;height:40px;margin-top:10px;padding:5px;"></a>
	  <a href="mailto:hege@example.com" target="_blank"><img src="images/github.png" style="width:40px;height:40px;margin-top:10px;padding:5px;"></a>
</footer>


</body>
</html>
