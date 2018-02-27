<!DOCTYPE html>

<?php
  $current_page_id = "inquiries";
  $design_types = ["calligraphy"=>"Calligraphy", "web_designs"=>"Web Design",
                        "graphic_design"=>"Graphic Design", "photography"=>"Photography"];
  $referrals = ["friend"=>"Friend", "newspaper"=>"Newspaper",
                        "internet"=>"Internet", "other"=>"Other"];

  //sanitize user input
  if (isset($_POST["submit"])) {
    $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $phone_number1 = filter_input(INPUT_POST, "phone_number1", FILTER_SANITIZE_STRING);
    $phone_number2 = filter_input(INPUT_POST, "phone_number2", FILTER_SANITIZE_STRING);
    $phone_number3 = filter_input(INPUT_POST, "phone_number3", FILTER_SANITIZE_STRING);
    $design_type = filter_input(INPUT_POST, "design_type", FILTER_SANITIZE_STRING);
    $specifications = filter_input(INPUT_POST, "specifications", FILTER_SANITIZE_STRING);
    $deadline = filter_input(INPUT_POST, "deadline", FILTER_SANITIZE_SPECIAL_CHARS);
    $referral = filter_input(INPUT_POST, "referral", FILTER_SANITIZE_STRING);
  }
?>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Inquiries</title>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <div class="main">
    <div class="half-page">
          <?php
            //change picture on summary page to preview the type of design they ordered
            //takes user input
            if($design_type == "website_design"){
              echo "<img class='image-sizedown left-half-page' src='images/inquiry/singatcornell.jpg'/>";
            } elseif($design_type == "graphic_design"){
              echo "<img class='image-sizedown left-half-page' src='images/inquiry/gulfcoastshirt.jpg'/>";
            } elseif($design_type == "photography"){
              echo "<img class='image-sizedown left-half-page' src='images/inquiry/eye.jpg'/>";
            } else { // calligraphy
              echo "<img class='image-sizedown left-half-page' src='images/inquiry/calligraphy.jpg'/>";
            }
          ?>
    </div><div class="half-page">
      <article class="right-half-page">
        <h1 id="article-title">Request Summary</h1>

        <h2>Order for <?php echo(filter_var($first_name, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . " " .
                                filter_var($last_name, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></h2>

        <p>
          <?php
          echo("<h4>Email Address: </h4>" . filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
          echo("<h4>Phone Number: </h4>" . filter_var($phone_number1, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . ")" .
                                filter_var($phone_number2, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . "-" .
                                filter_var($phone_number3, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . "</h4>");
          echo("<h4>Design Type: </h4><li class='app_note'>To the right is an example from my portfolio of the design type you selected.</li>"
                                . $design_types[$design_type]);
          echo("<h4>Specifications: </h4>" . filter_var($specifications, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . "</h4>");
          echo("<h4>Deadline: </h4>" . filter_var($deadline, FILTER_SANITIZE_FULL_SPECIAL_CHARS) . "</h4>");
          echo("<h4>Referral: </h4>" . $referrals[$referral]);
          echo("<h5>We'll be in touch soon!</h5>");
          ?>
        </p>
      </article>
    </div>
  </div>

  <!--<div class="clear"></div>-->

  <?php include("includes/footer.php"); ?>
</body>
</html>
