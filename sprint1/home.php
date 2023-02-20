<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Gerdener's Heaven! </title>

      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
	<section id="header">
		<div class="row">  
			<div class="title" style="font-size: 30px;color:#91AC08;"> Welcome to Gerdener's Heaven! </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="Explore.php" style="margin-center: 20px"> Order Now! </a>  
				<a href="homepage.php" style="margin-center: 20px; padding: 8px"> Log-Out </a>
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Explore </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center; line-height: 2; color: Black; font-size: 25">
			<div class="row" style="padding:6px;"> 
				<div class="col-md-3">  Plants </div>
				<div class="col-md-3">  Item Code </div>
				<div class="col-md-3">  Catagory </div>
				<div class="col-md-3">  Specification </div>
		
			</div>
	
	        <?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM items";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2]; ?> </div>
				<div class="col-md-3">  <?php echo $row[3]; ?> </div>

			</div>
			
			<?php 
				}					
			}
			?>
        </div>

	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

