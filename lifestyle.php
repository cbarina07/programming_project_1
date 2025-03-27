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
                <h1 class="create-progress-desc">Create Account 7/7</h1>
                <div class="create-progress-bar">
                    <div class="create-progress-fill" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="lifestyle-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title2">lifestyle & Lifestyle</h2>
            <h3 class="create-subtitle">Choose all that apply</h3>
            <form class="create-form" action="#" method="POST">
                <div class="create-form-col">
                    <div class="create-form-row other">
                        <label class="create-form-other">
                            <span>Weekend Hikes</span>
                            <input type="checkbox" name="lifestyle[]" value="weekend_hikes">
                        </label>
                        <label class="create-form-other">
                            <span>Small Apartment</span>
                            <input type="checkbox" name="lifestyle[]" value="small_apartment">
                        </label>
                        <label class="create-form-other">
                            <span>Slow Walks</span>
                            <input type="checkbox" name="lifestyle[]" value="slow_walks">
                        </label>
                        <label class="create-form-other">
                            <span>Backyard Play</span>
                            <input type="checkbox" name="lifestyle[]" value="backyard_play">
                        </label>
                        <label class="create-form-other">
                            <span>Around Children</span>
                            <input type="checkbox" name="lifestyle[]" value="around_children">
                        </label>
                        <label class="create-form-other">
                            <span>Other</span>
                            <input type="checkbox" name="lifestyle[]" value="other">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="other-lifestyle">Other</label>
                    <div class="create-form-row">
                        <input type="text" name="other-lifestyle" id="other-lifestyle" placeholder="Other (please describe)" autocomplete="on" required>
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