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
                <h1 class="create-progress-desc">Create Account 6/7</h1>
                <div class="create-progress-bar">
                    <div class="create-progress-fill" style="width: calc(100% * 6 / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="training-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title2">Training Level</h2>
            <h3 class="create-subtitle">Choose all that apply</h3>
            <form class="create-form" action="lifestyle.php" method="POST">
                <div class="create-form-col">
                    <div class="create-form-row other">
                        <label class="create-form-other">
                            <span>Basic commands</span>
                            <input type="checkbox" name="training[]" value="basic_commands">
                        </label>
                        <label class="create-form-other">
                            <span>Still learning</span>
                            <input type="checkbox" name="training[]" value="still_learning">
                        </label>
                        <label class="create-form-other">
                            <span>Fully trained</span>
                            <input type="checkbox" name="training[]" value="fully_trained">
                        </label>
                        <label class="create-form-other">
                            <span>Toilet trained</span>
                            <input type="checkbox" name="training[]" value="toilet_trained">
                        </label>
                        <label class="create-form-other">
                            <span>Leash-trained</span>
                            <input type="checkbox" name="training[]" value="leash_trained">
                        </label>
                        <label class="create-form-other">
                            <span>Socialised</span>
                            <input type="checkbox" name="training[]" value="socialised">
                        </label>
                        <label class="create-form-other">
                            <span>Off-leash trained</span>
                            <input type="checkbox" name="training[]" value="off_leash_trained">
                        </label>
                        <label class="create-form-other">
                            <span>Other</span>
                            <input type="checkbox" name="training[]" value="other">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="other-training">Other</label>
                    <div class="create-form-row">
                        <input type="text" name="other-training" id="other-training" placeholder="Other (please describe)" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
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