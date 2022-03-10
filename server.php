<?php   
    // Start a session
session_start();
    // Initialize variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteUser";
$errors = array();
    // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    // echo "connection successful.";
}

if(isset($_POST['firstname'])){
        /**Register the User */
echo $firstname = $_POST['firstname'];
echo $email = $_POST['email'];
echo $username = $_POST['username'];
echo $password_1 = $_POST['password'];
echo $password_2 = $_POST['cpassword'];
echo $lastname = $_POST['lastname'];

// $firstname = mysql_real_escape_string($conn, $_POST['firstname']);
// $lastname = mysql_real_escape_string($conn, $_POST['lastname']);
// $email = mysql_real_escape_string($conn, $_POST['email']);
// $username = mysql_real_escape_string($conn, $_POST['username']);
// $password_1 = mysql_real_escape_string($conn, $_POST['password']);
// $password_2 = mysql_real_escape_string($conn, $_POST['cpassword']);
    // Form Validation


// echo 'test world';


if(empty($firstname)){
    array_push($errors, "First Name is required!");
}
if(empty($lastname)){
    array_push($errors, "Last Name is required!");
}
if(empty($username)){
    array_push($errors, "Username is required!");
}
if(empty($email)){
    array_push($errors, "User Email is required!");
}
if($password_1 != $password_2){
    array_push($errors, "Passwords did not match! Try again.");
}

// $numErrors = $errors.length;
// if($numErrors > 0){
// echo $errors
// }else{

// }

    // Check if the a user with the same username or email already exists
$user_check_query = "SELECT * FROM Customer WHERE user_name = '$username' OR email = '$email' LIMIT 1";
$results = mysqli_query($conn, $user_check_query);
$customer = mysqli_fetch_assoc($results);
if($customer){
    if($customer['user_name'] === $username){
        array_push($errors, "Username already exists");
    }
    if($customer['email'] === $email){
        array_push($errors, "The Email is already registered on a username");
    }
}



// Register the user if no error
if(count($errors) == 0){
    //Encrypt Password
    $password = md5($password_1);
    // $password = $password_1;
    //Insert values into the table
    $insert_query = "INSERT INTO Customer (first_name, last_name, user_name, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
    // echo $insert_query;

    mysqli_query($conn, $insert_query);
    // echo 'this happens';
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Account Created Successfully";
    // echo 'the data was entered succesfuly';
    header('location: index.php');
}else{
    // echo 'there was an error <br>';
    // echo $errors[0];

    // for($i=0;$i < count($errors);$i++){
    //     // echo $errors[$i];
    // }
    // // echo '<br>';
}
}

    /**Login User */
if(isset($_POST['LogInUsername'])){
    // Form validation
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        array_push($errors, "Username is Required");
    }
    if(empty($password)){
        array_push($errors, "Password is Required");
    }
    // Search for the username in the database.
    if(count($errors) == 0){
        $password = md5($password);
        $search_query = "SELECT * FROM Customer WHERE user_name='$username' AND password='$password'";
        $result = mysqli_query($conn, $search_query);
        // echo $conn;
        
        // Login the user
        if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Logged in Successfully.";
        // echo 'Logged in';
        header('Location : index.php');
        }else{
            echo 'number of rows is zero, or less than zero';
        }
    }else{
        array_push($errors, "Wrong username or password. Please Try again!");
    }

}
        /**Create a Bank Account */

mysqli_close($conn);
?>