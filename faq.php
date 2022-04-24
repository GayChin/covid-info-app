<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$pw = $_ENV['EMAIL_PASSWORD'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
echo $pw;


$errors = ['name' => '', 'email' => '', 'enquiry' => ''];
$email = "";
$enquiry = "";
$name = "";
$tempname = "";
$subject = "COVID-19 Enquiries";
$message_sent = false;

if (isset($_POST['send-email'])) {

    if (empty($_POST['email'])) {
        $errors["email"] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] =  "Email must be a valid email address <br />";
        }
    }

    if (empty($_POST['name'])) {
        $errors["name"] = 'Name must not be empty <br />';
    } else {
        $name = $_POST['name'];
        $tempname = $name;
    }

    if (empty($_POST['enquiry'])) {
        $errors["enquiry"] = 'Enquiry must not be empty <br />';
    } else {
        $enquiry = $_POST['enquiry'];
    }

    // If there is no errors in the form, redirect to homepage
    if (!array_filter($errors)) {
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'gcyap1227@gmail.com';                     //SMTP username
            $mail->Password   = $pw;                                    //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('gcyap1227@gmail.com', 'Gay Chin');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "From : " . $email . "<br/>" . $enquiry;
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $email = "";
        $enquiry = "";
        $name = "";
        $message_sent = true;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

<section class="faq">
    <div class="faq-title">Frequently Asked Questions</div>
    <div class="accordion">
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question1">
            <label for="question1" class="accordion_label">Can pregnant women take vaccines?</label>
            <div class="accordion_content">
                Yes. Covid-19 vaccination and booster dose are recommended for people who are pregnant, breastfeeding or
                trying to get pregnant. By getting a vaccination, it can help to protect you from getting very sick from
                Covid-19 but it will not prevent you from being diagnosed with Covid-19. There is currently no evidence
                that Covid-19 vaccines have caused fertility problems in men or women.
                <div><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/recommendations/pregnancy.html"
                        target="_blank">Click
                        Here For More Information</a></div>
            </div>
        </div>
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question2">
            <label for="question2" class="accordion_label">Who should not take the vaccines?</label>
            <div class="accordion_content">
                Yes. Covid-19 vaccination and booster dose are recommended for people who are pregnant, breastfeeding or
                trying to get pregnant. By getting a vaccination, it can help to protect you from getting very sick from
                Covid-19 but it will not prevent you from being diagnosed with Covid-19. There is currently no evidence
                that Covid-19 vaccines have caused fertility problems in men or women.
                <div>
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/covid-19-vaccines/advice"
                        target="_blank">Click
                        Here For More Information</a>
                </div>

            </div>
        </div>
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question3">
            <label for="question3" class="accordion_label">Is vaccination recommended for children and
                adolescents?</label>
            <div class="accordion_content">
                Yes. Covid-19 vaccination is safe for those aged 5 and above with an adjustment in the recommended
                dosage.
                <div>
                    <a href="https://www.who.int/news-room/feature-stories/detail/who-can-take-the-pfizer-biontech-covid-19--vaccine-what-you-need-to-know#:~:text=Who%20should%20not%20take%20the,for%20those%20aged%205%2D11."
                        target="_blank">Click
                        Here For More Information</a>
                </div>
            </div>
        </div>
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question4">
            <label for="question4" class="accordion_label">What is the post Covid-19 condition?</label>
            <div class="accordion_content">
                Some people who have fully recovered from Covid-19 experience a variety of mid- and long-term effects
                usually within three months from the onset of Covid-19. The symptoms are similar to the Covid-19
                symptoms which include fatigue, shortness of breath, chest pain, depression and many more that will
                affect a person’s ability to perform daily activities. These symptoms might persist from their initial
                illness or develop after their recovery. They can come and go or relapse over time.
                <div>
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-(covid-19)-post-covid-19-condition"
                        target="_blank">Click
                        Here For More Information</a>
                </div>
            </div>
        </div>
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question5">
            <label for="question5" class="accordion_label">Is Covid-19 and Influenza similar?
            </label>
            <div class="accordion_content">
                COVID-19 and influenza (flu) are both infectious respiratory diseases, and they share some similar
                symptoms. However, they are caused by different viruses. Both COVID-19 and influenza spread in similar
                ways through droplets and aerosols when an infected person coughs, sneezes or breathes.However, the
                vaccinations for Covid-19 and Influenza are different. Vaccines developed for COVID-19 do not protect
                against influenza, and similarly, the flu vaccine does not protect against COVID-19.
                <div>
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19-similarities-and-differences-with-influenza"
                        target="_blank">Click
                        Here For More Information</a>
                </div>
            </div>
        </div>
        <div>
            <input class="accordion_input" type="checkbox" name="q1" id="question6">
            <label for="question6" class="accordion_label">Should we wear a mask at school or when playing sports?
            </label>
            <div class="accordion_content">
                We should not wear a mask when playing sports or doing physical activities as it will compromise your
                breathing. However, we have to maintain at least 1-meter distance from others and limit the number of
                friends playing together.
                Children aged 5 years and under are not required to wear a mask, for children between 6 and 11 years of
                age, the use of masks depends on several factors which include availability of appropriate adult
                supervision and intensity of transmission in the area, whereas adolescents aged 12 years or older should
                follow the national mask guidelines for adults.

                <div>
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19-adolescents-and-youth
            " target="_blank">Click
                        Here For More Information</a>
                </div>
            </div>
        </div>

    </div>

    <div class="knowmore">
        <div class="knowmore-title">
            Want to know more? Contact us!
        </div>
        <form action="faq.php" class="faq-form" method="POST">
            <label>Name:</label>
            <input id="name" name="name" value="<?php echo $name ?>">
            <div class="red-text"><?php echo $errors['name']; ?></div>
            <label>Your email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Enquiry:</label>
            <textarea name="enquiry" id="enquiry" cols="30" rows="10"></textarea>
            <div class="red-text"><?php echo $errors['enquiry']; ?></div>
            <input class="submit-btn" name="send-email" type="submit">
            <?php if ($message_sent) : ?>
            <p><?php echo "Hi " . htmlspecialchars($tempname) . ", we will contact you shortly."; ?>
            </p>
            <?php endif; ?>


        </form>
    </div>
</section>



<?php include('templates/footer.php'); ?>

</html>