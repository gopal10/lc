<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>
        <option value=""></option>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
    <option value="<?php echo $row["id"]; ?>"><?php echo $row["full_name"]; ?></option>
    <?php
    }
} else {
    echo "0 results";
}