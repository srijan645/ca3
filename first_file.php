<?php
// Whenever the apply button is pressed, the following code will execute.
if (isset($_POST['apply'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $degree = $_POST['degree'];
    $age = $_POST['age'];
    $email = $_POST['emailAddress'];
    $marks10 = $_POST['marks10'];
    $marks12 = $_POST['marks12'];
    $income = $_POST['income'];
// All above variables are declared with respective names.

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbn = "ca-3"; 
    // servername and database names are stored in the above variables.


        // Create SQLconnection 
        $conn = new mysqli($servername, $username, $password, $dbn, 3308);

        // Check connection 
        if ($conn->connect_error)
        { 
            die("Connection failed: " . $conn->connect_error); 
        } 
            echo "--------Connected successfully----------"; 
        //running SQL command to store the values in the database with respective column values and variables values as stored by the user.
        $entry = "INSERT INTO application(firstname, lastname, age, degree, email, marks10, marks12, income) VALUES ('$firstName', '$lastName', '$age', '$degree', '$email', '$marks10', '$marks12', '$income')"; 

        // if the above database storage was successful then run this command else, throws the error.
        if ($conn->query($entry) === TRUE) {
            echo "____New record created successfully____ <br><br>"; 
        } else { 
            echo "Error: " . $entry . "<br>" . $conn->error; 
        } $conn->close(); 

}
?>

<!-- CREATED BY Srijan -->