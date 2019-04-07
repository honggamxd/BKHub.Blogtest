<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH .'/include/header.php') ?>
<?php require_once( ROOT_PATH .'/include/database_connect.php') ?>
<?php  $value = getPostById(); $com = getcomment(); var_dump($com);
   ?>

<body>

  <!-- Navigation -->
  

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $value['title'] ?>
     
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="https://blackrockdigital.github.io/startbootstrap-modern-business/index.html">Home</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $value['category'] ?></li>
    </ol>

<div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $value['img'] ?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $value['date'] ?></p>

        <hr>

        <!-- Post Content -->
        <p class="lead"></p>
        

        <p> <?php echo $value['content'] ?> <p>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
<?php  foreach ($com as $key => $list) { ?>
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $list['name'] ?></h5>
            <?php echo $list['content'] ?>
          </div>
        </div>
<?php } ?>
        <!-- Comment with nested comments -->
        
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
     

        <!-- Categories Widget -->
     <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/include/categories.php')?>
      
      <!-- Side Widget -->
      <?php require_once(ROOT_PATH .'/include/side_widget.php')?>

      

        
  <!-- /.container -->

  <!-- Footer -->
  <?php require_once(ROOT_PATH .'/include/footer.php') ?>