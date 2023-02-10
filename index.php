<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="welcome.php" method="post" id="reg-form">
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" required="required" />
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" required="required" />
        </p>
        <p>
            <label>Email Address</label>
            <input type="email" name="email" required="required" />
        </p>
        <input type="submit" name="operator" value="Submit" />
    </form>


</body>

</html>