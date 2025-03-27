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
                <h1 class="create-progress-desc">Create Account 3/7</h1>
                <div class="create-progress-bar">
                <div class="create-progress-fill" style="width: calc(100% * 3 / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="temperament-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title2">Temperament</h2>
            <h3 class="create-subtitle">Choose all that apply</h3>
            <form class="create-form" action="likes.php" method="POST">
                <div class="create-form-col">
                    <div class="create-form-row other">
                        <label class="create-form-other">
                            <span>Friendly</span>
                            <input type="checkbox" name="temper[]" value="friendly">
                        </label>
                        <label class="create-form-other">
                            <span>Shy</span>
                            <input type="checkbox" name="temper[]" value="shy">
                        </label>
                        <label class="create-form-other">
                            <span>Energetic</span>
                            <input type="checkbox" name="temper[]" value="energetic">
                        </label>
                        <label class="create-form-other">
                            <span>Cautious</span>
                            <input type="checkbox" name="temper[]" value="cautious">
                        </label>
                        <label class="create-form-other">
                            <span>Affectionate</span>
                            <input type="checkbox" name="temper[]" value="affectionate">
                        </label>
                        <label class="create-form-other">
                            <span>Wary at first</span>
                            <input type="checkbox" name="temper[]" value="wary_at_first">
                        </label>
                        <label class="create-form-other">
                            <span>Protective</span>
                            <input type="checkbox" name="temper[]" value="protective">
                        </label>
                        <label class="create-form-other">
                            <span>Other</span>
                            <input type="checkbox" name="temper[]" value="other">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="other-temp">Other</label>
                    <div class="create-form-row">
                        <input type="text" name="other-temp" id="other-temp" placeholder="Other (please describe)" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="energy">Energy Level</label>
                    <div class="create-form-row energy">
                        <label class="create-form-energy" for="relaxed">
                            <span>Relaxed</span>
                            <input type="radio" name="energy" id="relaxed" value="relaxed" checked>
                        </label>
                        <label class="create-form-energy" for="moderate">
                            <span>Moderate</span>
                            <input type="radio" name="energy" id="moderate" value="moderate">
                        </label>
                        <label class="create-form-energy" for="high">
                            <span>High</span>
                            <input type="radio" name="energy" id="high" value="high">
                        </label>
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