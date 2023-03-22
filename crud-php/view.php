<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CSV Records</title>
</head>

<style>
    html,
    body {
        text-align: center;
        font-family: 'Roboto', sans-serif;
        background-color: black;
        color: white;
        font-size: 14px;
        letter-spacing: .15em;
    }
    table, th, td {
        border: 2px solid gray;
        border-collapse: collapse;
        margin: auto;
        padding: 5px;
    }
    a {
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        background-color: black;
        color: white;
        border: 2px solid gray;
        padding: 5px;
        font-size: 10px;
    }

</style>
<body>
    <div style = "position:absolute; right:80px; top:20px;">
        Hello, <?= $_SESSION['user']?> <a style="font-size: 16px;" href="logout.php"> Logout</a>
    </div>
    <h2>Registered Users</h2>
    <div">
        <table>
                <tr>
                    <th>Photo</th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Birth Date</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                </tr>
        <?php

        function csvToArray($file){
            $fileContent = fopen($file,'r');
            while (!feof($fileContent)) {
                $array[] = fgetcsv($fileContent, 1000, ",");
            }
            fclose($fileContent);
            return $array;
        }

        $file = 'file.csv';
        $csv = csvToArray($file);
        $total_rows = count($csv);

        if (!isset($_GET['page'])) {
             $focus_page = 1;
        } else {
            $focus_page = $_GET['page'];
        }

        $num_per_page = 10;
        $start_page = ($focus_page-1) * $num_per_page;
        $total_pages = ceil($total_rows / $num_per_page);

        $current_page = (array_slice($csv,$start_page,$num_per_page));
        $count = count($current_page); 

        for ($row = 0; $row <= $count; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 7; $col++) {
                if (empty($current_page[$row][$col])) {
                    break;
                }

                $files = glob("uploads/*.*");
                for ($i = 0; $i < count($files); $i++) {
                    $image = $files[$i];
                        
                    $supported_file = array('gif','jpg','jpeg','png');

                        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                        if (in_array($ext, $supported_file)) {
                            if($current_page[$row][$col] == basename($image))
                                echo "<td>". '<img src="' . ($image) . '" alt="Random image" ,width=45px, height=45px /><br>' ."</td>";
                        }
                    }
                    echo "<td>" . $current_page[$row][$col+1] . "</td>";
                }
                echo "</tr> \n";
            }
            ?>
            </table>
            <?php 
                echo '<br>';
                if($focus_page == 1){
                    $focus_page = 1;
                }
                if($focus_page < $total_pages && $focus_page > 1){
                    echo '<a style="font-size: 16px;" href="view.php?page=' . $focus_page-1 . '">' . "Previous" . ' </a>';
                }
                for($pagination = 1; $pagination <= $total_pages; $pagination++) {
                    if($focus_page == $pagination){
                        echo '<a style="color: black; background-color: white; font-size: 16px;" href="view.php?page=' . $pagination . '">' . $pagination . ' </a>';
                        continue;
                    }
                    echo '<a href="view.php?page=' . $pagination . '">' . $pagination . ' </a>';
                }
                if($focus_page < $total_pages){
                    echo '<a style="font-size: 16px;" href="view.php?page=' . $focus_page+1 . '">' . "Next" . ' </a>';
                }else{
                    echo ' '.'End';
                }
            ?>
        </div>
</body>
</html>