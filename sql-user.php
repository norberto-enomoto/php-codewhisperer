<?php
# define database connection variables as constant
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

# create mysql connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

# check connection
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
    }
    else{
        echo "Connected successfully";
        }


# create sql statament that query users table
$sql = "SELECT * FROM users";

# execute sql statement
$result = $conn->query($sql);

# show each row for result
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
}
    }
else{
    echo "0 results";
}    

# close connection
$conn->close();
?>
