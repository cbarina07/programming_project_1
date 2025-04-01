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
                <h1 class="create-progress-desc">Create Account 5/7</h1>
                <div class="create-progress-bar">
                    <div class="create-progress-fill" style="width: calc(100% * 5 / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="dislike-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title2">Dislikes</h2>
            <h3 class="create-subtitle">Choose all that apply</h3>
            <form class="create-form" action="training.php" method="POST">
                <div class="create-form-col">
                    <div class="create-form-row other">
                        <label class="create-form-other">
                            <span>Loud noises</span>
                            <input type="checkbox" name="dislikes[]" value="loud_noises">
                        </label>
                        <label class="create-form-other">
                            <span>Strangers</span>
                            <input type="checkbox" name="dislikes[]" value="strangers">
                        </label>
                        <label class="create-form-other">
                            <span>Other dogs</span>
                            <input type="checkbox" name="dislikes[]" value="other_dogs">
                        </label>
                        <label class="create-form-other">
                            <span>Certain people</span>
                            <input type="checkbox" name="dislikes[]" value="certain_people">
                        </label>
                        <label class="create-form-other">
                            <span>Being left alone</span>
                            <input type="checkbox" name="dislikes[]" value="being_left_alone">
                        </label>
                        <label class="create-form-other">
                            <span>Thunderstorms</span>
                            <input type="checkbox" name="dislikes[]" value="thunderstorms">
                        </label>
                        <label class="create-form-other">
                            <span>Cats</span>
                            <input type="checkbox" name="dislikes[]" value="cats">
                        </label>
                        <label class="create-form-other">
                            <span>Other</span>
                            <input type="checkbox" name="dislikes[]" value="other">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="other-dislike">Other</label>
                    <div class="create-form-row">
                        <input type="text" name="other-dislike" id="other-dislike" placeholder="Other (please describe)" autocomplete="on">
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