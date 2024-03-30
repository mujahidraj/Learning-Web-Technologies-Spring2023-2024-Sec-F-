<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form action="../controller/reset_pin_2.php" method="post" align="center">
        <fieldset>
            <legend><h1>Forgot Password</h1></legend>
      
        
        Email : <input type="email" id="email" name="email" required><br><br>
        
       Reset Pin :  <input type="text" id="reset_code" name="reset_code" required><br><br>
        <button type="submit" value="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
