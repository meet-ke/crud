<?php
    include("dbconfig.php");
?>

<?php

    if (isset($_POST['register_btn']))
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone_namber'];

        $query = "INSERT INTO register(fname,lname,email,password,phone) value ('$fname',' $lname','$email','password','phone') ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo "Registred Successfully";
            header ('location:index.php');
        }
        else
        {
            header ('location:register.php');
        }
    }

    if (isset($_POST['register_update_btn']))
    {
        $update_id = $_POST['edit_id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone_namber'];

        $query_update = "UPDATE register SET fname='$fname', lname='$lname' , email='$email' , password='$password' , phone='$phone' WHERE id='$update_id'";
        $query_update_run = mysqli_query($conn,  $query_update);

        if($query_update_run)
        {
            header("Location:index.php");
        }
        else
        {
            echo "Data Not Updated";
        }
    }

    if (isset($_POST['register_delete_btn']))
    {
        $delete_id = $_POST['delete_id'];

        $reg_query = "DELETE FROM register WHERE id='delete_id'";
        $reg_query = mysqli_query($conn, $reg_query);

        if($reg_query)
        {
            header("Location:index.php");
        }
        else
        {
            echo "Data Not Deleted";
        }
    }

?>