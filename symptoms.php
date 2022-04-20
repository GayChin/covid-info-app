<?php
if (isset($_POST['check-result'])) {
    header('Location: results.php');
}; ?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<section class="symptoms">
    <div class="symptoms-title">
        <p>COVID-19 Assessment Form</p>
        <p class="symptoms-title-2">Complete the form to find out if you are showing COVID-19 Symptoms </p>
    </div>

    <form action="results.php" class="symptoms-form" method="POST">
        <!-- radio button section -->

        <!-- q1 -->
        <div class="form-group">
            <p id="quest">1. Did you face difficulty in breathing in these 3 recent days more than 1 time?</p>
            <label for="">
                <input type="radio" name="rq1" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq1" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q2 -->
        <div class="form-group">
            <p id="quest">2. Did you face a problem where you can’t speak or move suddenly these 3 recent days? (Not
                applicable if you just have other accidents like vehicle accidents)</p>
            <label for="">
                <input type="radio" name="rq2" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq2" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q3 -->
        <div class="form-group">
            <p id="quest">3. Did you feel ongoing chest pain during these 3 recent days?</p>
            <label for="">
                <input type="radio" name="rq3" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq3" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q4 -->
        <div class="form-group">
            <p id="quest">4. Can you keep yourself awake during these 3 recent days, in other words, did you face a
                problem keeping yourself in the awake and sane condition these 3 recent days? (Not applicable if you
                have hypersomnia)</p>
            <label for="">
                <input type="radio" name="rq4" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq4" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q5 -->
        <div class="form-group">
            <p id="quest">5. Did your face or skin have pale, blue, or grayish apparent these last 3 days?</p>
            <label for="">
                <input type="radio" name="rq5" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq5" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q6 -->
        <div class="form-group">
            <p id="quest">6. Did you have a continuous fever of 38 degrees Celsius or above at least 1 day during these
                recent 3 days?</p>
            <label for="">
                <input type="radio" name="rq6" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="rq6" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q7 -->
        <div class="form-group">
            <p id="quest">7. Have you had a fever these last 3 days? (Not to be confused with question 6)</p>
            <label for="">
                <input type="radio" name="yq1" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq1" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q8 -->
        <div class="form-group">
            <p id="quest">8. Have you been coughing frequently this last 1 week?
            </p>
            <label for="">
                <input type="radio" name="yq2" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq2" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q9 -->
        <div class="form-group">
            <p id="quest">9. Did you feel tired frequently this last 1 week?
                recent 3 days?</p>
            <label for="">
                <input type="radio" name="yq3" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq3" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q10 -->
        <div class="form-group">
            <p id="quest">10. Did you lose your taste or/ and smell these recent 3 days?
                recent 3 days?</p>
            <label for="">
                <input type="radio" name="yq4" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq4" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q11 -->
        <div class="form-group">
            <p id="quest">11. Did you have a runny nose during the last 3 recent days?
                recent 3 days?</p>
            <label for="">
                <input type="radio" name="yq5" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq5" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q12 -->
        <div class="form-group">
            <p id="quest">12. Have you noticed that your throat was sore this last 1 week?</p>
            <label for="">
                <input type="radio" name="yq6" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq6" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q13 -->
        <div class="form-group">
            <p id="quest">13. Did you experience a headache more than 1 time these 3 recent days?</p>
            <label for="">
                <input type="radio" name="yq7" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="yq7" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- q14 -->
        <div class="form-group">
            <p id="quest">14. Did you have any neurological symptoms, for example muscle weakness or dizziness in these
                3 recent days?</p>
            <label for="">
                <input type="radio" name="bq1" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq1" value="no" class="inputRadio"> No
            </label>
        </div>
        <!-- q15 -->
        <div class="form-group">
            <p id="quest">15. Did you face any digestive problems like nausea, vomit, or diarrhea in the last 3 days?
                (Not applicable if you are diagnosed with food poisoning)</p>
            <label for="">
                <input type="radio" name="bq2" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq2" value="no" class="inputRadio"> No
            </label>
        </div>
        <!-- q16 -->
        <div class="form-group">
            <p id="quest">16. Did you face any skin problems like rash, hives, or chickenpox-like lesions these recent 3
                days? (Not applicable if you have these symptoms a long time ago or you had an allergic) </p>
            <label for="">
                <input type="radio" name="bq3" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq3" value="no" class="inputRadio"> No
            </label>
        </div>
        <!-- q17 -->
        <div class="form-group">
            <p id="quest">17. Did your eye maintain a red or irritated condition in the last 3 days? </p>
            <label for="">
                <input type="radio" name="bq4" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq4" value="no" class="inputRadio"> No
            </label>
        </div>
        <!-- q18 -->
        <div class="form-group">
            <p id="quest">18. Did you face any abnormal cardiovascular or blood clotting issues these last 3 days? (Not
                applicable if your amount of platelets has been diagnosed to be over or under average if you have
                treatment like cancer treatment or were born with this problem)?</p>
            <label for="">
                <input type="radio" name="bq5" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq5" value="no" class="inputRadio"> No
            </label>
        </div>
        <!-- q19 -->
        <div class="form-group">
            <p id="quest">19. Have you been diagnosed with happy hypoxia in the last 1 week? (Happy hypoxia is a
                condition where the patient has dangerously low levels of oxygen in the blood, that should cause reduced
                consciousness BUT the patient did not show any symptoms related to reduced consciousness)</p>
            <label for="">
                <input type="radio" name="bq6" value="yes" class="inputRadio" checked> Yes
            </label>
            <label for="">
                <input type="radio" name="bq6" value="no" class="inputRadio"> No
            </label>
        </div>

        <!-- end of radio button -->

        <input class="submit-btn" name="check-result" type="submit">
    </form>


</section>

<?php include('templates/footer.php'); ?>

</html>