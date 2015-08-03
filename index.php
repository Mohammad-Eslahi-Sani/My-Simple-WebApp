<!DOCTYPE html>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/jq.js"></script>
    <link type="text/css" href="css/mystyle.css">
</head>
<body>
    <form method="POST" >
        <label>
            First Name:
            <input type="text" name="firstName" id="firstName">
        </label>
        <br/>
        <label>
            Last Name:
            <input type="text" name="lastName" id="lastName">
        </label>
        <br/>
        <label>
            Gender:
            <input type="radio" name="gender" value="1" checked> Male
            <input type="radio" name="gender" value="0" > Female

        </label>
        <br/>

        <label>
            Username:
            <input type="text" name="username" id="username" required>
        </label>
        <br/>

        <label>
            Password:
            <input type="password" name="password" id="password" required>
        </label>
        <br/>
        <label>
            Re-Enter Your Password:
            <input type="password" name="re-password" required>
        </label>
        <br/>

        <input type="button" value="Submit" id="submitBtn">
    </form>
</body>
</html>