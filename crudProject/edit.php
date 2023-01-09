<?php

include_once 'class/register.php';
$reg= new Register();

if (isset($_GET['id'])){
    $id = base64_decode($_GET['id']);
}

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $register = $reg->addRegister($_POST, $_FILES);
// }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <title>Registration</title>
  </head>
  <body>
    <br />
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7">
          <div class="card shadow">
                <!-- Alerts -->
                <?php
                if(isset($register)){
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?=$register?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                    <?php
                }
                ?>
                
            <div class="card-header">
           <div class="row">
           <div class="col-md-6">
                    <h3>Update Students</h3>
                </div>
                <div class="col-md-6">
                    <a href="index.php" class="btn btn-secondary float-right">Show Student Info</a>
                </div>
           </div>
            </div>
            <div class="card-body">

            <?php 
                $getStd = $reg->getStdById($id);
                if($getStd){
                    while($row = mysqli_fetch_assoc($getStd)){
                        ?>
                 <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Name</label>
                <input
                  type="text"
                  name="name"
                  id=""
                  value="<?=$row['name']?>"                       
                  class="form-control"
                />
                <br />

                <label for="">eMail</label>
                <input
                  type="text"
                  name="email"
                  id=""
                  value="<?=$row['email']?>" 
                  class="form-control"
                />

                <br />

                <label for="">Phone Number</label>
                <input
                  type="number"
                  name="phone"
                  id=""
                  value="<?= $row['phone']?>" 
                  class="form-control"
                />

                <br />

                <label for="">Address</label>
                <textarea name="address" class="form-control"><?= $row['address'] ?></textarea>

                <br />

                <label for="">Profile Picture</label>
                <input type="file" name="photo" id="" class="form-control" />
                <img src="<?=$row['picture']?>" styl="width: 200px;" class="img-thumbnail"  alt="">
                <br /> <br />
                <input type="submit" value="Publish" class="btn btn-warning" />
              </form>
                        <?php
                    }
                    
                }
             ?>

             

             
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
