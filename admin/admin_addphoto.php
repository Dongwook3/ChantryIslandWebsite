<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	$tbl = "tbl_gallery";
	$galleryQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
		//echo "submit clicked...";
		$img = $_FILES['gallery_img']['name'];
		$thumb = "TH_{$img}";//$_FILES['gallery_thumb']['name'];// "TH_{$fimg}";
		$title = $_POST['gallery_title'];
		$desc = $_POST['gallery_desc'];
		$photographer = $_POST['gallery_photographer'];
		$date = $_POST['gallery_date'];
		$uploadPhoto = addPhoto($img, $thumb, $title, $desc, $photographer, $date);
		$message = $uploadPhoto;
	}

?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
		<!-- in mobile set initial zoom level of page to 100%, set site size to equal to device width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chantry Island - Create User Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lobster%7COswald%7CQuestrial" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
		<link href="../css/foundation.css" rel="stylesheet">
	</head>

<body>
	<h1 class="hidden">Chantry Island - Create User Page</h1>
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
					<h2>Chantry Island Tour</h2>
					</ul>
				</div>
            </nav>   
        </div>
        
        <div class="bodyCon">
			<div class="headSpace"> 
			</div>
			<div class="small-10 small-centered medium-8 medium-centered large-8 large-centered addPhoto">
				<?php if(!empty($message)){echo $message;} ?>
				<form action="admin_addphoto.php" method="post" enctype="multipart/form-data" id="addPhotoForm">
					<h2>Add Photo</h2>
					<label>Front Image:</label>
					<input type="file" name="gallery_img" value="<?php if(!empty($img)){echo $img;} ?>" size="32">
					<label>Thumb Image:</label>
					<input type="file" name="gallery_thumb" value="<?php if(!empty($thumb)){echo $thumb;} ?>" size="32">
					<label>Photo Title:</label>
					<input type="text" name="gallery_title" value="<?php if(!empty($title)){echo $title;} ?>" size="32">
					<label>Photo Description:</label>
					<input type="text" name="gallery_desc" value="<?php if(!empty($desc)){echo $desc;} ?>" size="32">
					<label>Photo by:</label>
					<input type="text" name="gallery_photographer" value="<?php if(!empty($photographer)){echo $photographer;} ?>" size="32">
					<label>Date:</label>
					<input type="text" name="gallery_date" placeholder="e.g. Mar. 31, 2017" value="<?php if(!empty($date)){echo $date;} ?>" size="32">
					<button class="small-12 medium-4 columns" name="submit" type="submit" data-submit="...Sending">Add Photo</button>
					<button class="small-12 medium-4 columns" name="reset" type="reset">Reset</button>
					<a href="admin_index.php" class="small-12 medium-4 columns">Cancel</a>
					<!--<button class="small-12 medium-4 columns" name="reset" type="reset">Reset</button>-->
				</form>
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