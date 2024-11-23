
    <?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include('../connection.php');
    session_start();

    $managerID = $_SESSION['managerID'];
    $detail = $_POST['request'];
    if (!empty($detail)) {
    $detail = $conn->real_escape_string($detail);
    $sql = "INSERT INTO request (managerID,detail) VALUES ($managerID,'$detail')";
    if ($conn->query($sql) === TRUE) {
        echo "Request successfully submitted!";
        header("Location: manager_page.php");
    } else {
        echo "Error: " . $conn->error;
    }
    } else {
    echo "Request cannot be empty!";
    header("Location: manager_send-request.php");
    }
    $conn->close();
    ?>
