<?php
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$lastSegment = basename(parse_url($url, PHP_URL_PATH));
$lastSegment = str_replace(".", "-", $lastSegment)
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 INFO</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/119ad7d56b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"> </script>
</head>
<link rel="stylesheet" href="css/styles.css">


<body class="<?php echo $lastSegment ?>">
    <nav>
        <ul>
            <li class="burger"><a href="#" style="text-decoration: none"><i class="fa-solid fa-bars"></i></a>
            </li>
            <li class="logo">
                <div>COVID-19</div>
                <div>INFORMATION & RESOURCES</div>
            </li>
            <li class="spacer">
                &nbsp;
            </li>
            <li class="items" id="home"><a href="index.php">Home</a></li>
            <li class="items" id="symptoms"><a href="symptoms.php">Symptoms</a></li>
            <li class="items" id="steps"><a href="steps.php">Precaution</a></li>
            <li class="items" id="vaccination"> <a href="vaccination.php">Vaccination</a></li>
            <li class="items" id="faq"><a href="faq.php">FAQ</a></li>

            </li>
        </ul>
    </nav>