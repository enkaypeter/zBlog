 <?php
    error_reporting();
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
      if(isset($_POST['update'])){
      
        $name = $_POST["name"];
        $header = $_POST["Header"];
        $subHeading = $_POST["subHeading"];
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];
        $p4 = $_POST["p4"];
        $p5 = $_POST["p5"];

        $postSq = "UPDATE Post SET Name='$name',Header='$header',subHeading='$subHeading',p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5' WHERE ID = $id";
        // var_dump($postSq); die();
        $postRe = mysqli_query($connect,$postSq);
        
        $postCont = mysqli_affected_rows($connect);


        if($postCont >= 1){
                $msg = '<p class="success"> Item Updated sucessfully!!!</p>';
            }else{
                 $msg = '<p class="error"> Could not add Item to Database. Please Try again!</p>';
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

    <div class="jumbotron">
      <div class="text-center">
          <h1>Welcome to me Blog Edit Panel</h1>
          <small>help yourself with the edit options below</small>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>
    </div>
     <article>
        <div class="container ">
                <div class="row">
                     <div class="col-lg-8 col-lg-offset-3 col-md-10 col-md-offset-1 text-center">
                    <form class="form-horizontal " method="post" action="">
                        <?php
                          echo$id;
                            if(isset($msg)){
                                echo $msg;
                            }
                        ?>


                    <div class="control-group form-group move">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Post Heading:</label>
                                    <input type="text" class="form-control" id="phone" name="Header" value="<?php echo $title; ?>" required >
                            </div>
                        </div>
                     </div>
            
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Post SubHeading:</label>
                                    <input type="text" class="form-control" id="phone" name="subHeading" value="<?php echo $miniTitle; ?>" required >
                            </div>
                        </div>
                     </div>
            
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Posted By Who?</label>
                                <input type="text" class="form-control" id="phone" name="name" value="<?php echo $name2; ?>" required >
                            </div>
                        </div>
                     </div>
            
                      <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph One:</label>
                                <textarea class="form-control" rows="4" id="message" name="p1"  required ><?php echo $p1; ?></textarea>
                            </div>
                        </div>
                    </div>
                      <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Two:</label>
                                <textarea class="form-control" rows="4" id="message" name="p2" required ><?php echo $p2; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Three:</label>
                                <textarea class="form-control" rows="4" id="message" name="p3"  required ><?php echo $p3; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Four:</label>
                                <textarea class="form-control" rows="4" id="message" name="p4" required ><?php echo $p4; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Five:</label>
                                <textarea class="form-control" rows="4" id="message" name="p5" required ><?php echo $p5; ?></textarea>
                            </div>
                        </div>
                    </div>    
                    <br>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                  </form>
                </div>
            </div>
        </div>



</body>
</html>