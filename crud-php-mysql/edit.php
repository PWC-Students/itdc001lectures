<?php
    require_once "./backend/update.php";
?>

<?php
    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "SELECT * FROM users WHERE id=$user_id";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
                $birthday = $row['birthday'];
            }
        ?>
            <h2>Edit Form</h2>
                <form action="./backend/update.php" method="POST">
                    <fieldset>
                        <legend>User Details</legend>
                        <input type="number" name="id" value="<?php echo $id; ?>" hidden> 
                        
                        <label for="firstname">First Name: </label><br>
                        <input type="text" name="firstname" value="<?php echo $firstname; ?>" required>   
                        <br>
                        <label for="lastname">Last Name: </label><br>
                        <input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
                        <br>
                        <label for="email">Email: </label><br>
                        <input type="email" name="email" value="<?php echo $email; ?>" required>
                        <br>
                        <label for="password">Password: </label><br>
                        <input type="password" name="password" value="<?php echo $password; ?>" required>
                        <br>
                        <label for="gender">Gender: </label><br>
                        <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){echo "checked";} ?> required>Male
                        <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){echo "checked";} ?> required>Female
                        <br>
                        <label for="birthday">Birthday: </label><br>
                        <input type="date" name="birthday" value="<?php echo date('Y-m-d', strtotime($birthday)); ?>" required>
                        <br>
                        <input type="submit" name="update" value="update">
                    </fieldset>
                </form>
        <?php
        } else {
            header('Location: view.php');
        }
    }
    ?>



