<?php
$redSymptoms = 0;
$yellowSymptoms = 0;
$blueSymptoms = 0;
$i = 1;
$seriousness = "";

foreach ($_POST as $key => $value) {
    if (1 <= $i && $i <= 6) {
        if ($value == "yes") {
            $redSymptoms += 1;
        }
    } else if (7 <= $i && $i <= 13) {
        if ($value == "yes") {
            $yellowSymptoms += 1;
        }
    } else if (14 <= $i && $i <= 19) {
        if ($value == "yes") {
            $blueSymptoms += 1;
        }
    }
    $i += 1;
}

if ($redSymptoms >= 2 || $yellowSymptoms >= 5 || $blueSymptoms >= 3) {
    $seriousness = "Danger";
} else if ($redSymptoms == 1 || $yellowSymptoms == 3  || $yellowSymptoms == 4 || $blueSymptoms == 1 || $blueSymptoms == 2) {
    $seriousness = "Serious";
} else if ($yellowSymptoms < 3) {
    $seriousness = "Normal";
}

echo $redSymptoms;
echo $yellowSymptoms;
echo $blueSymptoms;
echo $seriousness;

?>
<!DOCTYPE html>
<html lang="en">



<?php include('templates/header.php'); ?>


<?php include('templates/footer.php'); ?>

</html>