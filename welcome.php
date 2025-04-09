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
    <link href="css/welcome.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="carousel-container" id="carouselContainer">
            <div class="owl-carousel owl-theme">
                
                <div class="carousel-item">
                    <div class="landing-content">
                        <h1>Your Pup, Your Plan: Smart, Personalised Dog Parenting</h1>
                        <p>Say goodbye to puppy blues! Get tailored guidance, habit-forming challenges, and smart reminders—so you always know what to do and when. Keep your dog happy, healthy, and thriving with Woofya!</p>
                    </div>
                </div>

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
                                    <div class="goal-times">0/3 Times</div>
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
                    <div class="slide-content-wrapper">
                        <div class="content-image">
                            <img src="image/welcome4.png" alt="Personalised Behaviour Tracking" class="smaller-image">
                        </div>
                        <div class="carousel-text">
                            <h2 class="carousel-title">Centralized Pet Data</h2>
                            <p class="carousel-description">Access vaccination records, preferences, and more in one place.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="slide-content-wrapper">
                        <div class="content-image">
                            <img src="image/welcome5.png" alt="Personalised Behaviour Tracking">
                        </div>
                        <div class="carousel-text">
                            <h2 class="carousel-title">Pet Dashboard</h2>
                            <p class="carousel-description">Get real-time insights for exercise, mood, and milestones.</p>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="slide-content-wrapper">
                        <div class="content-image">
                            <img src="image/welcome6.png" alt="Personalised Behaviour Tracking">
                        </div>
                        <div class="carousel-text">
                            <h2 class="carousel-title">Gamified Experience</h2>
                            <p class="carousel-description">Make pet care fun and rewarding for you and your furry friend.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login-buttons">
                <button class="email-btn">
                    Login
                </button>
                <button class="email-btn">
                    Register
                </button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
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
        });
    </script>
</body>

</html>