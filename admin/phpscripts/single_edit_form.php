<?php
	function single_edit($tbl,$col,$id) {

		$result = getSingle($tbl,$col,$id);
		$getResult = mysqli_fetch_array($result);

		echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
		echo "<input type=\"hidden\" name=\"tbl\" value=\"{$tbl}\">"; // check the source view on the site
		echo "<input type=\"hidden\" name=\"col\" value=\"{$col}\">";
		echo "<label>ID</label>";
		echo "<input type=\"text\" name=\"id\" value=\"{$id}\">";
		
		
		for($i=0; $i<mysqli_num_fields($result); $i++) {
			$dataType = mysqli_fetch_field_direct($result,$i);
			//echo $dataType;
			$fieldName = $dataType->name;
			//echo $fieldName;
			$fieldType = $dataType->type;
			//echo $fieldType."<br>";
			if($fieldName != $col) {
				if($fieldName=='gallery_thumb'){
					echo "<label>THUMBNAIL:</label>";
				}else if($fieldName=='gallery_img'){
					echo "<label>FRONT IMAGE:</label>";
				}else if($fieldName=='gallery_title'){
					echo "<label>TITLE:</label>";
				}else if($fieldName=='gallery_desc'){
					echo "<label>DESCRIPTION:</label>";
				}else if($fieldName=='gallery_photographer'){
					echo "<label>PHOTO BY:</label>";
				}else if($fieldName=='gallery_date'){
					echo "<label>DATE:</label>";
				}else{
					echo "can't find it.";
				}

				if($fieldName=='gallery_img' ) {
					echo "<input type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\">";
					echo "<input type=\"file\" name=\"gallery_img\" value=\"<?php if(!empty('gallery_img')){echo \"gallery_img\";} ?>\">";
				}
				else if($fieldType != 252) {
					echo "<input type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\">";
				}else{
					echo "<textarea name=\"{$fieldName}\">{$getResult[$i]}</textarea>";
				}
			}
		}
		//echo mysqli_num_fields($result);
		//echo "<input type=\"submit\" value=\"Edit\"></form><br>";
		echo "<button type=\"submit\" data-submit=\"...Sending\">Edit</button><a href=\"phpscripts/caller.php?caller_id=delete&id={$getResult['gallery_id']}\">Delete</a></form><br>";
	}

/*numerics 
-------------
BIT: 16
TINYINT: 1
BOOL: 1
SMALLINT: 2
MEDIUMINT: 9
INTEGER: 3
BIGINT: 8
SERIAL: 8
FLOAT: 4
DOUBLE: 5
DECIMAL: 246
NUMERIC: 246
FIXED: 246

dates
------------
DATE: 10
DATETIME: 12
TIMESTAMP: 7
TIME: 11
YEAR: 13

strings & binary
------------
CHAR: 254
VARCHAR: 253
ENUM: 254
SET: 254
BINARY: 254
VARBINARY: 253
TINYBLOB: 252
BLOB: 252
MEDIUMBLOB: 252
TINYTEXT: 252
TEXT: 252
MEDIUMTEXT: 252
LONGTEXT: 252*/
?>


