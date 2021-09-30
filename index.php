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