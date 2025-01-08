<?php
//create the connections with database
$conn = mysqli_connect("localhost","root","","bukurudb");

//check if the connection is successfully
if (!$conn){
    die("Connection Failed" . mysqli_connect_error());
}

//2.check all users from the table
$sql = "SELECT * FROM users";

//Step 3: Execute the query and get the result (Record Set)

$result = mysqli_query($conn , $sql);

// Step 4: Check if there are rows in the result
if (mysqli_num_rows($result) > 0) {
    // Step 5: Loop through each row in the result and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No users found.";
}

// Step 6: Close the connection
mysqli_close($conn);
?>