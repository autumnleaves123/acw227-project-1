<header>


  <nav>
    <ul id="nav">
  <?php

    $pages = ["mystory"=>"My Story", "photography"=>"Photography", "index"=>"Home",
      "design"=>"Design", "inquiries"=>"Inquiries"];

    foreach ($pages as $page=>$page_name){

    //create li tag that contains a hyperlink to the file named
    //condition: if current page is same as key, then add id attribute

    if ($page == "index") {
      echo "<li id='header_logo'><a href='" . $page . "'><img src='images/aw_logo.png' /></a>";
    } elseif ($current_page_id == $page) {
      echo "<li><a href='" . $page . ".php' id='current_page'" . ">" . $page_name . "</a></li>";
    } else {
      echo "<li><a href='" . $page . ".php'>" . $page_name . "</a></li>";
    }

  }
  ?>
    </ul>
  </nav>
</header>
