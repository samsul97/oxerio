<?php

// Connect to the database
       require('mysqli.php');
        
// Query for a list of all existing files

$sql = "SELECT * FROM images WHERE name= '$pagetitle'";
$result = $conn->query($sql);

$directory = '';
while( $image = $result->fetch_assoc() )
    $directory .= ($directory != '' ? "," : '') . ('"/images/'.$image["photo"] . '"');



// Check if it was successfull
	if($directory != '') {
		
    // if there are images for this page, run the javascript
	?><script>


	//configure the paths of the images, plus corresponding target links			
	slideshowimages(<?php print $directory ?>)

	//configure the speed of the slideshow, in miliseconds
	var slideshowspeed=2000

	var whichlink=0
	var whichimage=0
	function slideit(){
	if (!document.images)
	return
	document.images.slide.src=slideimages[whichimage].src
	whichlink=whichimage
	if (whichimage<slideimages.length-1)
	whichimage++
	else
	whichimage=0
	setTimeout("slideit()",slideshowspeed)
	}
	slideit()


	</script>
	<?
   }  else {
        // If there are not any images for this page, leave the space blank
        echo "";
		} 
 
// Close the mysql connection
$conn->close();
?>		