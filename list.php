<?PHP
$servername = "127.0.0.1";
$username = "root";
$password = "Kyle1996";
$database = "blood_tracker";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";  

?>
<!DOCTYPE HTML>
<HEAD>
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<body>
    <h1>Blood Tracker</h1>
    <p> CRUD Interface for Donors and their blood information </p>
    <a> <a href="http://localhost/comp520_project/Donors/">Donors</a> 
    <br>
    <a> <a href="http://localhost/comp520_project/blood_information/">Blood Information</a>    
</body>
</html>
<div class ="page-content">
    <h1> Blood Information List Page  </h1>
<ul>
<li> <a href="http://localhost/comp520_project/blood_information/list.php/">List</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/create.php/">Create</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/delete.php/">Delete</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/read.php/">Read</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/update.php/">Update</a></li>

</ul>
<?php
    $sql = "SELECT id, donor_id, blood_type, plasma_donation, date_of_donation FROM blood_info";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"]  . "  - Donor ID: " . $row["donor_id"]. "<br> Blood Type: " . $row["blood_type"] .
        "<br> Plasma Donation: " . $row["plasma_donation"] . "<br> Date of Donation: " . $row["date_of_donation"].
       "<br>";
    }
} else {
    echo "0 results";
}
?>