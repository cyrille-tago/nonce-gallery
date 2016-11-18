<?php

//-------------------------------------------------------------//
// In this part of the code, we define the path and the root. Need may arise to change the path and to comment some of the lines depending on from where we specify the path. 

// We specify where our images are located: 

//$root = '';

// Comment out the following statement if the path is not specified from the root.
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = './images/';

//We now move to the main code 
//---------------------------------------------------------------//
 


//Randomly get the images into from the array

function getRandomFromArray($im_array) {
    $random_index = array_rand($im_array);
    return $im_array[$random_index];
}


//Get the images in a list with this funcion

function getAnArrayImages($path) {
    $images = array();
    if ( $image_dir = @opendir($path) ) {
        while ( false !== ($image_file = readdir($image_dir))) {
            // We check the formats: png, gif, jpg 
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $image_file) ) {
                $images[] = $image_file;
            }
        }
        closedir($image_dir);
    }
    return $images;
}


// Generate a list of images from the directory 
$listOfImages = getAnArrayImages($root . $path);

$img = getRandomFromArray($listOfImages);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Nonce Gallery</title>
<style type="text/css">
body { font: 14px/1.3 verdana, arial, helvetica, sans-serif; }
h1 { font-size:1.3em; }
h2 { font-size:1.2em; }
a:link { color:#33c; } 
a:visited { color:#339; }
p { max-width: 60em; }

/* so linked image won't have border */
a img { border:none; }
</style>
</head>
<body>

<h1>Displays Random Art Images</h1>

<p><p>Load the page several times and get completely different experience of the world of ART. This will be more random when we have a larger number og images in the directory. </p></p>

<!-- random images are inserted here -->
<!-- <div><img src="/var/www/html/images/art.jpg" alt="" /></div> -->
<div><img src="<?php echo $path . $img ?>" alt="" /></div>



<p>&nbsp;</p>

<p>Enyoy!!  <a href="http://www.uni.lu/">University of Luxembourg</a>!</p>

</body>
</html>
