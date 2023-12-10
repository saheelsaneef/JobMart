<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $country=$_POST['country'];
    $week=$_POST['week'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $user=$_POST['user'];

    $sql="INSERT INTO data(country,week,month,year,user) 
    value('$country','$week','$month','$year','$user')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo 'Data insert succesfully';
    }else{
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new.css">
    <title>Job Mart</title>
</head>
<body>
    <form method="post">
        <div class="country">
            <label for="country">Country:</label>
            <input type="text" name="country" placeholder="Country name">
        </div>
        <div class="week">
            <label for="week">Week:</label><br>
                <select id="week" name="week">
                    <option value="Week 01">Week 01</option>
                    <option value="Week 02">Week 02</option>
                    <option value="Week 03">Week 03</option>
                    <option value="Week 04">Week 04</option>
                </select>
        </div>
        <div class="month">
        <label for="month">Month:</label><br>
            <select id="month" name="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="Agust">Agust</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="year">
            <label for="year">Year:</label>
            <input type="text" name="year" placeholder="Year">
        </div>
        <div class="user">
            <label for="user">Total User:</label>
            <input type="text" name="user" placeholder="Number of users">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>