
<?php

ini_set('display_errors', 1); // Let me learn from my mistakes!
error_reporting(E_ALL); // Show all possible problems!

// <!-- test data returned - displays the content of the variables an array -->
// print_r($_POST);

// <!-- Store data in variables -->
$myName = $_POST['myName'];
$myEmail = $_POST['myEmail'];
$phone = $_POST['phone'];
$myReferral = $_POST['myReferral'];
$myComments = $_POST['myComments'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Admin - contact page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <script src="myScript.js"></script>
</head>
<body>
<nav>
      <div class="topnav" id="myTopnav">
        <a href="#myTopnav">

            <img
              src="images/virtualadminlogo.jpg"
              width="100" height="35"
              alt="virtual business logo"

            />
 
        </a>
        <a href="index.html" class="active">About Us</a>
        <a href="services.html">Services</a>
        <a href="pricing.html">Pricing</a>
        <a href="faqs.html">FAQs</a>
        <a href="contact.html">Contact</a>
        <div class="search-container">
          <!-- <form action="www.google.com">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
          </form> -->


          <!-- <form method="get" action="http://www.google.com/search">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
            </form> -->
<!-- 
            <label for="siteSearch" class="sr-only">Search</label>
            <input type="text" placeholder="Search.." name="search" id="siteSearch">
            <input type="submit" value="Search"> -->




          <a href="#myTopnav" class="icon" aria-label="bars_link" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>
    </nav>

    <div class="div1"></div>

        <div class="contactinfo">
          <main>
        
           <header>
              <h1>Thank You for Signing Up!</h1>
            </header>

              <section>
                    <!-- Print the results in the browser after submission -->
                      <h2>You have entered the following information:</h2>

                      <p>Name: <?php echo $myName ?></p>

                      <p>Email: <?php echo $myEmail ?></p>

                      <p>Phone: <?php echo $phone ?></p>

                      <p>Referral: <?php echo $myReferral ?></p>

                      <p>Comments: <?php echo $myComments ?></p>

                      <p>We will contact you soon!</p>
                </section>
          </main>
        </div>
          <div class="socialmedia">
                  </div>


    <div class="footer">
  <p>Copyright &copy; 2022 Virtual Admin <br>Michael Roman </p>
    </div>
    
</body>
</html>