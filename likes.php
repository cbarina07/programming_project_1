<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Woofya</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=5, minimum-scale=1, width=device-width">
    <link href="css/setup.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="setup-page-wrapper">
            <div class="create-progress-container">
                <h1 class="create-progress-desc">Create Account 4/7</h1>
                <div class="create-progress-bar">
                <div class="create-progress-fill" style="width: calc(100% * 4 / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="like-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title2">Favourites</h2>
            <h3 class="create-subtitle">Choose all that apply</h3>
            <form class="create-form" action="dislikes.php" method="POST">
                <div class="create-form-col">
                    <div class="create-form-row other">
                        <label class="create-form-other">
                            <span>Fetch</span>
                            <input type="checkbox" name="likes[]" value="fetch">
                        </label>
                        <label class="create-form-other">
                            <span>Swimming</span>
                            <input type="checkbox" name="likes[]" value="swimming">
                        </label>
                        <label class="create-form-other">
                            <span>Hiking</span>
                            <input type="checkbox" name="likes[]" value="hiking">
                        </label>
                        <label class="create-form-other">
                            <span>Puzzle games</span>
                            <input type="checkbox" name="likes[]" value="puzzle_games">
                        </label>
                        <label class="create-form-other">
                            <span>Tug toys</span>
                            <input type="checkbox" name="likes[]" value="tug_toys">
                        </label>
                        <label class="create-form-other">
                            <span>Squeaky toys</span>
                            <input type="checkbox" name="likes[]" value="squeaky_toys">
                        </label>
                        <label class="create-form-other">
                            <span>Tennis</span>
                            <input type="checkbox" name="likes[]" value="tennis_balls">
                        </label>
                        <label class="create-form-other">
                            <span>Other</span>
                            <input type="checkbox" name="likes[]" value="other">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="other-like">Other</label>
                    <div class="create-form-row">
                        <input type="text" name="other-like" id="other-like" placeholder="Other (please describe)" autocomplete="on">
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Edit">
                    </div>
                </div>
                <div class="create-form-row">
                    <button type="submit" class="create-form-button">Next</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>