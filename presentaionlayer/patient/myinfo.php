<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Patient</title>
    <!-- bootstrap links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- bootstrap links end -->
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
</head>

<header>



</header>

<body>
    <div class="headerP"
        style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
        <h2>My Information</h2>
    </div>



    <form method="post" action="myinfo.php" class="infoP"
        style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">






        <div class="contentP" style="font-weight: bold;">


            <label>ID: <?php echo "" .$_SESSION['UserID'];?></label>
            <br>
            <br>
            <label> Email : <?php echo $col['Email']; ?></label>
            <br>
            <br>
            <label> Name : <?php echo $col['Name']; ?></label>
            <br>
            <br>
            <label> Address : <?php echo $col['Address']; ?></label>
            <br>
            <br>
            <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
            <br>
            <br>
            <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
            <br>
            <br>

            <div class="input-group">
                <button type="submit" name="treatmentHistory" class="btn">My-Treatment-History</button>
            </div>
        </div>
    </form>

    <?php  if (isset($_POST['treatmentHistory'])) {
			 ?>

    <table class="table">
        <caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment
            History</caption>
        <thead>
            <tr>
            <th>DoctoooorID</th>
            <th>DoctorName</th>
            <th>Treatment</th>
            <th>Doctor's Note</th>
            </tr>
        </thead>

        <tbody>
            <?php

$PID =$mysqli -> real_escape_string($_POST['UserID']);

$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
$resultP2=$mysqli->query($sqlP2);
if(mysqli_num_rows($resultP2)>1){
    while ($rowP2=$resultP2->fetch_assoc()) {

        echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
    }


    echo "</table>";



}
}
?>
        </tbody>


    </table>

</body>

</html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
<!-- welcome message for the logged in user -->