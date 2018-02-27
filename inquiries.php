<!DOCTYPE html>

<?php
  $current_page_id = "inquiries";
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
          <img class="image-sizedown left-half-page" src="images/writing_letter.jpg"/>
      </div><div class="half-page">
        <article class="right-half-page">
          <h1 id="article-title">Let's Chat!</h1>
          <p>We would absolutely love to hear about what you have in mind for your
            design project and answer any questions you have. Once you fill out this
            form, we’ll be in touch with you within 1-2 business days.</p>

              <form id="inquiry_form" method="post" action="submit.php">
                <fieldset>
                  <ul class="no-margin">

                    <!-- NAME -->
                    <li class="app_order">
                      <h2>Name:</h2>
                      <input class="app-box-name" type="text" name="first_name" placeholder="first name" required/> <input class="app-box-name" type="text" name="last_name" placeholder="last name" required/>
                    </li>

                    <!-- EMAIL ADDRESS -->
                    <li class="app_order">
                      <h2>Email Address:</h2>
                      <input class="app-box" type="text" name="email" placeholder="example@web.net" required/>
                    </li>

                    <!-- PHONE NUMBER -->
                    <li class="app_order">
                      <h2>Cell Phone Number:</h2>
                      <li class="app_note">Please put in the (xxx)xxx-xxxx format</li>
                      (<input class="telephone-box" type="text" name="phone_number1" placeholder="123"required/>)<input class="telephone-box" type="text" name="phone_number2" placeholder="456" required/>-<input class="telephone-box" type="text" name="phone_number2" placeholder="7890" required/>
                    </li>

                    <!-- DESIGN TYPE -->
                    <li class="app_order">
                      <h2>Design Type:</h2>

                      <ul class="radio-list">
                        <input type="radio" name="design_type" value="photography" checked>Photography<br>
                        <input type="radio" name="design_type" value="calligraphy">Calligraphy<br>
                        <input type="radio" name="design_type" value="graphic_design">Graphic Design<br>
                        <input type="radio" name="design_type" value="website_design">Website Design
                      </ul>
                    </li>

                    <!-- SPECIFICATIONS & COMMENTS -->
                    <li class="app_order">
                      <h2>Specifications & Comments:</h2>
                      <input class="app-box" type="text" name="specifications" required/>
                    </li>

                    <!-- DEADLINE -->
                    <li class="app_order">
                      <h2>Deadline:</h2>
                      <li class="app_note">Please put in the mm/dd/yyyy format when you would like this project to be completed by</li>
                      <input type="date" name="deadline" required/>
                    </li>

                    <!-- REFERRAL -->
                    <li class="app_order">
                      <h2>How did you hear about us?</h2>
                      <ul class="radio-list">
                        <input type="radio" name="referral" value="friend" checked>Friend<br>
                        <input type="radio" name="referral" value="newspaper">Newspaper<br>
                        <input type="radio" name="referral" value="internet">Internet<br>
                        <input type="radio" name="referral" value="other">Other
                      </ul>
                    </li>
                  </ul>

                  <!--submit application button-->
                  <input type="submit" name="submit" value="Submit Application"/>
                </fieldset>
              </form>

            </article>
          </div>
        </article>
      </div>
    </div>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
