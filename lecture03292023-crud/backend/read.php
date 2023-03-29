<?php
    require "config.php";

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
