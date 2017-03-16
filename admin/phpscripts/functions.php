<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function addPhoto($img, $thumb, $title, $desc, $photographer, $date) {
		include("connect.php");
		//echo "from addMovie()";
		$img = mysqli_real_escape_string($link, $img);

		if($_FILES['gallery_img']['type'] == "image/jpg" || $_FILES['gallery_img']['type'] == "image/jpeg") {
			//echo "This is a jpg or jpeg";
			$targetpath = "../images/gallerypics/{$img}";
			if(move_uploaded_file($_FILES['gallery_img']['tmp_name'], $targetpath)) {
				//echo "file moved.";
				$orig = "../images/gallerypics/{$img}";
				$th_copy = "../images/thumbnails/{$thumb}";
				if(!copy($orig, $th_copy)) {
					echo "Failed to copy.";
				}

				//$size = getimagesize($orig);
				//echo $size[0]." x ".$size[1];

				$qstring = "INSERT INTO tbl_gallery VALUES(NULL,'{$thumb}','{$img}','{$title}','{$desc}','{$photographer}','{$date}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);

				if($result == 1) {
					$qstring2 = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);

					$row = mysqli_fetch_array($result2);
					$lastID = $row['gallery_id'];

					/*$qstring3 = "INSERT INTO tbl_l_mc VALUES(NULL, '{$lastID}','{$cat}')";
					$result3 = mysqli_query($link,$qstring3);*/
					redirect_to("admin_index.php");
				}
			}
		}else{
			echo "No f'n gif's";
		}
		mysqli_close($link);
	}

	function changePhoto($img, $thumb, $title, $desc, $photographer, $date) {
		include("connect.php");
		//echo "from addMovie()";
		$img = mysqli_real_escape_string($link, $img);

		if($_FILES['gallery_img']['type'] == "image/jpg" || $_FILES['gallery_img']['type'] == "image/jpeg") {
			//echo "This is a jpg or jpeg";
			$targetpath = "../images/gallerypics/{$img}";
			if(move_uploaded_file($_FILES['gallery_img']['tmp_name'], $targetpath)) {
				//echo "file moved.";
				$orig = "../images/gallerypics/{$img}";
				$th_copy = "../images/thumbnails/{$thumb}";
				if(!copy($orig, $th_copy)) {
					echo "Failed to copy.";
				}

				//$size = getimagesize($orig);
				//echo $size[0]." x ".$size[1];

				$qstring = "INSERT INTO tbl_gallery VALUES(NULL,'{$thumb}','{$img}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);

				if($result == 1) {
					$qstring2 = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);

					$row = mysqli_fetch_array($result2);
					$lastID = $row['gallery_id'];

					/*$qstring3 = "INSERT INTO tbl_l_mc VALUES(NULL, '{$lastID}','{$cat}')";
					$result3 = mysqli_query($link,$qstring3);*/
					redirect_to("admin_index.php");
				}
			}
		}else{
			echo "No f'n gif's";
		}
		mysqli_close($link);
	}

	function sendUserInfo($fname, $lname, $username, $password, $email, $direct) {
		$to = "{$email}, joy3634@gmail.com";
		$subj = "Message from dongwookshin.ca";
		$extra = "Reply to: joy3634@gmail.com";
		$body = "Thank you for signing up!!\n\nYOUR INFORMATION:\n\nFirst Name: {$fname}\nLast Name: {$lname}\nUser Name: {$username}\nPassword: {$password}\nEmail: {$email}\n\n\nwww.dongwookshin.ca/research/admin_login.php";
		$direct = "admin_thankyou.php";
		
		mail($to, $subj, $body, $extra);
		redirect_to($direct);
	}

	function sendMessage($name, $email, $phone, $subject, $message, $direct) {
		$to = "joy3634@gmail.com";//chantryisland@bmts.com
		$subj = "{$subject} - Message from chantryisland.com";
		$extra = "Reply to: {$email}";
		$body = "Message from {$name}\n\nName: {$name}\nEmail: {$email}\nPhone Number: {$phone}\nMessage: {$message}\n\n";
		$direct = "thankyou.php";
		
		mail($to, $subj, $body, $extra);
		redirect_to($direct);
	}
?>