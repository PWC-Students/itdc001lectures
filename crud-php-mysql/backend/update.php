<?php
require_once "config.php";

if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET 
            firstname = '$firstname',
            lastname = '$lastname',
            email = '$email',
            gender = '$gender',
            birthday = '$birthday',
            password = '$password'
            WHERE id = '$user_id'";

    $result = $conn->query($sql);

    if($result){
        echo '
        <script type="text/javascript">
            alert("Updated Successfully!");
        </script>
        ';
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../view.php");
}
?>