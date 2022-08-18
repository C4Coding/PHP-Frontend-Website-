<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Blog</title>
  <link rel="stylesheet" href="./css/main-style.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="bg-light p-1">
    <div class="container d-flex jc-between align-center">
      <div class="navbar">
        <ul class="nav">
          <div id="nav-links " class="nav-links">
            <a href="./" class="link text-dark p-2 hover-text-success font-600">Home</a>
            <a href="./about.php" class="link text-dark p-2 hover-text-success font-600">About</a>
            <a href="./courses.php" class="link text-dark p-2 hover-text-success font-600">Courses</a>
            <a href="./blog.php" class="link text-dark p-2 hover-text-success font-600">Blog</a>
            <a href="./contact.php" class="link text-dark p-2 hover-text-success font-600">Contact</a>
          </div>
          <!-- <button id="topNavicon" class="fas fa-bars btn link icon text-dark p-2 hover-text-success font-600"></button> -->
        </ul>
      </div>
      <div class="buttons p-1">
        <a href="./login.php" class="btn btn-success">Login</a>
        <a href="./signup.php" class="btn btn-success">SignUp</a>
      </div>
    </div>
  </div>