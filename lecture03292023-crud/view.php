<?php
    require_once "./backend/read.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's List</title>
</head>
<body>
    <div class="container">
        <h1>Student's List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['birthday']; ?></td>
                        <!-- <td>
                            <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="./backend/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td> -->
                    </tr>
                <?php 
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
