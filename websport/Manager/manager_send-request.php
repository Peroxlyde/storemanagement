<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velotica Manager</title>
<link rel="icon" type="image/png" sizes="16x16" href="/velo-favicon.png" ></link>
<style>
  /* Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    display: flex;
    width: 1535.2px;
    height: 729.6px;
  }

  /* Side Navbar */
  .side-navbar {
    width: 250px;
    height: 100vh;
    background-color: white;
    color: #808080;
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 20px;
  }

  .side-navbar a {
    text-decoration: none;
    color: #808080;
    display: block;
    font-size: 18px;
    transition: background-color 0.3s;
  }

  .side-navbar a:focus, .side-navbar a.active {
    color: #0B63F8;
    background-color: #e0e0e0;
  }
  .side-navbar a:hover {
    color:white;
    background-color: #0B63F8;
  }
  .side-navbar .logo {
    font-size: 24px;
    font-weight: bold;
    padding: 20px;
    text-align: center;
  }

  /* Main Content */
  .main-content {
    margin-left: 250px;
    height: 100%;
    flex-grow: 1;
    background-color: #f4f4f4;
  }
  .main-content h1{
    margin-top:100px;
    margin-left:50px;
  }
  .side-navbar a.active {
        color: #0B63F8;
  }

  label {
  display: block;
  font-size: 0.875rem;
  color: #4b5563;
  margin-bottom: 0.5rem;
  }

  input, button {
  border: 1px solid #4b5563;
  border-radius: 4px;
  height: 30px;
  line-height: 30 px;
  padding-left: 5px;
  }
  
  input:focus, button:focus {
  border-color: black;
  box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
 }

 .form {
  width: 50%;
  margin-top: 20px;
  margin-left: 50px;
 }


</style>
</head>
<body>

<div class="side-navbar">
  <div class="logo">
    <a href="manager_page.php">
      <img src="velotica-2.png" style="width:220px;height:auto;">
    </a>
  </div>
  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center"> 
    <img src="warning-sign.png" style="width:25px;height:auto;">
    <a href="manager_issue-report.php">Issued report</a>
</div>

  <div style="display: flex;margin-left:30px;gap:20px;margin-top:50px;align-items:center">
    <img src="question.png " style="width:25px;height:auto;">
    <a href="manager_send-request.php" class="active">Send a request</a>
  </div>

  <div style="display:flex;margin-left:29px;gap:20px;margin-top:50px; align-items:center; margin-top: 420px;">
    <img src="log-out.png" style="width:25px;height:auto;">
    <a href="../welcome.php">Log out</a>
  </div>

</div>

<div class="main-content">
  <h1>Send a request</h1>
  <form action="request_handling.php" class="form" method="post"> 
    <div>
      <label for="request">Request to Dev:</label>
      <textarea row ="5" col ="60" name="request" style="width:298px; height: 216px; border-radius: 4px; padding-inline-start: 5px; padding:5px;"></textarea><br><br>
    </div>
    <div style="margin-top:20px;">
        <input type="submit" style="color: white;background-color: black;padding-left: 60px;padding-right: 60px;">
    </div>
  </form>
</div>
</body>
</html>
