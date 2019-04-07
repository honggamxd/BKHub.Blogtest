<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH .'/include/header.php') ?>
<?php require_once( ROOT_PATH .'/include/database_connect.php') ?>
<?php  $posts = getPosts();   $cates = getCategories(); var_dump($posts);
$user = $_SESSION['user'];
?>
<body>

  <!-- Navigation -->
  

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Blog Home One
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="https://blackrockdigital.github.io/startbootstrap-modern-business/index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Hello <?php echo $user  ?></li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
	<?php  foreach ($posts as $key => $value) { ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $value["img"] ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"> <?php echo $value["title"] ?></h2>
            <p class="card-text"> <?php echo $value["content"] ?></p>
            <a href="<?php echo BASE_URL.'post.php?id='.$value['id'] ?>" class="btn btn-primary">Read more →</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href=" <?php echo BASE_URL ?> ">Start Bootstrap</a>
          </div>
        </div>

<?php } ?>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="https://blackrockdigital.github.io/startbootstrap-modern-business/blog-home-1.html#">← Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="https://blackrockdigital.github.io/startbootstrap-modern-business/blog-home-1.html#">Newer →</a>
          </li>
        </ul>

      </div>
      
      <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/include/categories.php')?>
      
      <!-- Side Widget -->
      <?php require_once(ROOT_PATH .'/include/side_widget.php')?>

      

        
  <!-- /.container -->

  <!-- Footer -->
  <?php require_once(ROOT_PATH .'/include/footer.php') ?>

  