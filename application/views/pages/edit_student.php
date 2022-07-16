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
	<h3><a href="<?php echo base_url(); ?>">Dashboard</a></h3>
	<form method="POST" action="<?php echo base_url();?>update-student">
	  <div class="mb-3">
	    <label for="studentName" class="form-label">Student Naame</label>
	    <input type="text" value="<?php echo $info_by_id->student_name; ?>" name="student_name" class="form-control" id="studentName">
	  </div>
	  <div class="mb-3">
	    <label for="studentPhone" class="form-label">Student Phone</label>
	    <input type="text" value="<?php echo $info_by_id->student_phone; ?>" name="student_phone" class="form-control" id="studentPhone">
	  </div>
	  <div class="mb-3">
	    <label for="studentRoll" class="form-label">Student Roll</label>
	    <input type="number" value="<?php echo $info_by_id->student_roll; ?>" name="student_roll" class="form-control" id="studentRoll">
	  </div>
	  <div class="mb-3">
	    <input type="hidden" value="<?php echo $info_by_id->student_id; ?>" name="student_id" class="form-control" id="studentId">
	  </div>
	  <button type="submit" class="btn btn-primary">Update Student</button>
	</form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
