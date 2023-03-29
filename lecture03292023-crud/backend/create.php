<?php
    require_once "config.php";

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];

        $sql = "INSERT INTO users (firstname, lastname, email, password, gender, birthday) 
            values ('$firstname', '$lastname', '$email', '$password', '$gender', '$birthday')";
            
        $result = $conn->query($sql);
        
        if($result){
            echo '
            <script type="text/javascript">
                alert("Added Successfully!");
            </script>
            ';
            } else {
                echo "Error" . $sql . "<br>" . $conn->error;
            }

        $conn->close();
        header("Location: ../view.php");

    }