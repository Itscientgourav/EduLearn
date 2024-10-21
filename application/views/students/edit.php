<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Student : <?php echo $student->first_name; ?></h1>
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
        <a href="<?php echo site_url('students'); ?>" class="btn btn-danger mb-3">Back</a>
        <form action="<?php echo site_url('students/update/'.$student->student_id); ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $student->first_name; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $student->email; ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" value="<?php echo $student->age; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update Student</button>
        </form>
    </div>
</body>
</html>
