<?php 
  require_once 'init.php';

?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giới Thiệu Trang Web</title>
	<style>
		.new
		{
			column-count: 2;
		}
		.container {
		   width: 1400px;
		  padding: 0px;
		  overflow: auto;}
		#post {
		   	float: left;
		}
		#sidebar {
			 width: 500px;
			 height: 353px;
			 background: #e8e8e8;
			 float: right;
			}
		html, body {
		  width: 1400px;
		  height: 500px;
		  margin: 0;
		  padding: 0;
		}


		.slider-container{
		  height: 400px;
		  width: 600px;
		  position: relative;
		  overflow: hidden; 
		  text-align: center;
		}

		.menu {
		  position: absolute;
		  left: 0;
		  z-index: 900;
		  width: 600px;
		  bottom: 0;
		}

		.menu label {
		  cursor: pointer;
		  display: inline-block;
		  width: 16px;
		  height: 16px;
		  background: #fff;
		  border-radius: 50px;
		  margin: 0 .2em 1em;
		  transition: all .3s ease;
		  &:hover {
		    background: red;
		  }
		}

		.slide {
		  width: 600px;
		  height: 400px;
		  position: absolute;
		  top: 0;
		  left: 100%;
		  z-index: 10;
		  padding: 8em 1em 0;
		  background-size: cover;
		  background-position: 50% 50%;
		  transition: left 0s .75s;
		  margin-top: 20px;
		}

		[id^="slide"]:checked + .slide {
		  left: 0;
		  z-index: 100;
		  transition: left .5s ease-out;
		}

		.slide-1 {
		  background-image: url("https://macservice.vn/wp-content/uploads/2019/07/hinh-anh-IT-support-la-gi-4.jpg");
		}
		.slide-2 {
		  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB6ltm0p9BIRZ5mN7yaTjcQEKW_3ejtJieMFN8Fa4joqXQAOl_Bw&s");
		}
		.slide-3 {
		  background-image: url("https://macservice.vn/wp-content/uploads/2019/07/hinh-anh-IT-helpdesk-la-gi-2.jpg");
		}
		.slide-4 {
		  background-image: url("https://macservice.vn/wp-content/uploads/2019/07/hinh-anh-IT-helpdesk-la-gi-2.jpg");
		}
		.slide-5 {
		  background-image: url("https://macservice.vn/wp-content/uploads/2019/07/hinh-anh-IT-helpdesk-la-gi-2.jpg");
		}
	</style>
</head>
<body>
	<div id="content" class="container" class="new"> 
	   <div id="post">
	   		<div class="slider-container">
			  	<div class="menu">
			    	<label for="slide-dot-1"></label>
			    	<label for="slide-dot-2"></label>
			    	<label for="slide-dot-3"></label>
			    	<label for="slide-dot-4"></label>
			    	<label for="slide-dot-5"></label>
			  	</div>
		  
			  	<input id="slide-dot-1" type="radio" name="slides" checked>
			    	<div class="slide slide-1"></div>
			  
			  	<input id="slide-dot-2" type="radio" name="slides">
			    	<div class="slide slide-2"></div>

			  	<input id="slide-dot-3" type="radio" name="slides">
			    	<div class="slide slide-3"></div>

			    <input id="slide-dot-4" type="radio" name="slides">
			    	<div class="slide slide-4"></div>

			    <input id="slide-dot-5" type="radio" name="slides">
			    	<div class="slide slide-5"></div>
			</div>
	   </div><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<div id="sidebar" style="border-radius: 10px;">
			<h1 style="font-family:Georgia;  text-align: center;
			text-transform: uppercase;
			margin-top: 10px">Đăng Nhập</h1>
			<?php if (isset($_POST['Email']) && isset($_POST['Password'])): ?>
			<?php 
				$Email = $_POST['Email'];
				$Password = $_POST['Password'];
				$success = false;
				
				$user = findUserByEmail($Email);
			
				if ($user && $user[0]['status'] == 1 && password_verify($Password, $user[0]['password']))
				{
					$success = true;
					$_SESSION ['userID'] = $user[0]['id'];
				}
			?>
			<?php if ($success): ?>
			<?php header('Location: home.php'); ?>
			<?php else: ?>
			<div class="alert alert-danger" role = "alert">
				Đăng nhập Không thành công :)
			</div>
			<?php endif; ?>
			<?php else: ?>
			<form action="login.php" method="POST"class="was-validated" style="padding: 10px">
				<div class="form-group">
					<input type="email" class="form-control" id="Email" placeholder="Nhập Email của bạn" name="Email" required style="margin: 0 10px; width: 90%">
					<div class="valid-feedback">Thành công.</div>
      				<div class="invalid-feedback">Vui lòng điền vào trường này.</div>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="Password" placeholder="Nhập vào Password " name="Password" required  style="margin: 0 10px; width: 90%">
					<div class="valid-feedback">Thành công.</div>
      				<div class="invalid-feedback">Vui lòng điền vào trường này.</div>
				</div>			
				<center><button type="Submit" class="btn btn-success"><b>Đăng Nhập</b></button></center>
				<center><a href="forgotPassword.php">Quên Mật Khẩu ?</a></center>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tạo Tài Khoản mới</button>
			</form>
			<?php endif; ?>
			<!-- Button to Open the Modal -->
			
			<?php if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password'])): ?>
			<?php
				$fullname = $_POST['fullname'];
				$email = $_POST['email'];
				$password = $_POST['password'];		
				$hashPassword = password_hash($password, PASSWORD_DEFAULT);

				$success = false;			
				$user = findUserByEmail($email);
				if (! $user)
				{
					$newUserID = createUser($fullname,$email, $password);
					// $_SESSION['userID'] = $newUserID;
					$success = true;
				}
			?>
			<?php if ($success): ?>
			<div class="alert alert-success" role = "alert">
				Vui lòng kiểm tra <strong>Email</strong> để kích hoạt tài khoản
			</div>
			<?php else: ?>
			<div class="alert alert-danger" role = "alert">
				Đăng Ký Không thành công!!Mời đăng ký lại :)
			</div>
			<?php endif; ?>
			<?php else: ?>
				  <!-- The Modal -->
				  <div class="modal" id="myModal">
				    <div class="modal-dialog">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				          <h4 class="modal-title">Đăng Ký</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
				          <form action="register.php" method="POST" class="was-validated">			
								<legend><center>Personal information:</center></legend>
								<div class="form-group">
									<label for="fullname"><strong>Họ Tên</strong></label>
									<input type="fullname" class="form-control" id="fullname" placeholder="Nhập vào tên đầy đủ của bạn " name="fullname" required>
									<div class="valid-feedback">Thành công.</div>
				      				<div class="invalid-feedback">Vui lòng điền vào trường này.</div>
								</div>
								<div class="form-group">
									<label for="email"><strong>Email</strong></label>
									<input type="email" class="form-control" id="email" placeholder="Nhập vào email của bạn " name="email" required>
									<div class="valid-feedback">Thành công.</div>
				      				<div class="invalid-feedback">Vui lòng điền vào trường này.</div>
								</div>
								<div class="form-group">
									<label for="password"><strong>Password</strong></label>
									<input type="password" class="form-control" id="password" placeholder="Nhập vào password của bạn " name="password" required>
									<div class="valid-feedback">Thành công.</div>
				      				<div class="invalid-feedback">Vui lòng điền vào trường này.</div>
								</div>								
									<button type="Submit" class="btn btn-success"><b>Đăng Ký</b></button>
									<a href="login.php"><b>Hủy</b></a>	
							</form>
				        </div>
				      </div>
				    </div>
				  </div>				  
				</div>
			<?php endif; ?>
	   </div></center>
	   <div class="clear"></div> 
	</div>
</body>
</html>
<hr>
<?php include 'footer.php'; ?>