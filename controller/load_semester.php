<?php
            include ('db_connect.php');
            $load_unit_query = "SELECT * FROM semester";
            $result = mysqli_query($conn, $load_unit_query);
            while($row = mysqli_fetch_assoc($result)) {
              echo '<option name="semester" value="'.$row["id"].'">'.$row["name"].'</option>';          
            }
?>