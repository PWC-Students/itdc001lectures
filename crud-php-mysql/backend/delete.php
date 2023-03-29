<?php
    require_once 'config.php';

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id='$user_id'";

        $result = $conn->query($sql);

        if($result){
            echo '
                <script type="text/javascript">
                    alert("Deleted Successfully!");
                </script>
            ';
        } else {
            echo "Error:" . $sql . "<br>" .  $conn->error;
        }
        $conn->close();
    }


