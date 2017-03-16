<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	require_once('phpscripts/init.php');
	//confirm_logged_in();
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Edit Gallery Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Edit Gallery Page</h1>
	<?php
		include("../includes/admin_header.html");
	?>
	<div class="container">
    	<div class="row mainHeader backImages" data-interchange="[../images/homeBg-S.jpg, small], [../images/homeBg-M, medium], [../images/homeBg-L.jpg, large]">
			<h2 class="hidden">SignIn Header</h2>
			<div class="small-12 columns adminBar">
				<a href="admin_login.php">Adminstrative SIGN-IN</a>
			</div>
        	<nav class="small-12 large-12 columns">
                <div class="small-12 columns">
                	<img src="../images/MHS_logo1.png" alt="logo" class="topLogo">
                </div>
                <div class="small-12 columns headBook">
					<h2>Edit Gallery</h2>
					</ul>
				</div>
            </nav>   
        </div>
        
        <div class="bodyCon">
			<div class="headSpace"> 
			</div>
			<div class="small-12 small-centered medium-10 medium-centered large-10 large-centered editDesc">
				<p>You can edit gallery and delete each row.
			</div>
			<div class="small-12 small-centered medium-10 medium-centered large-10 large-centered addPhoto">
				<ul id="addPhotoForm">
					<?php
						$tbl="tbl_gallery";
						$col="gallery_id";
						$users = getAll($tbl);
						if(isset($_POST['submit'])) {
								//echo "submit clicked...";
								$img = $_FILES['gallery_img']['name'];
								$thumb = "TH_{$img}";//$_FILES['gallery_thumb']['name'];// "TH_{$fimg}";
								$title = $_POST['gallery_title'];
								$desc = $_POST['gallery_desc'];
								$photographer = $_POST['gallery_photographer'];
								$date = $_POST['gallery_date'];
								$uploadPhoto = changePhoto($img, $thumb, $title, $desc, $photographer, $date);
								$message = $uploadPhoto;
							}	

						while($row = mysqli_fetch_array($users)) {
							$id = $row['gallery_id'];
							
							if($id%2) {
								echo "<li style=\"background-color: #d1d1d1\">";
								single_edit($tbl,$col,$id);
								echo "</li>";
							}else{
								echo "<li>";
								single_edit($tbl,$col,$id);
								echo "</li>";
							}
						}
					?>
				</ul>
			</div>
		</div>
		<?php
        	include("../includes/admin_footer.html");
        ?>
	</div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/navbar.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>