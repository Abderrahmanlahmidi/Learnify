<?php require "../view/partials/header.php"?>
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
            <th class="border border-gray-300 px-4 py-2">Role</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($users)) { ?>
            <?php foreach($users as $user){ ?>
             <tr class="hover:bg-gray-100">
               <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $user['id'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $user['nom'];?></td>
               <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $user['age'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $user['email'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $user['role_name'];?></td>
               <td class="border flex justify-center  border-gray-300 px-4 py-2 text-center">
               <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
               <form action="" method="POST">
                 <button type="submit" name="deleteInfo" value="<?= $user["id"] ?>"  class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-2">Delete</button>
               </form>
              </td>
             </tr>
           <?php };?>
          <?php };?>
        </tbody>
      </table>
  </div>
</div>            
<?php require "../view/partials/footer.php" ?>













