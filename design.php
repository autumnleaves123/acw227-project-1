<!DOCTYPE html>

<?php
  $current_page_id = "design";
  $different_designs = ["Calligraphy"=>"The intersection of art and words, where text can evoke emotion
                        through embossing, brush tip pens, and vibrant colors.",
                        "Web Designs"=>("Check out a couple websites I made:
                        <a class='link-tag' href='http:/" . "/concretecanoe.engineering.cornell.edu/'/>Cornell Concrete Canoe</a> and
                        <a class='link-tag' href='https:/" . "/www.singatcornell.com/'/>Sing at Cornell</a>."),
                        "Graphic Design"=>"I frequently design posters, publicity material, and logos for a variety
                        of projects, but especially through my choir, the Cornell University Chorus.
                        I typically use Adobe Lightroom, InDesign, Photoshop, and Illustrator."];
?>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Design</title>
</head>

<body>
  <?php include("includes/header.php");

  $toggle=false;
  $number=1; //counting variable for list

  //outputs different design styles with alternating colors
  foreach($different_designs as $section=>$text){
    echo "<div class='normal-style";
    if ($toggle) {
      echo "'><h1>" . $number . ". " . $section . "</h1>";
      echo "<p>" . $text . "</p>";
    } else {
      echo " different'><h1>" . $number . ". " . $section . "</h1>";
      echo "<p>" . $text . "</p>";
    }
    echo "</div>";
    ++$number;
    $toggle = !$toggle;
  }

  include("includes/footer.php"); ?>
</body>
</html>
