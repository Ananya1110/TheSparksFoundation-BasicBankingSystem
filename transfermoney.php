<html>
<head>
<title>Transaction Page</title>
<link rel="stylesheet" type="text/css" href="css/userstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #5E11A3;
}
.main_div
{
    width:100%;
    height:100vh;
 
}
   input
  {
      margin-top:10px;
      width:230px;
      height:40px;
      border-radius:5px;
      outline:none;
  }
 ::placeholder
 {
     padding:10px;
     color:orange;
 }
button
{
    color:#7A3DAF;
    background:white;
    border-color:#7A3DAF;
   padding: 14px 20px;
  cursor: pointer;
  width: 100%;
    
}
button:hover
 {
     color:white;
     background:#4CAF50;
     border:none;
     opacity:0.8;
 }
footer {
	position: static;
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
<div class="main_div">
 
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

     <div class="container">
        <div class="row">

          <div class="col-sm-4">
              <div class="card text-left" style="margin-top:76px;background-color:#397a87;border-radius:10px;color:white;width:110%" >
              <form method="POST">  
                                              
 <?php
include 'connection.php';
$ids=$_GET['idtransfer'];
$showquery="select * from `customers` where AccountNo=$ids"; 
$showdata=mysqli_query($con,$showquery);
if (!$showdata) {
  printf("Error: %s\n", mysqli_error($con));
  exit();
}
$arrdata=mysqli_fetch_array($showdata);

?> 
                     
                    <div class="card-body">
                     
                    <h3>Transfer Details</h3>
                  


                        <label>Name:</label>
                        <input type="text"  name="name1" value="<?php echo $arrdata['Name']; ?>" required placeholder="Enter your name"/><br><br>
                        <label>Account No:</label>
                        <input type="text" name="AccountNo1" value="<?php echo $arrdata['AccountNo']; ?>" required placeholder="Enter Account Number"/><br><br>
                        <label>Amount:</label>
                        <input type="text" name="amount1" value="" style="width:210px;" required placeholder="Enter amount"/><br><br>
                    </div>

               </div>
          </div>
           
          <div class="col-sm-4">
              <div class="card text-center" style="margin-top:60px;margin-left:10px;margin-right:20px;height:380px;width:110%">
                   <div class="card-body">
                   <img src="images/bbs6.jpg" style="width:250px;height:220px;margin-top:40px;">
                   <button  name="submit">Make Transaction</button>
                  </div>
             </div>
          </div>

          <div class="col-sm-4">
                <div class="card text-left" style="margin-top:76px;background-color:#397a87;border-radius:10px;color:white;width:110%">
                   
                   <div class="card-body">
                   <h3>Transfer Details</h3>
                  
                        <label>Name:</label>
                        <input type="text"  name="name2" value="" required placeholder="Enter your name"/><br><br>
                        <label>Account No:</label>
                        <input type="text" name="AccountNo2" value="" required placeholder="Enter Account Number"/><br><br>
                   </div>

               </div>
          </div>

       </div>
       
    </div>
</div>
</form> 
<?php


if(isset($_POST['submit']))
{
    
  
    $Sender_name=$_POST['name1'];
    $Sender_account=$_POST['AccountNo1'];
    $Sender=$_POST['amount1'];
    $Receiver_name=$_POST['name2'];
    $Receiver_account=$_POST['AccountNo2'];
     
  

    $ids=$_GET['idtransfer'];
    $senderquery="select * from `customers` where AccountNo=$ids ";
    $senderdata=mysqli_query($con,$senderquery);
  
    if (!$senderdata) {
     printf("Error: %s\n", mysqli_error($con));
    exit();
    }
    $arrdata=mysqli_fetch_array($senderdata);

    //receiverquery
    $receiverquery="select * from `customers` where AccountNo='$Receiver_account' ";
    $receiver_data=mysqli_query($con,$receiverquery);
   
    if (!$receiver_data) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
    }
    $receiver_arr=mysqli_fetch_array($receiver_data);
    $id_receiver=$receiver_arr['AccountNo'];


    if($arrdata['AccountBal'] >= $Sender)
    {
      $decrease_sender=$arrdata['AccountBal'] - $Sender;
      $increase_receiver=$receiver_arr['AccountBal'] + $Sender;
       $query="UPDATE `customers` SET `AccountNo`=$ids,`AccountBal`= $decrease_sender  where `AccountNo`=$ids ";
       $rec_query="UPDATE `customers` SET `AccountNo`=$id_receiver,`AccountBal`= $increase_receiver where  `AccountNo`=$id_receiver";
       $res= mysqli_query($con,$query);
       $rec_res= mysqli_query($con,$rec_query);
      // $res_receiver=mysqli_query($con,$query_receiver);
       if($res && $rec_res)
      {
       ?>
       <script>
       swal("Done!", "Transaction Successful!", "success");
        </script> 
    
      <?php
   
      }
      else
      {
      ?>
           <script>
       swal("Error!", "Error Occured!", "error");
        </script> 

      <?php
      
      }
    }
  

  else
 {
  ?>
    <script>
       swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
        </script> 
  <?php
   
 }
 
}
?>


<footer>
  <p>This project is made by ANANYA UPADHYAY for THE SPARKS FOUNDATION'S GRIP March-2021<br>
	  <a href="https://www.linkedin.com/in/ananya-upadhyay-1110/" target="_blank"><img src="images/linkedin.png" style="width:40px;height:40px;margin-top:10px;padding:5px;"></a>
	  <a href="mailto:hege@example.com" target="_blank"><img src="images/github.png" style="width:40px;height:40px;margin-top:10px;padding:5px;"></a>
</footer>


</body>
</html>