<?php

include_once 'class/register.php';
$reg= new Register();



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
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                    <h3>Registerd student information</h3>
                </div>
                <div class="col-md-6">
                    <a href="addStudent.php" class="btn btn-success float-right">Add Student</a>
                </div>
              </div>
            </div>
            <div class="card-body">

              <table class="table table-bordered">
                
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Picture</th>
                        <td>Action</td>
                    </tr>
                    <?php
                         $allstd = $reg->allStudent();
                         if($allstd){
                            while($row = mysqli_fetch_assoc($allstd)){
                                ?>
                                 <tr>
                                    <td><?=$row['name'];?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['phone'];?></td>
                                    <td><?=$row['address'];?></td>
                                    <td><img style="width: 100px;" src="<?=$row['picture'];?>" alt="" class="img-fluid"></td>
                                    <td>
                                      <a href="edit.php?id=<?= base64_encode($row['id'])?>" class="btn btn-warning">Edit</a>
                                      <a href="#" class="btn btn-danger">Delet</a>
                                    </td>
                                    

                                 </tr>
                                <?php
                            }
                         }
                     ?>
                   
                
              </table>

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
