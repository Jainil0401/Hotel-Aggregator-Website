<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: white;
            font-size: 20px;
            text-align:left;
        }
        body{
            background-image: url('img7.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        th{
            color: yellow;
            text-decoration: underline;
        }
        /*All about logout design*/ 
        .dropdown{
            float: right;
            overflow: hidden;
        }

        .dropdown .dropbtn{
            font-size: 17px;
            border: none;
            outline: none;
            color: yellow;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
      

        .dropdown-content{
            display: none;
            position: absolute;
            background-color: indigo;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a{
            float: none;
            color: yellow;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover{
            background-color: black;
            color: white;
        }

        .dropdown:hover .dropdown-content{
            display: block;
        }

         
    </style>
</head>
<body>
    <div class="dropdown">
            <button class="dropbtn"><b>Account</b></button>
            <div class="dropdown-content">
                <a href="logout.php">Logout</a>
            </div>
    </div>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Item Quantity</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Address</th>
        </tr>
<?php
/*$conn = mysqli_connect("localhost","root","","hotel");

if($conn-> connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

$sql = "SELECT * from zomato_orders";
$s = "SELECT * from swiggy_orders";
$result = $conn->query($sql);
$result1 = $conn->query($s);


if($result->num_rows > 0 || $result1->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo  "<tr><td>" .$row["item"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["email"] . "</td><td>" . $row["number"]. "</td><td>" . $row["address"] ."</td></tr>";
    }
    while($row = $result1->fetch_assoc()){
        echo  "<tr><td>" .$row["item"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["email"] . "</td><td>" . $row["number"]. "</td><td>" . $row["address"] ."</td></tr>";
    }
   echo "</table>";
}
else{
    echo "0 result";
}*/

session_start();
$conn = mysqli_connect("localhost","root","","hotel");

if($conn-> connect_error){
    die("Connection Failed:" . $conn->connect_error);
}
if(isset($_SESSION['email'])){
    $email= $_SESSION['email'];
    $sql = "SELECT * from zomato_orders WHERE hotel_email='$email'";
    $s = "SELECT * from swiggy_orders WHERE hotel_email='$email'";
    $result = $conn->query($sql);
    $result1 = $conn->query($s);



if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo  "<tr><td>" .$row["item"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["user_email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["number"] . "</td><td>" . "</td></tr>";
    }
    while($row = $result1->fetch_assoc()){
        echo  "<tr><td>" .$row["item"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["user_email"] . "</td><td>" . $row["address"]. "</td><td>" . $row["number"] . "</td><td>" .  "</td></tr>";
    }

   echo "</table>";
}
else{
    echo "0 result";
}
}


$conn->close();

?>
</table>
</body>
</html>

