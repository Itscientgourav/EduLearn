<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Student List</h1>
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
        <a href="<?php echo site_url('students/create'); ?>" class="btn btn-primary mb-3">Add Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student->student_id; ?></td>
                    <td><?php echo $student->first_name; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->age; ?></td>
                    <td>
                        <a href="<?php echo site_url('students/edit/'.$student->student_id); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('students/delete/'.$student->student_id); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
