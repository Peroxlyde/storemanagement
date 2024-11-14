<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.center-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: linear-gradient(to bottom right, #f9fafb, #f3f4f6);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.container {
  width: 100%;
  max-width: 28rem;
}

.card {
  background: white;
  border-radius: 1rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  position: relative;
}

.admin-badge {
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 0.875rem;
  color: #9ca3af;
}

.title {
  font-size: 1.875rem;
  font-weight: bold;
  color: #1f2937;
  margin-bottom: 2rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

label {
  display: block;
  font-size: 0.875rem;
  color: #4b5563;
  margin-bottom: 0.5rem;
}

input {
  width: 100%;
  padding: 0.5rem 1rem;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
  font-size: 1rem;
  transition: all 0.2s;
  outline: none;
}

input:focus {
  border-color: #3b82f6;
  box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

button {
  width: 100%;
  padding: 0.5rem 1rem;
  background-color: #1f2937;
  color: white;
  border: none;
  border-radius: 0.5rem;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.2s;
}

button:hover {
  background-color: #374151;
}
.back-button {
            position: fixed;
            top: 1rem;
            left: 1rem;
            padding: 0.5rem 1rem;
            background-color: #1f2937;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .back-button:hover {
            background-color: #374151;
        }

    </style>
</head>
<body>
<a href=welcome.php class="back-button">← Back</a>
<div class="center-wrapper">
    <div class="container">
      <div class="card">
        <span class="admin-badge">For Manager</span>
        <h1 class="title">Sign in</h1>
        <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo "<script>alert('" . $_SESSION['error'] . "');</script>";
                unset($_SESSION['error']); // Clear the error after displaying
            }
            ?>
        <form @submit.prevent="handleSubmit" action="managerDB.php" method="POST">
          <div class="form-group">
            <label for="username">Enter your username</label>
            <input
              id="username"
              name="username"
              type="text"
              placeholder="Username"
              required
            />
          </div>

          <div class="form-group">
            <label for="password">Enter your Password</label>
            <input
              id="password"
             name="password"
              type="password"
              placeholder="Password"
              required
            />
          </div>

          <button type="submit">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>