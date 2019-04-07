<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH .'/include/header.php') ?>

<?php 
	
	$errors = array();
	if( $_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = isset($_POST['name']) ? $_POST['name']:null;
		$email = isset($_POST['email']) ? $_POST['email']:null;
		$password = isset($_POST['password']) ? $_POST['password']:null;
		if(empty($name)){
			array_push($errors, "Name is required");
		}
		
		if(empty($password)){
			array_push($errors, "Password is required");
		}
		
		
		if(empty($errors)){
			global $conn;
			$sql = "SELECT * FROM users WHERE name ='$name' AND password='$password' ";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['user']=$name;	
			$mess = "You login successfully!!";
			}
			else{
			$mess1 = "Username or email or password incorrect";
			}
			
		}		
	}

?>

<body>

  <!-- Navigation -->
  

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
   <div class="row"> 
    <div class="col-lg-12">
       <form class="col-lg-6 offset-lg-3" method="post" action="">
          <h4 class="mt-4 mb-3"> Login </h4>
          <?php if(count($errors)) {?>
            <?php foreach($errors as $error) {?>
              <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
              </div>
            <?php } ?>
          <?php } ?>
          <?php if(isset($mess)) {?>
            <div class="alert alert-success" role="alert">
              <?php //echo $mess;
			  
			  header('location: admin/user.php'); ?>
            </div>
          <?php } ?>
          <?php if(isset($mess1)) {?>
            <div class="alert alert-success" role="alert">
              <?php echo $mess1;
			  
			  //header('location: index.php'); ?>
            </div>
          <?php } ?>
          
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name"  placeholder="Enter username" name="name">
          </div>
          
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
    </form>
        </div>
        </div>
    </div>
      

        
  <!-- /.container -->

  <!-- Footer -->
  
  