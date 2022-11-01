<?php
    // start the session
    session_start();

    // check if the session is created or not
    if(isset($_SESSION["se_username"]) == false)
    {
      header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
<style>
  @font-face {
    font-family: orign;
    src: url(fonts/orign_tech.ttf);
  }
  @font-face {
    font-family: pencil;
    src: url(fonts/pencil.ttf);
  }
</style>
<body>

<form action="index.php" method="post">

<nav>
    <input type = "checkbox" id = "nav-button">
    </input>
    <h2 class="logo">CoderBoyz</h2>
    <label for = "nav-button">&#9776;</label>
    <ul>
      <li><a href = "#" class="active">Home</a></li>
      <li><a href = "#courses">Courses</a></li>
      <li><a href = "#aboutus" >About Us</a></li>
      <li><a href = "#contactus">Conatct Us</a></li>
      <li><a href="" name="btnsignout">
      <input type="submit" value="Sign Out" name="btnsignout">
      </a></li>
 
    </ul>
  </nav>
  </form>

<div class="body">
<center>
<h1 class="heading">Hey! <span><?php echo($_SESSION["se_username"])?></span>,</h1>
<h1>The best way to learn to code</h1>
<h2 class="heading">Courses designed by experts with real-world practice. Join our global community. <span> It's free.</span></h2>


<section class="desc">
<h1>The perfect platform to boost your technical skills</h1>
<div class="row">
  <div class="column">
        
      <img src="images/student.svg" alt="Student Studies" width="50%">
      <h2>Students</h2>
      <p>Prepping for the big test or want to ace your first interview? Use CoderBoyz real-world practice to reinforce what you've learned and get you ready for that big moment.</p>

</div>
<div class="column">
    <img src="images/Teacher.svg" alt="Teacher " width="50%">
    <h2>Professionals</h2>
    <p>You can learn something totally new to advance your career. Or maybe you just want to knock off the rust. Try CoderBoyz to get access to a variety of courses, from machine learning to web development.</p>

  </div>
</div>
</section>

</section>

<section class="courses" id="courses">
  <h1>Starter Courses</h1>
<div class="card">
      <img src="images/html.png" alt="HTML">
      <h2><sup>₹</sup>1199/-</h2>
      <p>Hyper Text Markup Language (online/offline)</p>
      <a href=""> <button>Start Now</button></a>
</div>

<div class="card">
      <img src="images/css.png" alt="CSS">
      <h2><sup>₹</sup>999/-</h2>
      <p>Casscading Style Sheet  (online/offline)</p>
     <a href="#"><button>Start Now</button></a>

</div>


    
<div class="card">
      <img src="images/js.png" alt="Java Script">
      <h2><sup>₹</sup>1499/-</h2>
      <p>Java Scaript  (online/offline)</p>
      <a href=""> <button>Start Now</button></a>
</div>

</section>

<section class="courses" id="courses">
  <h1>Diploma In Web Designing</h1>
<div class="card">
      <img src="images/mysql.png" alt="Mysql">
      <h2><sup>₹</sup>1199/-</h2>
      <p>MySQL (online/offline)</p>
      <a href=""> <button>Start Now</button></a>
</div>

<div class="card">
      <img src="images/PHP-logo.png" alt="php">
      <h2><sup>₹</sup>999/-</h2>
      <p>PHP (online/offline)</p>
     <a href="#"><button>Start Now</button></a>

</div>
  
<div class="card">
      <img src="images/miniprojects.jpg" alt="Mini Projects">
      <h2><sup>₹</sup>1499/-</h2>
      <p>Some Mini Projects  (online/offline)</p>
      <a href=""> <button>Start Now</button></a>
</div>

</section>



<section class="whycode">

<div class="desc">

<h1>WHY CODE?</h1>
<div class="row2">
  <div class="column2">
    <h2>It's Popular</h2>
    <img src="images/it's popular.svg" alt="It's Popular" width="70%">
  <p><span>Technical skills are in high demand </span>. Over 60% of new jobs worldwide will require tech skills.</p>
  </div>
  <div class="column2">
    <h2>It's Promising</h2>
    <img src="images/It's promising.svg" alt="It's promising" width="70%">
    <p>Unlock your earning potential! Entry-level programmers in the U.S. earn on <span> average over $78,000 in salary.</span></p>
  </div>
  <div class="column2">
    <h2>It’s Fun</h2>
    <img src="images/It’s fun.svg" alt="It’s fun.svg" width="70%">
    <p>Imagine combining your passion and skill with your creativity, and <span> making something new everyday!</span></p>
  </div>
</div>
</div>
</section>

<section id="aboutus">
<h1>About CoderBoyz Organisation</h1>
<div class="row">
  <img src="images/logo2.png" alt="CoderBoyz Logo" >
  <div class="column">
<p class="aboutustxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, optio recusandae, esse necessitatibus, sapiente quaerat iste asperiores ducimus excepturi tempore quas mollitia cum! Illo, itaque perspiciatis? Ipsam rem quas consequuntur culpa laborum numquam vero assumenda totam delectus quae sit voluptates, corrupti magnam necessitatibus molestias hic omnis nostrum iusto. Consequatur, tempora.</p>
  </div>
  <div class="column"><p class="aboutustxt">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis harum ea commodi explicabo ducimus asperiores unde reprehenderit perferendis, aperiam ipsam mollitia neque alias temporibus ratione vitae nemo sed quae laudantium fugit? Consectetur recusandae praesentium quae, in ex perspiciatis cumque laudantium beatae minus corporis non atque libero earum iste? Exercitationem, amet?
  </p>
  </div>
 
</div>

</section>
<div id="contactus">
<section class="contactus" id="contactus">
<h1>Contact Us</h1>
<hr>
<a href="">
<img src="images/instagram.png" alt="Instagram">
</a>
<a href="">
<img src="images/whatsapp.png" alt="What'sapp link" id="whatsapp">
</a>
<div class="form">
<form action="" method="post">
<span> Name</span><br><input type="text" name="name" id="name" placeholder="Enter Your Name Here:" required><br>
<span>Email Id</span><br><input type="email" name="email" id="email"  placeholder="Enter Your Email Id Here:" required><br>
<span>Phone Number</span><br><input type="tel" name="phone" id="phone"  placeholder="Enter You'r Phone No. :" required><br>
<button type="submit">Request For Contact</button>
<button type="reset" id="reset">Reset Form</button>

</form>
</div>
</div>
<br><br><br>
</section>


</center>
</body>
<main>
  <footer>
    <div class="footer-index">
     <ul>
      <th>Important Links</th>
              <li><a href="signin.php">Sign-In</a></li>
              <li><a href="security/signup.php">Sign-Up</a></li>
              <li><a href="https://google.in">Google</a></li>
              <li><a href="mailto:coderboyz@gmail.com">Maik-Id</a></li>
              <li><a href="http://cbseresults.nic.in/"></a></li>
          </ul>
          <a id="contact">
          <p class="copyright-index">CoderBoys Organisation, Chandigarh. <br> Ph. +91-9872958903, E-mail ID - coderboyz@gmail.com<br>
            Designed by :-Ayush Sharma| 9872958903 <br>
            Hosted by :-Ayush Sharma| 9872958903 <br>
           |Copyright&#169;2022 | <br> All rights reserved to CoderBoyz Organisation .</p>
          </a>
</div>
</footer>

<?php
        // check if the signout button is clicked
        if(isset($_POST["btnsignout"]) == true) 
        {
            // signout
            ///////////// session code ////////////
            session_unset();
            session_destroy();
            //////////////////////////////////////
            // redirect to the index.php page
            header("Location: security/signin.php");
            exit();
        }
    ?>
</main>
</html>