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
		if(empty($email)){
			array_push($errors, "Email is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}
		//check username & email
		global $conn;
		$sql = "SELECT * FROM users WHERE name ='$name' AND email = '$email' LIMIT 1";
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
		if($user['name'] == $name){
			array_push($errors, "Username exists");
		}
		if($user['email'] == $email){
			array_push($errors, "Email exists");
		}
		
		if(empty($errors)){
			global $conn;
			$sql = "INSERT INTO users(name,email,password) VALUE ('$name','$email','$password')";
			$result = mysqli_query($conn,$sql);
			$mess = "You register successfully!!";
			
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
          <h4 class="mt-4 mb-3"> Register </h4>
          <?php if(count($errors)) {?>
            <?php foreach($errors as $error) {?>
              <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
              </div>
            <?php } ?>
          <?php } ?>
          <?php if(isset($mess)) {?>
            <div class="alert alert-success" role="alert">
              <?php echo $mess;
			  header('location: index.php'); ?>
            </div>
          <?php } ?>
          
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name"  placeholder="Enter username" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
        </div>
    </div>
      

        
  <!-- /.container -->

  <!-- Footer -->
  
  