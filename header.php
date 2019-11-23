<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Lập Trình Web 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $page=='index' ? 'active' :' '?>">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <?php if($currentUser): ?>
    
<?php endif; ?>
      <?php if (!$currentUser ): ?>
      <li class="nav-item  <?php echo $page=='register' ? 'active' :' '?>">
        <a class="nav-link" href="register.php">Đăng Ký</a>
      </li>
        <li class="nav-item  <?php echo $page=='login' ? 'active' :' '?>">
        <a class="nav-link" href="login.php">Đăng Nhập</a>
      </li>
      <li class="nav-item  <?php echo $page=='reset-password' ? 'active' :' '?>">
        <a class="nav-link" href="reset-password.php">Quên Mật Khẩu</a>
      </li>
     <?php else : ?>
     </li>
       
      </li>
        <li class="nav-item  <?php echo $page=='logout' ? 'active' :' '?>">
        <a class="nav-link" href="logout.php">Đăng Xuất <?php echo $currentUser ?'(' . $currentUser["displayName"] .')' :'' ?>  </a>
      </li>
      <?php endif ; ?>
    
  </div>
</nav>

   