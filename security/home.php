<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Login Page
        </title>
        <link rel="stylesheet" href="stylesh.css">
    </head>
    <body>
        <div class="log-container">
            <form action="processl.php" method="post"  >
                <div id="loginForm" autocomplete="on">
                <h2>Login</h2>
                <div class="input-group">
                    <label for="username">User Name</label><br>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="show-pw">
                    <input type="checkbox" id="checkbox"><p>Show Password</p>
                   
                </div>
                    <button type="submit" id="loginbutton">Login</button>
                    <p id="error-massage"></p>
</div>
            </form>
        </div>
        <script src="script1.js"></script>
    </body>
    </html>