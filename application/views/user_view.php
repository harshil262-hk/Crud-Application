<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>testing</title>

</head>
<body>
    <table border="3">
        
    <tr> 
        
            <th> User Id </th>
            <th>  USername </th>
            <th>  company  </th>
              
    </tr>
    <?php 
        foreach($userArray as $key => $value)
        {
            echo "<tr>
                  <td>".$value['id']."</td>
                  <td>".$value['username']."</td>
                  <td>".$value['company']."</td>
                  </tr>";       

        }
        ?>

    </table>

</body>
</html>


<?php

?>


