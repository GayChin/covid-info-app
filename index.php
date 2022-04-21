<!DOCTYPE html>
<html lang="en">



<?php include('templates/header.php'); ?>
<section class="home">
    <section class="home-section-1">
        <div class="home-section-1-left">
            <div class="home-title">
                Covid-19 Information Page
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/green-bg.png" class="d-block w-100" alt="img/green-bg.png">
                        <div class="carousel-caption d-md-block">
                            <h5><Strong>Definition</Strong></h5>
                            <p style="text-align:justify;">Covid-19 is the disease caused by a coronavirus, also known
                                as SARS-CoV-2
                                It has caused millions of deaths around the world, as well as lasting health problems in
                                some who have survived the illness
                                It is common in different animals but rarely an animal coronavirus, can infect humans
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/green-bg.png" class="d-block w-100" alt="img/green-bg.png">
                        <div class="carousel-caption d-md-block">
                            <h5><Strong>How did the virus start?</Strong></h5>
                            <p style="text-align:justify;">The first case reported on 1 Dec 2019
                                Originated in an animal and mutated, thus causing illness in humans
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/green-bg.png" class="d-block w-100" alt="img/green-bg.png">
                        <div class="carousel-caption d-md-block">
                            <h5><Strong>Why is it called coronavirus?</Strong></h5>
                            <p style="text-align:justify;">“Corona” means crown
                                The virus’ outer layers are covered with spike proteins that surround them like a crown
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/green-bg.png" class="d-block w-100" alt="img/green-bg.png">
                        <div class="carousel-caption d-md-block">
                            <h5><Strong>How does it spread?</Strong></h5>
                            <p style="text-align:justify;">Through droplets and virus particles when an infected person
                                breathes, talks, coughs, or
                                sneezes
                                Tiny infectious particles can linger in the air and accumulate in indoor places
                                Transmission rate increases especially when many people gather and there is poor
                                ventilation
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="home-section-1-right">
            <img src="img/covid.svg" class="home-photo" alt="">
        </div>
    </section>

    <section class="home-section-2">
        <div class="home-title" style="color:white">
            What is Covid-19?
        </div>
        <iframe class="vid" src="https://www.youtube.com/embed/D9tTi-CDjDU" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </section>

    <section class="home-section-3">
        <div class="home-title-2">
            COVID-19 Variant
        </div>
        <div class="flip-card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="c1 flip-card-front">
                        <i id="c1" class="fa-solid fa-virus-covid"></i>
                        <div>Lambda</div>
                    </div>
                    <div class="c1 flip-card-back">
                        <ul>
                            <li>First detected in Peru in August 2020</li>
                            <li>7 mutations in the virus’ spike protein</li>
                            <li> According to Public Health England, data did not show lambda variant reduce vaccine
                                effectiveness</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="c2 flip-card-front">
                        <i class="fa-solid fa-virus-covid"></i>
                        <div>Beta</div>
                    </div>
                    <div class="c2 flip-card-back">
                        <ul>
                            <li>First detected in South Africa in October 2020
                            </li>
                            <li>8 distinct mutations that affect how virus bind to the cell</li>
                            <li> 50% more transmissible than the original strain of coronavirus
                            </li>
                            <li> Caused higher risk of death than coronavirus</li>
                            <li>Pfizer had 75% efficacy against beta which is lower than the coronavirus with 95%
                                efficacy
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="c3 flip-card-front">
                        <i class="fa-solid fa-virus-covid"></i>
                        <div>Alpha</div>
                    </div>
                    <div class="c3 flip-card-back">
                        <ul>
                            <li>First detected in UK in September 2020</li>
                            <li>23 mutations</li>
                            <li> 50% more transmissible than the original strain of coronavirus</li>
                            <li>Pfizer and green-bg vaccines are effective in preventing Alpha
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="c4 flip-card-front">
                        <i class="fa-solid fa-virus-covid"></i>
                        <div>Delta</div>
                    </div>
                    <div class="c4 flip-card-back">
                        <ul>
                            <li>First detected in India in October 2020
                            </li>
                            <li>Became dominant variant in the summer of 2021 but was replaced by Omicron in
                                mid-December 2021
                            </li>
                            <li> Delta is 60% more transmissible than Alpha
                            </li>
                            <li>Replace Alpha variant as the dominant strain</li>
                            <li>Pfizer, green-bg and Johnson&Johnson are protective against hospitalization and able to
                                neutralize the variant.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="c5 flip-card-front">
                        <i class="fa-solid fa-virus-covid"></i>
                        <div>Omicron</div>
                    </div>
                    <div class="c5 flip-card-back">
                        <ul>
                            <li>First detected in South Africa and is highly mutated and contagious
                            </li>
                            <li>Became a dominant coronavirus variant in December 2021
                            </li>
                            <li> More than 30 mutations in genes that cause it to be more transmissible and partially
                                evade vaccines

                            </li>
                            <li>Scientists expected that vaccines would be less effective against omicron</li>
                            <li>A booster dose provided 90% protection against hospitalization with omicron</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

</section>
<?php include('templates/footer.php'); ?>

</html>