 <?php
    require("includes/functions.php");
    $id = $_GET['id'];
    //get post details
    $title ="";
    $miniTitle = "";
    $name2 = "";
    $p1 = "";
    $p2 = "";
    $p3 = "";
    $p4 = "";
    $p5 = "";
    $connect = connect(); 
    $dummySql = 'SELECT * FROM Post WHERE ID = '.$id.'';
    $postRes = mysqli_query($connect,$dummySql);
    $counter = mysqli_affected_rows($connect);
    if($counter >= 1){
        while($rowDis = mysqli_fetch_assoc($postRes)){
           $name2 = $rowDis["Name"];
           $title = $rowDis["Header"];
           $miniTitle = $rowDis["subHeading"];

           $p1 = $rowDis["p1"];
           $p2 = $rowDis["p2"];
           $p3 = $rowDis["p3"];
           $p4 = $rowDis["p4"];
           $p5 = $rowDis["p5"];
        }
    }
   
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
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
      <a class="navbar-brand" href="index.php">zBlog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left">
       
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="add.php">Add Post</a>
        <li><a href="edit.php" class="active">Edit</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="views.php">Views from the six</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <?php //echo $counter;  echo $id; ?>

<header>
  <div class="jumbotron text-center">
    <h1><?php echo $title;?></h1>
    <h5><?php echo $miniTitle; ?></h5>
    <small>Posted by <a href="#"><?php echo $name2;?></a></small>
</header>
     <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>
                       <?php
                            if(isset($p1)){
                            echo $p1;
                            }
                       ?>
                    </p>

                    <p>
                         <?php
                            if(isset($p2)){
                            echo $p2;
                            }
                       ?>
                    </p>
                     <?php echo $imageDis; ?>
                    <p>
                         <?php
                            if(isset($p3)){
                            echo $p3;
                            }
                       ?>
                    </p>

                    <p>
                        <?php
                            if(isset($p4)){
                            echo $p4;
                            }
                       ?>
                    </p>
                     <p>
                        <?php
                            if(isset($p5)){
                            echo $p5;
                            }
                       ?>
                    </p>
                </div>
            </div>
        </div>
    </article>




</body>
</html>