<?php
    include 'connect.php';
    $id = $_GET['uid'];
    $sql="Select * from user where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    $name = $row['name'];
    $gender = $row['gender'];
    $address = $row['address'];
    $email = $row['email'];
    $pincode = $row['pincode'];
    $pMethod = $row['pMethod'];
    $pNo = $row['pNo'];


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $pMethod = $_POST['method'];
        $pNo = $_POST['number'];

        $sql="update user set id='$id',name='$name',gender='$gender',address='$address',
        email='$email',pincode='$pincode',pMethod='$pMethod',pNo='$pNo' where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:user.php');
        }else{
            echo die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
        <form method="POST">
            <h1>Payment Form</h1><br>
            <hr>
            <div class="required">Required field are followed by *</div><br>
            <h2 class="">Contect Info</h2><br>
            <div>Name : *<input type="text" name="name" placeholder="type your name" value=<?php echo $name ?> required></div><br>
            <div>Gender : *
                <select name="gender" id="gender" required placeholder="select" value=<?php echo $gender ?>>
                    <option value="">--Select---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div><br>
            <div>Address : <textarea name="address" id="" cols="25" rows="3" placeholder="enter your address" value=<?php echo $address ?>></textarea></div><br>
            <div>Email : *<input type="email" name="email" id="email" required placeholder="enter your email" value=<?php echo $email ?>></div><br>
            <div>Pincode : *<input type="number" name="pincode" id="pincode" min="100000" max="999999"required value=<?php echo $pincode ?> placeholder="enter your pincode"></div>
            <br>
            <h2>Payment Info</h2><br>
            <div>Payment method : *
                <select name="method" id="method" required>
                    <option value="">--Select Payment Mode--</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="upi">UPI</option>
                </select>
            </div><br>
            <div>Card Or UPI number : *<input type="text" name="number" id="number" required value=<?php echo $pNo ?> placeholder="enter your card or UPI number"></div><br>
            <div>If card </div><br>
            <div>CVV : <input type="password" name="cvv" id="cvv" placeholder="enter your card CVV"></div><br>
            <div>Month and Year : <input type="date" name="ex" id="ex"></div><br>
            <button name="submit">Update</button>
        </form>
    </div>
</body>
</html>
