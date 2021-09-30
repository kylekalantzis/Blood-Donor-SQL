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
    <h1> Blood Information Create Page  </h1>
<ul>
<li> <a href="http://localhost/comp520_project/blood_information/list.php/">List</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/create.php/">Create</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/delete.php/">Delete</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/read.php/">Read</a></li>
<li> <a href="http://localhost/comp520_project/blood_information/update.php/">Update</a></li>
</ul>

<form action="" method="POST">
            Donor ID: <input type="text" name="donor_id"><br>
            Blood Type: <input type="text" name="blood_type">4 Char max EX: AB+<br>
            Plasma Donation: <input type="text" name="plasma_donation">YES or NO<br>
            Date of Donation: <input type="text" name="date_of_donation"><br>
            <input type="submit">
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $donor_id = $_POST["donor_id"];
        $blood_type = $_POST["blood_type"];
        $plasma_donation = $_POST["plasma_donation"];
        $date_of_donation = $_POST["date_of_donation"];
       
        $sql = "INSERT INTO blood_info (donor_id, blood_type, plasma_donation, date_of_donation) 
        VALUES ('{$donor_id}', '{$blood_type}', '{$plasma_donation}', '{$date_of_donation}')";
        if ($conn->query($sql) === TRUE) {
            echo "New Blood information has been added to a donor";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
    ?>
</div>
</body>
</html>