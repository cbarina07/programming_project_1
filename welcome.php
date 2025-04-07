<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pup, Your Plan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <style>
        body {
            background-color: #4B0082;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            max-width: 100%;
            overflow-x: hidden;
        }

        .container {
            max-width: 100%;
            width: 100%;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .landing-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
            height: 100%;
            padding: 0;
            width: 100%;
            max-width: 100%;
        }

        .landing-content {
            width: 100%;
            max-width: 400px;
            padding: 80px 20px 0 20px;
        }

        .landing-page h1 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .landing-page p {
            color: #e0d8f0;
            margin-bottom: 30px;
            font-size: 1rem;
            line-height: 1.5;
        }

        .get-started-btn {
            background-color: #8A2BE2;
            color: white;
            border: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .get-started-btn:hover {
            background-color: #9370DB;
            color: white;
        }

        .arrow-icon {
            margin-left: 10px;
        }

        .carousel-container {
            display: none;
            height: 100vh;
            width: 100%;
            max-width: 414px;
            margin: 0 auto;
            position: relative;
        }

        .owl-carousel {
            height: 100%;
            width: 100%;
        }

        .owl-stage-outer,
        .owl-stage,
        .owl-item {
            height: 100%;
        }

        .carousel-item {
            height: 100%;
            position: relative;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .slide-content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 70%;
        }

        .content-image {
            width: 100%;
            text-align: center;
            margin-bottom: 40px;
        }

        .content-image img {
            max-width: 100%;
            height: auto;
        }

        .carousel-text {
            text-align: left;
            padding: 0 20px;
        }

        .carousel-title {
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        .carousel-description {
            color: #e0d8f0;
            font-size: 1rem;
            text-align: left;
            line-height: 1.4;
        }

        .challenges-content {
            display: flex;
            flex-direction: column;
        }

        .challenges-header {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        .challenge-container {
            width: 100%;
            padding: 0;
        }

        .challenge-box {
            background-color: white;
            color: black;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: left;
        }

        .challenge-title {
            color: blue;
            font-weight: bold;
        }

        .challenge-goal {
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .progress-bar {
            height: 5px;
            background-color: #e0e0e0;
            border-radius: 5px;
            width: 100%;
            margin-top: 8px;
        }

        .progress-fill {
            height: 100%;
            background-color: #8A2BE2;
            border-radius: 5px;
            width: 40%;
        }

        .goals-header {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 15px 0 10px 0;
            text-align: left;
        }

        .goal-box {
            background-color: white;
            color: black;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 10px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .goal-icon {
            color: blue;
            margin-right: 5px;
        }

        .goal-times {
            font-size: 0.9rem;
            margin-top: 3px;
        }

        .plus-icon {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .carousel-bottom-text {
            margin-top: 30px;
            text-align: left;
            padding: 0 0 40px 0;
        }

        .placeholder-centered {
            text-align: left;
            padding: 0 20px;
        }

        .custom-dots {
            position: absolute;
            bottom: 90px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .custom-dots li {
            width: 8px;
            height: 8px;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
        }

        .custom-dots li.active {
            background-color: white;
        }

        .login-buttons {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .email-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 12px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            display: block;
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
            box-sizing: border-box;
        }

        .social-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .social-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 12px 0;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: bold;
            cursor: pointer;
            flex: 1;
            text-align: center;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="landing-page" id="landingPage">
            <div class="landing-content">
                <h1>Your Pup, Your Plan: Smart, Personalised Dog Parenting</h1>
                <p>Say goodbye to puppy blues! Get tailored guidance, habit-forming challenges, and smart reminders—so you always know what to do and when. Keep your dog happy, healthy, and thriving with Woofya!</p>
            </div>
            <button class="get-started-btn" id="getStartedBtn">Get Started <span class="arrow-icon">→</span></button>
        </div>
        <div class="carousel-container" id="carouselContainer">
            <div class="owl-carousel owl-theme">
                <div class="carousel-item">
                    <div class="slide-content-wrapper">
                        <div class="content-image">
                            <img src="image/welcome2.png" alt="Personalised Behaviour Tracking">
                        </div>
                        <div class="carousel-text">
                            <h2 class="carousel-title">Personalised Behaviour Tracking</h2>
                            <p class="carousel-description">Better understand your pup's behavior and needs.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="challenges-content">
                        <div class="challenges-header">Challenges</div>
                        <div class="challenge-container">
                            <div class="challenge-box">
                                <div class="challenge-title">Socialisation 101 Challenge 🐕🐩</div>
                                <div class="challenge-goal">3 goal</div>
                                <div class="progress-bar">
                                    <div class="progress-fill"></div>
                                </div>
                            </div>

                            <div class="goals-header">Goals</div>

                            <div class="goal-box">
                                <div>
                                    <span class="goal-icon">🚶</span> Walks
                                    <div class="goal-times">1/6 Times</div>
                                </div>
                                <span class="plus-icon">+</span>
                            </div>

                            <div class="goal-box">
                                <div>
                                    <span class="goal-icon">🔊</span> Sounds
                                    <div class="goal-times">2/3 Times</div>
                                </div>
                                <span class="plus-icon">+</span>
                            </div>

                            <div class="goal-box">
                                <div>
                                    <span class="goal-icon">🧱</span> Surfaces
                                    <div class="goal-times">0/3 TIMES</div>
                                </div>
                                <span class="plus-icon">+</span>
                            </div>
                        </div>

                        <div class="carousel-bottom-text">
                            <h2 class="carousel-title">Habit-Forming Challenges</h2>
                            <p class="carousel-description">Keep your dog happy, healthy, and active with engaging challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="placeholder-centered">
                        <h2 class="carousel-title">Placeholder Title</h2>
                        <p class="carousel-description">Placeholder description text.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="placeholder-centered">
                        <h2 class="carousel-title">Placeholder Title</h2>
                        <p class="carousel-description">Placeholder description text.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="placeholder-centered">
                        <h2 class="carousel-title">Placeholder Title</h2>
                        <p class="carousel-description">Placeholder description text.</p>
                    </div>
                </div>
            </div>
            <div class="login-buttons">
                <button class="email-btn">Continue with E-mail</button>
                <div class="social-buttons">
                    <button class="social-btn">Apple</button>
                    <button class="social-btn">Google</button>
                    <button class="social-btn">Facebook</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel').owlCarousel({
                items: 1,
                loop: false,
                nav: false,
                dots: true,
                touchDrag: true,
                mouseDrag: true,
                margin: 0,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });
            $("#getStartedBtn").click(function() {
                $("#landingPage").hide();
                $("#carouselContainer").show();
                owl.trigger('refresh.owl.carousel');
            });
        });
    </script>
</body>

</html>