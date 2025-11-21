<?php
//inclkude config
require_once 'config.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register an account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body{
            text-align:center;
            display:block;
            margin:auto;
        }
    </style>
</head>
<body>
    <h1 class="bg bg-info">Register an account</h1>
    <form method="post">
        <div class="form-control">
            <label>First Name</label>
            <input type="text" name="firstname">
        </div>
        <div class="form-control">
            <label>Last Name</label>
            <input type="text" name="lastname">
        </div>
        <div class="form-control">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="form-control">
            <label>Phone Number</label>
            <input type="text" name="phonenum">
        </div>
        <div class="form-control">
            <label>Address</label>
            <input type="text" name="address">
        </div>
        <div class="form-control">
            <label>Date Of Birth</label>
            <input type="date" name="dob">
        </div>
        <div class="form-control">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <button type="submit" class="btn btn-success">Register</button>

    </form>
</body>
</html>