<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    

<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">SN</th>
	      <th scope="col">Student Name</th>
	      <th scope="col">Student Phone</th>
	      <th scope="col">Student Roll</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($student_info as $student) { ?>
		    <tr>
		      <th scope="row"><?php echo $student->student_id; ?></th>
		      <td><?php echo $student->student_name; ?></td>
		      <td><?php echo $student->student_phone; ?></td>
		      <td><?php echo $student->student_roll; ?></td>
		      <td>
		      	<a href="<?php echo base_url();?>edit-student/<?php echo $student->student_id; ?>">Edit</a>
		      	<a href="<?php echo base_url();?>delete-student/<?php echo $student->student_id; ?>">Delete</a>
		      </td>
		    </tr>
	  	<?php } ?>
	  </tbody>
	</table>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
