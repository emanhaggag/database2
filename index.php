<?php 
$page_title = 'All student';
$css_file = 'style.css';
require_once('./init.php');

 global $con;
$stmt = $con -> parpare('SELECT * FORM $table ');
$stmt -> excute();
$students = $stmt -> fetchAll();

?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">faculty</th>
      <th scope="col">Department</th>
      <th scope="col">gpa</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($students as $student){ ?>
    <tr>
      <td><?php echo $student['id']?></td>
      <td><?php echo $student['name']?></td>
      <td><?php echo $student['email']?></td>
      <td><?php //echo $student['phone']?></td>
      <td><?php echo $student['dep']?></td>
      <td><?php echo $student['gpa']?></td>
      <td><a class="btn btn-danger" href="delete.php?emp_id=<?php echo $student['id']?>">Delete</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>


<a href="add_student.php">Add student</a>



<?php 
include_once('./includes/template/footer.php');


  ?>