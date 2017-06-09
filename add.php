<?php
  if(isset($_POST['submit'])){
    require("includes/functions.php");
        $connect = connect();
        $name = $_POST["name"];
        $header = $_POST["Header"];
        $subHeading = $_POST["subHeading"];
        
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];
        $p4 = $_POST["p4"];
        $p5 = $_POST["p5"];
        $postSql = 'INSERT INTO Post (Name,Header,subHeading,p1,p2,p3,p4,p5) VALUES ("'.$name.'","'.$header.'","'.$subHeading.'","'.$p1.'","'.$p2.'","'.$p3.'","'.$p4.'","'.$p5.'") ';
        $postRes = mysqli_query($connect,$postSql);
        $postCount = mysqli_affected_rows($connect);


        if($postCount >= 1){
                $msg = '<p class=success> Item Added Successfully</p>';
            }else{
                 $msg = '<p class="error"> Could not add Item to Database. Please Try again!</p>';
            }
        
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Post</title>
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
      <a class="navbar-brand" href="index.php">zBlog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left">
       
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="add.php" class="active">Add Post</a>
        <li><a href="edit.php">Edit</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="views.php">Views from the six</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



   <div class="container ">
                <div class="row">
                     <div class="col-lg-8 col-lg-offset-3 col-md-10 col-md-offset-1 text-center">
                    <form class="form-horizontal " method="post" action="">
                        <?php
                            if(isset($msg)){
                                echo $msg;
                            }
                        ?>


                    <div class="control-group form-group move">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Post Heading:</label>
                                    <input type="text" class="form-control" id="phone" name="Header" placeholder="Enter The SubHeading Of The Post" value="<?php $esds ?>" required >
                            </div>
                        </div>
                     </div>
            
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Post SubHeading:</label>
                                    <input type="text" class="form-control" id="phone" name="subHeading" placeholder="Enter The SubHeading Of The Post" required >
                            </div>
                        </div>
                     </div>
            
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Posted By Who?</label>
                                <input type="text" class="form-control" id="phone" name="name" placeholder="Enter your name" required >
                            </div>
                        </div>
                     </div>
            
                      <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph One:</label>
                                <textarea class="form-control" rows="4" id="message" name="p1" placeholder="Enter Your First Paragraph" required ></textarea>
                            </div>
                        </div>
                    </div>
                      <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Two:</label>
                                <textarea class="form-control" rows="4" id="message" name="p2" placeholder="Enter Your Second Paragraph" required ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Three:</label>
                                <textarea class="form-control" rows="4" id="message" name="p3" placeholder="Enter Your Third Paragraph" required ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Four:</label>
                                <textarea class="form-control" rows="4" id="message" name="p4" placeholder="Enter Your Fourth Paragraph" required ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <div class="col-sm-6">
                                <label>Paragraph Five:</label>
                                <textarea class="form-control" rows="4" id="message" name="p5" placeholder="Enter Your Fifth Paragraph" required ></textarea>
                            </div>
                        </div>
                    </div>    
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Add Post</button>
                  </form>
                </div>
            </div>
        </div>


</body>
</html>