<?php

require "../controllers/userController.php";

$userAllData = new userController();
$users = $userAllData -> getAllUsersController();



// echo "<pre>";
// print_r($users);
// echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];
  $userAllData -> createUserController($name, $email, $age, $password);
}

  
?>

<div class="p-8 bg-gray-100 min-h-screen">
  <h2 class="text-2xl font-bold mb-6">Register User</h2>
  <form class="space-y-4 bg-white p-6 rounded shadow-md max-w-md mx-auto">
    <!-- Name -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
      <input 
        type="text" 
        id="name" 
        name="name" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        placeholder="Enter your name"
        required>
    </div>
    <!-- Age -->
    <div>
      <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
      <input 
        type="number" 
        id="age" 
        name="age" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        placeholder="Enter your age"
        required>
    </div>
    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input 
        type="email" 
        id="email" 
        name="email" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        placeholder="Enter your email"
        required>
    </div>
    <!-- Password -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input 
        type="password" 
        id="password" 
        name="password" 
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        placeholder="Enter your password"
        required>
    </div>
    <!-- Submit Button -->
    <div>
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Register
      </button>
    </div>
  </form>
</div>
