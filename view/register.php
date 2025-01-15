<?php


require "../controllers/userController.php";

$userAllData = new userController();

$users = $userAllData -> getAllUsersController();




echo "<pre>";
print_r($users);
echo "</pre>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];

 // $userAllData -> createUserController($name, $email, $age, $password);
 
}
   

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Simple Form</h2>
    <form action="index.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="0" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
