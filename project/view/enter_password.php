<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>New Password</title>
            </head>
            <body>
                <form action="../controller/update_password.php" method="post" align="center">
                    <fieldset><legend><h1>New password</h1></legend>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <label for="new_password">New Password:</label>
                    <input type="password" id="new_password" name="new_password" required><br><br>
                    <button type="submit">Submit</button>
                    </fieldset>
                </form>
            </body>
            </html>