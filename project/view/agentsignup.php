<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Signup Form</title>
</head>
<body>
    <form action="../controller/agentsignupcheck.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><h1>Agent Signup Form</h1></legend>
            <table align="center">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>DOB :</td>
                    <td><input type="date" name="DOB"></td>
                </tr>
                <tr>
                    <td>Company Name :</td>
                    <td><input type="text" name="cname" required></td>
                </tr>
                <tr>
                    <td>Company Address :</td>
                    <td><input type="text" name="caddress"></td>
                </tr>
                <tr>
                    <td>House type :</td>
                    <td>
                        <input type="radio" name="type" value="Rental" required>Rental
                        <input type="radio" name="type" value="Selling">Selling
                    </td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password :</td>
                    <td><input type="password" name="confirm_password" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
