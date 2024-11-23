<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who You Are?</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f9fafb;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            padding: 2rem;
            gap: 4rem;
        }

        h1 {
            font-size: 3rem;
            color: #000;
            text-align: center;
        }

        .buttons-container {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .role-button {
            padding: 1rem 2rem;
            font-size: 1.25rem;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .role-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px -1px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1><?php echo "Who You Are?"; ?></h1>
    
    <div class="buttons-container">
        <a href="employeeLogin.php" class="role-button">Employee</a>
        <a href="managerLogin.php" class="role-button">Manager</a>
        <a href="devLogin.php" class="role-button">Developer</a>
    </div>
</body>
</html>
