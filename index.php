<?php include "header.php"; ?>

<!-- Hero Section -->
<div class="hero-section bg-success p-10">
  <div class="container d-flex flex-column align-center jc-center">
    <h1 class="text-light hero-heading">Welcome to TechnicalAnsari</h1>
    <div class="text-light hero-para mt-2">
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <div class="container header-type">
        <h1 class="header-tagline">A Website For <span class="auto-type"></span></h1>
      </div>

      <script>
        var typed = new Typed(".auto-type", {
          strings: ["Learning", "WebDevelopers", "YouTube SourceCode"],
          typeSpeed: 70,
          backDelay: 1000,
          backSpeed: 60,
          startDelay: 300,
          Delay: 400,
          showCursor: true,
          cursorChar: '|',
          fadeOut: false,
          loop: true
        })
      </script>
    </div>
    <div class="buttons hero-btn mt-4">
      <a href="./login.php" class="btn btn-danger btn-login">Login</a>
      <a href="./signup.php" class="btn btn-danger btn-signup">SignUp</a>
    </div>
  </div>
</div>
<div class="bg-cyan-2">
  <div class="learn-html">
    <div class="courses container d-flex  jc-evenly align-center">
      <div class="course-details mt-7 mb-5">
        <h1 class="course-heading">Learn HTML, CSS, JavaScript</h1>
        <p class="course-para">Learn HTML, CSS, JavaScript Bigenners to Advance</p>
        <img src="./images/htmlcssjs.png" alt="Learn HTML Beginners to Advance" class="course-img">
      </div>

      <div class="course-btns">
        <button id="html-learn-btn" class="btn btn-danger course-btn">Learn HTML</button><br><br>
        <button id="css-learn-btn" class="btn btn-danger course-btn">Learn CSS</button><br><br>
        <button id="js-learn-btn" class="btn btn-danger course-btn">Learn JavaScript</button>
      </div>
    </div>
  </div>
</div>


<!-- blog -->
<header>
  <h1 class="text-center mt-5 mb-5">My Blog and Articles</h1>
</header>
<div class="band">
  <div class="item-1">
    <a href="https://design.tutsplus.com/articles/international-artist-feature-malaysia--cms-26852" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);">
      </div>
      <article>
        <h1>International Artist Feature: Malaysia</h1>
        <span>Mary Winkler</span>
      </article>
    </a>
  </div>
  <div class="item-2">
    <a href="https://webdesign.tutsplus.com/articles/how-to-conduct-remote-usability-testing--cms-27045" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);"></div>
      <article>
        <h1>How to Conduct Remote Usability Testing</h1>
        <span>Harry Brignull</span>
      </article>
    </a>
  </div>
  <div class="item-3">
    <a href="https://design.tutsplus.com/articles/envato-tuts-community-challenge-created-by-you-july-edition--cms-26724" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);">
      </div>
      <article>
        <h1>Created by You, July Edition</h1>
        <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+ community! </p>
        <span>Melody Nieves</span>
      </article>
    </a>
  </div>
  <div class="item-4">
    <a href="https://webdesign.tutsplus.com/tutorials/how-to-code-a-scrolling-alien-lander-website--cms-26826" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/landing.png);"></div>
      <article>
        <h1>How to Code a Scrolling “Alien Lander” Website</h1>
        <p>We’ll be putting things together so that as you scroll down from the top of the page you’ll see an “Alien
          Lander” making its way to touch down.</p>
        <span>Kezz Bracey</span>
      </article>
    </a>
  </div>
  <div class="item-5">
    <a href="https://design.tutsplus.com/tutorials/stranger-things-inspired-text-effect--cms-27139" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);"></div>
      <article>
        <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
        <span>Rose</span>
      </article>
    </a>
  </div>
  <div class="item-6">
    <a href="https://photography.tutsplus.com/articles/5-inspirational-business-portraits-and-how-to-make-your-own--cms-27338" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);">
      </div>
      <article>
        <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>

        <span>Marie Gardiner</span>
      </article>
    </a>
  </div>
  <div class="item-7">
    <a href="https://webdesign.tutsplus.com/articles/notes-from-behind-the-firewall-the-state-of-web-design-in-china--cms-22281" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);">
      </div>
      <article>
        <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
        <span>Kendra Schaefer</span>
      </article>
    </a>
  </div>
</div>






<script src="./js/script.js" type="text/javascript"></script>
</body>

</html>
<?php include "footer.php"; ?>