<?php
if(isset($_POST['submit'])){
    $o_item = $_POST['item'];
    $o_email = $_POST['email'];
    $o_number = $_POST['number'];
    $o_quantity = $_POST['quantity'];
    $o_address= $_POST['address'];
    $o_hotel_name= $_POST['hname'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'hotel';

    $conn = mysqli_connect($host,$user,$password,$dbname);

    if($o_hotel_name == 'Rajwadu'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name' , 'rajwadu@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Agashiye'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','agashiye@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Kabab'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','greatkabab@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Azure'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','azure@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Barbeque'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','barbeque@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Mandap'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','mandap@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Zaafaroon'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','zaafaroon@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'Gazebo'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','gazebo@gmail.com')";
    mysqli_query($conn,$sql); 
    }elseif($o_hotel_name == 'pizza on the rock'){
        $sql = "INSERT INTO zomato_orders(item , quantity,  user_email , address , number , hotel_name , hotel_email) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name','pizzaontherock@gmail.com')";
    mysqli_query($conn,$sql); 
    }
    //$sql = "INSERT INTO zomato_orders(item , quantity,  email , address , number , hotel_name) values ('$o_item','$o_quantity','$o_email','$o_address','$o_number','$o_hotel_name')";
    //mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <style>
         body{
        background-image: url('img3.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }

        h2{
            margin-left: 40px;
        }
.container {
    width: 300px;
    margin: 0 auto;
}

form {
    padding: 20px;
}

.form-group {
    margin-bottom: 10px;
}

label {
    display: block;
}

input[type="text"],
input[type="password"],
input[type="email"],
select[name="hname"] {
    width: 100%;
    padding: 5px;
}

.btn {
    background-color: black;
    color: white;
    border: none;
    padding: 10px;
    align-content: center;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    margin-left: 90px;
}

.btn-login {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    align-content: center;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-left: 100px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Zomato Order Panel</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="item">Item</label>
                <input type="text" name="item" id="item" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" id="quantity" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="number">Contact Number</label>
                <input type="text" name="number" id="number" required>
            </div>
            <div class="form-group">
                    <span>Hotel Name</span>
                        <select name="hname" id="hname" required>
                            <option selected disabled>-- Select Hotel --</option>
                            <option value="Rajwadu">Rajwadu</option>
                            <option value="Agashiye">Agashiye Take Away</option>
                            <option value="Kabab">The Great Kabab Factory</option>
                            <option  value="Azure">Azure</option>
                            <option  value="Barbeque">The Barbeque Nation</option>
                            <option  value="Mandap">Mandap</option>
                            <option  value="Zaafaroon">Zaafaroon</option>
                            <option  value="Gazebo">Gazebo Restaurant</option>
                            <option  value="pizza on the rock">Pizza on the Rock</option>
                        </select>
            </div>
            <input type="submit" value="Register" class="btn" name="submit">
        </form>
    </div>
</body>
</html>
