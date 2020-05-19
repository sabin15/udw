<?php
            include ('db_connect.php');
            $load_unit_query = "SELECT * FROM unit";
            $result = mysqli_query($conn, $load_unit_query);
            while($row = mysqli_fetch_assoc($result)) {
              echo '<option name="unit" value="'.$row["code"].'">'.$row["code"].' '.$row["name"].'</option>';          
            }
?>