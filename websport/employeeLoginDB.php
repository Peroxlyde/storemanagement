
<?php
// adminLogin.php
session_start();
// Database connection
include('connection.php');  

//if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    // Hash the password for comparison
    $npassword = md5($password);

    //if (count($errors) == 0) {
        // Query to check for matching credentials
        $query = "select * from admin where aUsername = '$username' AND aPassword = '$npassword'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result); 
        // Check if there is exactly one match
        if ( $count == 1) {
            $_SESSION['adminID'] = $row['adminID'];
            //$_SESSION['success'] = "You are now logged in";
            //echo "<h1><center> Login successful </center></h1>";  
            //header("Location: Admin/admin_page.php");
            
            header("Location: Admin/admin_page.php");
            
        } else {
            $_SESSION['error'] = "Invalid username or password";
            header("location: employeeLogin.php");
        }
    //}
//}

// Close the database connection
$conn->close();
?>
