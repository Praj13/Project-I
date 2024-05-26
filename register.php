<?php 
session_start();
include 'dbconnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];
    // $sql = "SELECT * FROM users WHERE username='$username'";
    // $result = $conn->query($sql);
    // if(mysqli_num_rows($result)==0){
    //     echo'Already exists';
    // }
    $sql1 = "INSERT INTO users (username, password, role)
            VALUES ('$username', '$password', 'photographer')";
            $_SESSION['username'] = ['username'];
    $result1 = mysqli_query($conn, $sql1);
    $_SESSION['username'] = $username;
    if($result1){
        echo '
        <script>
        alert("redirecting to form page");
        window.location.href = "photographer_details.php";
        </script>
        ';
    }
    // if ($conn->query($sql) === TRUE) {
    //      echo "<span class='success-message'>Account created successfully. Now, we will be heading you to fill up some common personal details so that it will be easier to remember you. <a href='photographer_details.php'>Click here</a>.</span>";
    // } else {
    //     echo "Error creating account: " . $conn->error;
    // }
}

// Check if username already exists

// if ($result->num_rows > 0) {
//      echo "<span class='error-message'> Username already exists. Please choose a different username.</span>";
// } else {
//     // Insert new user into database
//     $sql = "INSERT INTO users (username, password, role)
//             VALUES ('$username', '$password', 'photographer')";
//             $_SESSION['username'] = ['username'];

//     if ($conn->query($sql) === TRUE) {
//          echo "<span class='success-message'>Account created successfully. Now, we will be heading you to fill up some common personal details so that it will be easier to remember you. <a href='photographer_details.php'>Click here</a>.</span>";
//     } else {
//         echo "Error creating account: " . $conn->error;
//     }
// }
?>
<html>
    <div class="container">
<?php

// Database connection (you need to configure your database connection)

// Retrieve form data



// Close database connection
$conn->close();
?>
</div>


    <style>
         body{
    /* width: 100%; */
            height: 400px;
            background-color:#848871;
            /* background-image: url('images/background8.jpg');  */
       
  }
        /* Container */
   
   
        /* Container style */
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
          
        }

        /* Success message style */
        .success-message {
            color: #28a745;
            font-size: 25px;
            margin-bottom: 20px;

        }

        /* Error message style */
        .error-message {
            color: #dc3545;
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Link style */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>


</html>
