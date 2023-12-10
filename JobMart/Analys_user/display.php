<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="my.css">
    <title>Job Mart</title>
</head>
<body>
    <div class="details">
        <h4>Details</h4>
        <a class="create" href="new.php">Create new</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Week</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Total Users </th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>


        <?php
        
        $sql="SELECT * FROM data";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $country=$row['country'];
                $week=$row['week'];
                $month=$row['month'];
                $year=$row['year'];
                $user=$row['user'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$country.'</td>
                <td>'.$week.'</td>
                <td>'.$month.'</td>
                <td>'.$year.'</td>
                <td>'.$user.'</td>
                <td>
                    <a class="edit" href="update.php?
                    updateid='.$id.'">Update</a>
                    <a class="delete" href="delete.php?
                    deleteid='.$id.'">Delete</a>
                </td> 
                </tr>';
                
                
            }
            
            
        }
        
        
        ?>
         </tbody>
        </table>
    </div>
</body>
</html> 

