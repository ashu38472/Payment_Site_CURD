<?php
  include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>User Details</title>
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="hello.php" class="text-light text-decoration-none">Add user details</a></button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Pincode</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Card or UPI No</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql="Select * from user";
                $result=mysqli_query($con,$sql);
                if($result){
                  while($row=mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $address = $row['address'];
                    $email = $row['email'];
                    $pincode = $row['pincode'];
                    $pMethod = $row['pMethod'];
                    $pNo = $row['pNo'];

                    echo '
                    <tr>
                      <th scope="row">'.$id.'</th>
                      <td>'.$name.'</td>
                      <td>'.$gender.'</td>
                      <td>'.$address.'</td>
                      <td>'.$email.'</td>
                      <td>'.$pincode.'</td>
                      <td>'.$pMethod.'</td>
                      <td>'.$pNo.'</td>
                      <td>
                        <button class="btn btn-primary">
                          <a href="update.php? uid='.$id.'" class="text-light text-decoration-none" deco>
                            Update
                          </a>
                        </button>
                        <button class="btn btn-danger">
                          <a href="delete.php? did='.$id.'" class="text-light text-decoration-none" deco>
                            Delete
                          </a>
                        </button>
                      </td>
                    </tr>';
                  }
                }
              ?>
              
              </tbody>
        </table>
    </div>
  </body>
</html>