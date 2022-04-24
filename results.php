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
    $seriousness = "danger";
} else if ($redSymptoms == 1 || $yellowSymptoms == 3  || $yellowSymptoms == 4 || $blueSymptoms == 1 || $blueSymptoms == 2) {
    $seriousness = "serious";
} else if ($yellowSymptoms < 3) {
    $seriousness = "normal";
}

// echo $redSymptoms;
// echo $yellowSymptoms;
// echo $blueSymptoms;
// echo $seriousness;

?>
<!DOCTYPE html>
<html lang="en">



<?php include('templates/header.php'); ?>

<section class="results">
    <div class="results-title" style="margin-top: 0px">
        Result
    </div>
    <div class="<?php echo "reveal " . $seriousness; ?>">
        <div class="reveal-left">
            <?php if ($seriousness == "danger") : ?>
            <i class="fa-solid fa-triangle-exclamation"></i>
            <?php elseif ($seriousness == "serious") : ?>
            <i class="fa-solid fa-circle-exclamation"></i>
            <?php else :; ?>
            <i class="fa-solid fa-square-check"></i>
            <?php endif; ?>
        </div>
        <div class="reveal-right">
            <?php
            echo "You are showing " . $seriousness .  " COVID-19 symptoms."
            ?>
            <br>
            <?php if ($seriousness == "danger") : ?>
            <div>
                Please seek medical help immediately.
            </div>
            <?php elseif ($seriousness == "serious") : ?>
            <div>
                You are advised to seek a doctor and if can’t,
                strongly advised to self-quarantine immediately and check for symptoms
                with self-testing as well
            </div>
            <?php else :; ?>
            <div>
                You could buy a test kit for self-testing.
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- example of symptoms -->
<div class="steps" style="padding-top:0px">
    <div class="results-title">
        Serious COVID-19 Symptoms
    </div>
    <div class="steps-content" style="border-color:#EC1C24">
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s1.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Difficulty in breathing/ Shortness of breath</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s2.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Loss of speech/ mobility</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s3.jpg" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Ongoing chest pain</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s4.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Inability to stay awake or wake up</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s5.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Pale, blue, or grayish looking skin or lips </div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s6.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>
                    Continuous fever with 38 degrees Celsius or aboves
                </div>
            </div>
        </div>
    </div>

    <div class="results-title">
        Common COVID-19 Symptoms
    </div>
    <div class="steps-content" style="border-color:#f3eb7e">
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s7.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Fever</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s8.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Cough</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s9.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Tiredness/ Fatigue</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s10.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Loss of taste or/and smell</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s11.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Runny nose</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s12.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Sore throat</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s13.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Headache</div>
            </div>
        </div>
    </div>

    <div class="results-title">
        Less common COVID-19 Symptoms
    </div>
    <div class="steps-content" style="border-color:#0071F3">
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s14.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Neurological symptoms: delirium, dizziness, muscle weakness</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s15.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Digestive problem: nausea, vomit, diarrhea</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s16.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Skin problem: rash, hives, chickenpox-like lesions</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s17.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Red or irritated eyes</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s18.png" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>Cardiovascular and blood clotting issues</div>
            </div>
        </div>
        <div class="steps-content-item">
            <div class="steps-left">
                <img src="img/s19.jpg" class="symptom-img">
            </div>
            <div class="steps-right">
                <div>
                    Happy hypoxia - dangerously low levels of oxygen in the blood that should cause reduced
                    consciousness BUT the patient did not face the problem
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('templates/footer.php'); ?>

</html>