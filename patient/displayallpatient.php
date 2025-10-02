<?php
          $conn=mysqli_connect("localhost","root","","doctorappointment");
          $query=mysqli_query($conn,"Select patientid,patientname,patientemail from patient");
         
           ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
        <tr>
            <th>PATIENTID</th>
            <th>PATIENTNAME</th>
            <th>PATIENTEMAIL</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        <?php
         if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_array($query)){
                echo "<tr>
                <td>".$row['patientid']."</td>
                <td>".$row['patientname']."</td>
                <td>".$row['patientemail']."</td>
                <td><a href='delete.php?patientid=".$row['patientid']."'>DELETE</a></td>
                <td><a href='updatepatient.php?patientid=".$row['patientid']."'>UPDATE</a></td>

                </tr>";
                
            }
         }
        ?>  
    </table>
</body>
</html>
          