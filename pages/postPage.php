<?php
    //init
    session_start();
    include  "../php/functions.php";
    $postID = $_GET['postID'];
    if(!isset($_GET['postID'])) {
        die("please give post ID");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post ID-> <?php echo $postID; ?>  </title>
    <!-- all required includes -->
    <?php include '../template/includes-non-index.html' ?>

    <style>
    body {
    }
  </style>
</head>

<body>
    <!-- navbar -->
    <?php include '../template/navbar-non-index.php' ?>
    <br>

     <!-- Querry the database for all posts listed in those tags-->
    <div class="w3-content" style="max-width:2000px; margin-top:46px">
        <br>
        <br>
        <?php
          function listPosts($id, $level) {

            if($id == "null") {
                $result = getSpecificPost($_GET['postID']);
            } else {
                $result = listChildrenPosts($id);
            }
            foreach ($result as $value) {
              if($id == "null") {
                printPostResponsive($value);
              } else {
                printPostResponsive2($value, $level);
              }
              listPosts($value["post_id"], $level+1);
            }
          }

          listPosts("null", 0);
        ?>
    </div>

    <!-- Login -->
    <?php include '../template/login-non-index.html' ?>
    <!-- Register -->
    <?php include '../template/register-non-index.html' ?>

    <!-- add script -->
    <script src="../js/register-modal.js"> </script>

    <!-- Footer -->
    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
</body>

<script>
    //registering handlers
    registerBody();
    colorBlack();
</script>
</html>
