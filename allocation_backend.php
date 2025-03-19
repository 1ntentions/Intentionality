<?php
session_start();
include('db.php');

if (isset($_POST['allocationSubmit'])) {
    //Variable initialization
    $needsPrcnt = $_POST["needsPrcnt"];
    $savingsPrcnt = $_POST["savingsPrcnt"];
    $investPrcnt = $_POST["investPrcnt"];
    $wantsPrcnt = $_POST["wantsPrcnt"];
    $username = $_SESSION['user'];

    //Checks if the percentages' sum is not 100 and if any percentages are negative
    if($needsPrcnt + $savingsPrcnt + $investPrcnt + $wantsPrcnt != 100){
        header("Location: allocation.php?error=Percentages must add up to 100");
        exit();
    }
    else if($needsPrcnt < 0 || $savingsPrcnt < 0 || $investPrcnt < 0 || $wantsPrcnt < 0){
        header("Location: allocation.php?error=Percentages must not be negative");
        exit();
    }
    else{
        //Adds the new budget percentages to the database and updates session variables
        $stmt = $pdo->prepare("UPDATE users SET `needs%` = '$needsPrcnt', `savings%` = '$savingsPrcnt', 
        `invest%` = '$investPrcnt', `wants%` = '$wantsPrcnt' WHERE user = '$username'");
	    $stmt->execute();
        $_SESSION['needsPercent'] = $needsPrcnt;
        $_SESSION['savingsPercent'] = $savingsPrcnt;
        $_SESSION['investPercent'] = $investPrcnt;
        $_SESSION['wantsPercent'] = $wantsPrcnt;
        header("Location: allocation.php?success=Budget allocation successfully updated");
        exit();
    }

}
else{
    header("Location: allocation.php");
    exit();
} ?>