<?php include ('bookserver.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style5.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
</head>

<header>


    <nav class="navbar navbar-expand-md navbar-light " style="background-color: #00e0ff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../resourses/myclinic.png" alt="" width="30" height="24">MyClinic
                <small>/AdminLogin</small></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Doctorpatient.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">For Patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login2.php">For Doctors</a>
                    </li>

                </ul>

                <div class="position-relative" data-toggle="buttons"><a href="login3.php">
                        <button type="button" class="btn btn-secondary  btn-sm">Admin</button></a>

                </div>

            </div>

        </div>
    </nav>


    <h1>Doctor<span>Patient</span></h1>
    <nav>




        <ul>


            <li><a href="index3.php">Add/Delete Doctor</a></li>
            <li><a href="viewdoctor.php">View Doctors</a></li>
            <li><a href=" viewpatients.php">View Patients</a></li>
            <li><a href="viewappointments.php">View Appointments</a></li>
            <li><a href="searchdonoradmin.php">Search Donor</a></li>
            <li><a href="feedback.php">FeedBack</a></li>

            <li><a href="Doctorpatient.php">Logout</a></li>








        </ul>




    </nav>




</header>

<body>















    <div class="headerA">
        <h2>Add Doctor</h2>
    </div>

    <form method="post" action="index3.php">

        <?php include ('errors.php'); ?>

        <div class="input-groupA">
            <label>Doctor ID</label>
            <input type="text" name="addID">

        </div>


        <div class="input-groupA">
            <label>Doctor Name</label>
            <input type="text" name="addname">


        </div>

        <div class="input-groupA">
            <label>Address</label>
            <input type="text" name="addAddress">

        </div>

        <div class="input-groupA">
            <label>Contact Number</label>
            <input type="text" name="addContactNumber">


        </div>


        <div class="input-groupA">
            <label>Email address</label>
            <input type="text" name="addEmail">

        </div>

        <div class="input-groupA">
            <label>Password</label>
            <input type="text" name="addpassword">

        </div>
        <div class="input-groupA">
            <label>Category</label>
            <select name="addcategory" class="xd">
                <option value="bone">bones</option>
                <option value="heart">heart</option>
                <option value="Dentistry">Dentistry</option>
                <option value="MentalHealth">Mental Health</option>
                <option value="Surgery">Surgery</option>




            </select>
        </div>

        <div class="input-groupA">
            <button type="submit" name="Add" class="btnA">Add Doctor</button>
        </div>







    </form>
    <div class="headerAD">
        <h2>Delete Doctor</h2>
    </div>

    <form method="post" action="index3.php" class="delete">

        <div class="input-groupA">
            <label>Doctor ID</label>
            <input type="text" name="deleteID">

        </div>

        <div class="input-groupA">
            <button type="submit" name="Delete" class="btnA">Delete</button>
        </div>

    </form>






</body>

</html>