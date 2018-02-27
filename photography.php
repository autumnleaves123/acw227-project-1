<!DOCTYPE html>

<?php
  $current_page_id = "photography";
  $ceiling_fans = array("IMG_0088.jpg", "IMG_8687.jpg", "IMG_0376.jpg", "IMG_0455.jpg",
                      "IMG_1021.jpg", "IMG_7724.jpg", "IMG_8029.jpg", "IMG_8422.jpg",
                      "IMG_8639.jpg", "IMG_9001.jpg");

  //user-defined function that takes in an array of square images and
  //formats them together in a grid
  function gallery($images){
    foreach($images as $image){
      print_image($image);
    }
  }
  //helper function that echos the html tag for the image
  function print_image($image){
    echo "<img class='grid-image' src='images/photography/" . $image . "' />";
  }
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

    <title>Photography</title>
  </head>

  <body>
    <?php include("includes/header.php");
    gallery($ceiling_fans);
    include("includes/footer.php"); ?>
  </body>
</html>
