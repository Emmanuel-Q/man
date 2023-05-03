<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body>
		<!-- Sidebar -->
		<div id="pgside">
			<a href="home.php" class="current"><h2>Dashboard</h2></a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    	</div>
		
		<!-- Main Content Area -->
		<div class="content">
			<h2 style="color: white;">Home Page</h2>
			<p>Welcome back, <?=$_SESSION['user_name']?>!</p>
               <div>
               <?php
				
				include('db_conn.php');
				$result = $conn->prepare("SELECT * FROM pages WHERE id=1");
				
				// $result->execute();
				// for($i=0; $row = $result->fetch(); $i++){ ?>

                    <?php include 'content/connect.php' ?>

				
				<!-- Form Begins here -->
				<form action="update.php" method="post" enctype="multipart/form-data" class="form">
					<input type="hidden" name="id" value="<?php echo $id; ?>" />
					<h3 style="text-align: center; font-size: 20px;">Edit Page</h3>
					<span>Page Title:</span>
					<input type="text" name="page_title" id="page_title" value="<?php echo $pageData['page_title']; ?>"><br><br>
                         <span>Navbar Brand:</span>
					<input type="text" name="navbar_brand" id="navbar_brand" value="<?php echo $pageData['navbar_brand']; ?>"><br><br>
                         <span>Nav Item:</span>
					<input type="text" name="nav_item" id="nav_item" value="<?php echo $pageData['nav_item']; ?>"><br><br>
                         <span>Header:</span>
					<input type="text" name="header_h1" id="header_h1" value="<?php echo $pageData['header_h1']; ?>"><br><br>
                         <label for="">Header Paragraph:</label><br><br>
					<textarea name="header_paragraph" id="header_paragraph" cols="111" rows="5"><?php echo $pageData['header_paragraph']; ?></textarea><br><br>
                         <span>Get Started:</span>
					<input type="text" name="header_gs" id="header_gs" value="<?php echo $pageData['header_gs']; ?>"><br><br>
                         <span>Learn More:</span>
					<input type="text" name="header_lm" id="header_lm" value="<?php echo $pageData['header_lm']; ?>"><br><br>
                         <span>Feature 1:</span>
					<input type="text" name="feature1_h2" id="feature1_h2" value="<?php echo $pageData['feature1_h2']; ?>"><br><br>
                         <label for="">Feature 1 Paragraph:</label><br><br>
					<textarea name="feature1_paragraph" id="feature1_paragraph" cols="111" rows="5"><?php echo $pageData['feature1_paragraph']; ?></textarea><br><br>
                         <span>Feature 1 CTA:</span>
					<input type="text" name="feature1_CTA" id="feature1_CTA" value="<?php echo $pageData['feature1_CTA']; ?>"><br><br>
                         <span>Feature 2:</span>
					<input type="text" name="feature2_h2" id="feature2_h2" value="<?php echo $pageData['feature2_h2']; ?>"><br><br>
                         <label for="">Feature 2 Paragraph:</label><br><br>
					<textarea name="feature2_paragraph" id="feature2_paragraph" cols="111" rows="5"><?php echo $pageData['feature2_paragraph']; ?></textarea><br><br>
                         <span>Feature 2 CTA:</span>
					<input type="text" name="feature2_CTA" id="feature2_CTA" value="<?php echo $pageData['feature2_CTA']; ?>"><br><br>
                         <span>Feature 3:</span>
					<input type="text" name="feature3_h2" id="feature3_h2" value="<?php echo $pageData['feature3_h2']; ?>"><br><br>
                         <label for="">Feature 3 Paragraph:</label><br><br>
					<textarea name="feature3_paragraph" id="feature3_paragraph" cols="111" rows="5"><?php echo $pageData['feature3_paragraph']; ?></textarea><br><br>
                         <span>Feature 3 CTA:</span>
					<input type="text" name="feature3_CTA" id="feature3_CTA" value="<?php echo $pageData['feature3_CTA']; ?>"><br><br>
                         <span>Testimonial:</span>
					<input type="text" name="testimonial_h2" id="testimonial_h2" value="<?php echo $pageData['testimonial_h2']; ?>"><br><br>
                         <label for="">Testimonial Paragraph:</label><br><br>
					<textarea name="testimonial_paragraph" id="testimonial_paragraph" cols="111" rows="5"><?php echo $pageData['testimonial_paragraph']; ?></textarea><br><br>
                         <label for="">Testimonial 1 Paragraph:</label><br><br>
					<textarea name="testimonial1_paragraph" id="testimonial1_paragraph" cols="111" rows="5"><?php echo $pageData['testimonial1_paragraph']; ?></textarea><br><br>
                         <span>Testimonial 1 Name:</span>
					<input type="text" name="testimonial1_name" id="testimonial1_name" value="<?php echo $pageData['testimonial1_name']; ?>"><br><br>
                         <label for="">Testimonial 2 Paragraph:</label><br><br>
					<textarea name="testimonial2_paragraph" id="testimonial2_paragraph" cols="111" rows="5"><?php echo $pageData['testimonial2_paragraph']; ?></textarea><br><br>
                         <span>Testimonial 2 Name:</span>
					<input type="text" name="testimonial2_name" id="testimonial2_name" value="<?php echo $pageData['testimonial2_name']; ?>"><br><br>
                         <span>Contact Us:</span>
					<input type="text" name="contact_h2" id="contact_h2" value="<?php echo $pageData['contact_h2']; ?>"><br><br>
                         <label for="">Contact Paragraph:</label><br><br>
					<textarea name="contact_paragraph" id="contact_paragraph" cols="111" rows="5"><?php echo $pageData['contact_paragraph']; ?></textarea><br><br>
                         <span>Contact Name:</span>
					<input type="text" name="contact_name" id="contact_name" value="<?php echo $pageData['contact_name']; ?>"><br><br>
                         <span>Contact Email:</span>
					<input type="text" name="contact_email" id="contact_email" value="<?php echo $pageData['contact_email']; ?>"><br><br>
                         <span>Contact Phone:</span>
					<input type="text" name="contact_phone" id="contact_phone" value="<?php echo $pageData['contact_phone']; ?>"><br><br>
                         <span>Contact Message:</span>
					<input type="text" name="contact_message" id="contact_message" value="<?php echo $pageData['contact_message']; ?>"><br><br>
                         <span>Contact Button:</span>
					<input type="text" name="contact_btn" id="contact_btn" value="<?php echo $pageData['contact_btn']; ?>"><br><br>
                         <span>Footer Text:</span>
					<input type="text" name="footer_paragraph" id="footer_paragraph" value="<?php echo $pageData['footer_paragraph']; ?>"><br><br>
                                                 <!-- Update Button -->
					<button type="submit" class="btn btn-success" value="update">Update</button>
				</form>

				<?php //} ?>
               </div>
		</div>
          
	</body>
</html>






<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>