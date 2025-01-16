<?php

$userAllData = new userController();
$users = $userAllData -> getAllUsersController();

// echo "<pre>";
// print_r($users);
// echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userAllData -> deleteUserController($_POST['deleteInfo']);
}


?>

<!-- Main Content -->
 <div class="flex-1 bg-gray-100 p-8">
  <div class="p-8">
      <h2 class="text-2xl font-bold mb-4">User Table</h2>
      <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
          <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">Name</th>
            <th class="border border-gray-300 px-4 py-2">Age</th>
            <th class="border border-gray-300 px-4 py-2">Email</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Row -->
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 px-4 py-2 text-center">1</td>
            <td class="border border-gray-300 px-4 py-2">John Doe</td>
            <td class="border border-gray-300 px-4 py-2 text-center">30</td>
            <td class="border border-gray-300 px-4 py-2">johndoe@example.com</td>
            <td class="border border-gray-300 px-4 py-2 text-center">
              <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
              <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-2">Delete</button>
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
  </div>
</div>            














