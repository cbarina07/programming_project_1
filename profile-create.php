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
                <h1 class="create-progress-desc">Create Account 1/7</h1>
                <div class="create-progress-bar">
                <div class="create-progress-fill" style="width: calc(100% / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="user-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title">Create Your Profile</h2>
            <form class="create-form" action="dog-create.php" method="POST">
                <div class="create-form-col">
                    <label for="username">Name</label>
                    <div class="create-form-row">
                        <input type="text" name="username" id="username" placeholder="Enter your full name" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Edit">
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="email">Email</label>
                    <div class="create-form-row">
                        <input type="email" name="email" id="email" placeholder="Enter your email address" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Edit">
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="location">Location</label>
                    <div class="create-form-row">
                        <img src="image/location.png" class="create-form-icon loc" alt="Location">
                        <select name="location" id="location">
                            <option value="New York, USA" selected>New York, USA</option>
                            <option value="Melbourne, Australia">Melbourne, Australia</option>
                            <option value="Sydney, Australia">Sydney, Australia</option>
                            <option value="Tokyo, Japan">Tokyo, Japan</option>
                        </select>
                        <img src="image/dropdown.png" class="create-form-icon drop" alt="Dropdown">
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