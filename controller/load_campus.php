<?php
            include ('db_connect.php');
            $load_unit_query = "SELECT * FROM campus";
            $result = mysqli_query($conn, $load_unit_query);
            while($row = mysqli_fetch_assoc($result)) {
              echo '<option name="campus" value="'.$row["id"].'">'.$row["name"].'</option>';          
            }
?>