<?php
    /*$email = $_POST['email'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost', 'root', '', 'hotel');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}else{
    $query = $conn->prepare("select * from hotels where email = ?");
    $query->bind_param("s",$email);
    $query->execute();
    $query_result = $query->get_result();
    if($query_result->num_rows > 0){
        //$_SESSION['email'] = $email;
       // header("location:navbar.html");
            $data = $query_result->fetch_assoc();
            if($data['password'] === $password){
                
                header("location:hotel_orders.php");
            }else{
                echo 'Invalid id or pwd';
                header("location:login.html");
            }
    }else{
        header("location:login.html");
    }
}
*/


    session_start();
    $conn = new mysqli('localhost', 'root', '', 'hotel') or die('Connection Failed');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = mysqli_query($conn,"SELECT * FROM hotels WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($select);
    
        if(is_array($row)){
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
        }else{
            echo "incorrect";
            header("location:login.html");
        }
    }

    if(isset($_SESSION['email'])){
        header("location:hotel_orders.php");
    }



?>

