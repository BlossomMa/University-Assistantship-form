<!DOCTYPE html>
<html>
<head>
	<title>PHP Application Processing</title>
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .center-table {
        margin: 0 auto; 
        width: 70%;
        padding: 200px;
        border: 1px solid #4CAF50;
    }
    </style>
</head>

<body>
<?php include 'header.php'; ?>

<?php include 'menu_items.php'; ?>

<h2>Thank you for applying!</h2><br>

<h4> Below is the information you just submitted </h4>

<table class="center-table">
    <tr><td>First Name</td><td><?php echo $_POST["firstname"]?></td></tr>
    <tr><td>Last Name</td><td><?php echo $_POST["lastname"]?></td></tr>
    <tr><td>Address</td><td><?php echo $_POST["address"]?></td></tr>
    <tr><td>State</td><td><?php echo $_POST["state"]?></td></tr>
    <tr><td>Zipcode</td><td><?php echo $_POST["zipcode"]?></td></tr>
    <tr><td>Email Address</td><td><?php echo $_POST["email"]?></td></tr>
    <tr><td>Phone Number</td><td><?php echo $_POST["phone"]?></td></tr>
    <tr><td>Student Status</td><td><?php echo $_POST["education"]?></td></tr>
    <tr><td>Weekly Availability</td><td><?php echo $_POST["Availability"]?></td></tr>
    <tr><td>Area of concentration</td><td><?php echo $_POST["concentration"]?></td></tr>
</table>
<br>

<h4>You will receive an email shortly to complete the process.</h4>
   
<?php include 'footer.php'; ?>

</body>

</html>
