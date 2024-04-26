<?php
    session_start();
    if(isset($_SESSION['customer_id'])) {
        header('Location: pages/estore.php');
    }
    //Saved values used to fill in login form values if
    //we have to go back to the login form and try again.
    $_SESSION['POST_SAVE'] = $_POST;
    
    include("connectToDatabase.php");
    $query = "SELECT * FROM my_Customers WHERE login_name = '$_POST[loginName]'";
    $rowsWithMatchingLoginName = mysqli_query($db, $query);
    $numRecords = mysqli_num_rows($rowsWithMatchingLoginName);
    if($numRecords == 0) {
        header("Location: ../pages/form_login.php?retrying=true");
    }
    if($numRecords==1) {
        $row = mysqli_fetch_array($rowsWithMatchingLoginName, MYSQLI_ASSOC);
        if(md5($_POST['loginPassword']) == $row['login_password']) {
            $_SESSION['customer_id'] = $row['customer_id'];
            $_SESSION['salutation'] = $row['salutation'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['middle_initial'] = $row['middle_initial'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['login_name'] = $row['login_name'];
            header('Location: ../pages/estore.php');
        } else { //Passwords dont match in form go back to form
            header("Location: pages/form_login.php?retrying=true");

        }
    }

mysqli_close($db);
?>