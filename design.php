<!DOCTYPE html>

<?php
  $current_page_id = "design";
  $different_designs = ["Calligraphy"=>"design stuff", "Web Designs"=>"design stuff",
                        "Graphic Design"=>"familiar with photoshop blah"];
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
  $number=1;
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
