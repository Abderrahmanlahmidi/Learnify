<?php require "../view/partials/header.php"?>
 <div class="flex-1 bg-gray-100 p-8">
  <div class="p-8">
      <h2 class="text-2xl font-bold mb-4">Courses Table</h2>
      <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
          <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">ID</th>
            <th class="border border-gray-300 px-4 py-2">titre</th>
            <th class="border border-gray-300 px-4 py-2">course</th>
            <th class="border border-gray-300 px-4 py-2">categorie</th>
            <th class="border border-gray-300 px-4 py-2">tags</th>
            <th class="border border-gray-300 px-4 py-2">enseignant</th>
            <th class="border border-gray-300 px-4 py-2">action</th>
          </tr>
        </thead>
          <?php if (!empty($courses)) { ?>
            <?php foreach($courses as $course){ ?> 
             <tr class="hover:bg-gray-100">
               <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $course['id'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $course['titre'];?></td>
               <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $course['description_course'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $course['categorie'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $course['tags'];?></td>
               <td class="border border-gray-300 px-4 py-2"><?php echo $course['enseignant'];?></td>
               <td class="border flex justify-center  border-gray-300 px-4 py-2 text-center">
               <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
               <form action="" method="POST">
                 <button type="submit" name="deleteInfo" value="<?= $course["id"] ?>"  class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-2">Delete</button>
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
