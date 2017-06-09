<?php
  require("includes/functions.php");
    $allPost = "";
    $postId = "";
    $name = "";
    $header = "";
    $subHeader = "";
    $dateAdded = "";
    $connect = connect();
    $showAllQuery = 'SELECT * FROM Post';
    $res = mysqli_query($connect,$showAllQuery);
    $count = mysqli_affected_rows($connect);
    if($count > 0){
        while($row = mysqli_fetch_assoc($res)){
        $id = $row["ID"];
        $name = $row["Name"];
        $header = $row["Header"];
        $subHeading = $row["SubHeader"];

            $allPost .= '<div class="post-preview">
                        <a href="d_delete.php?id='.$id.'">
                        <h2 class="post-title">
                            '.$header.'
                        </h2>
                        <h3 class="post-subtitle">
                            '.$subHeader.'
                        </h3>
                    </a>
                    <p class="post-meta">Posted by<a href="#"> '.$name.'</a></p>
                </div>';
        }
    }
    mysqli_close($connect);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">zBlog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left">
        
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="add.php">Add Post</a>
        <li><a href="edit.php">Edit</a></li>
        <li class="active"><a href="delete.php">Delete</a></li>
        <li><a href="views.php">Views from the six</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
<div class="text-center">
    <h1>Welcome to me Blog</h1>
    <small>View Post to Kill</small>
    <p>...</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>

 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    
                   <?php
                    echo $allPost;
                   ?>
                   <hr>
                    
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Older Posts &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>