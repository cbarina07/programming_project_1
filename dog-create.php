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
                <h1 class="create-progress-desc">Create Account 2/7</h1>
                <div class="create-progress-bar">
                <div class="create-progress-fill" style="width: calc(100% * 2 / 7);"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="dog-form">
        <div class="setup-page-wrapper">
            <h2 class="create-title">Create Your Dog's Profile</h2>
            <form class="create-form" action="temperament.php" method="POST">
                <div class="create-form-col">
                    <label for="dogname">Name</label>
                    <div class="create-form-row">
                        <input type="text" name="dogname" id="dogname" placeholder="Enter your dog's name" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                    </div>
                </div>

                <div class="create-form-col">
                    <label for="picture">Choose Your Profile Picture</label>
                    <div class="create-form-row pic">
                        <input type="file"
                            name="dogpicture"
                            id="dogpicture"
                            accept="image/*"
                            class="form-file-input">

                        <label for="dogpicture" class="create-form-upload">
                            <img src="image/upload.png" class="create-form-upload-icon" alt="Upload">
                        </label>
                        <div class="create-form-preview">
                            <img src="image/examplepic.png" class="create-form-img" alt="Preview">
                        </div>
                    </div>
                </div>


                <div class="create-form-col">
                    <label for="breed">Breed</label>
                    <div class="create-form-row">
                        <input type="text" name="breed" id="breed" placeholder="Enter your dog's breed" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                    </div>
                </div>

                <div class="create-form-col">
                    <label for="gender">Gender</label>
                    <div class="create-form-row gender">
                        <label class="create-form-gender" for="gender-boy">
                            <span>Boy</span>
                            <input type="radio" name="gender" id="gender-boy" value="boy" checked>
                        </label>
                        <label class="create-form-gender" for="gender-girl">
                            <span>Girl</span>
                            <input type="radio" name="gender" id="gender-girl" value="girl">
                        </label>
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="dob">Date of Birth</label>
                    <div class="create-form-row">
                        <img src="image/calendar.png" class="create-form-icon cal" alt="Calendar">
                        <input type="date" id="dob" name="dob" max="<?= date('Y-m-d') ?>" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                    </div>
                </div>
                <div class="create-form-col">
                    <label for="weight">Weight</label>
                    <div class="create-form-row">
                        <input type="text" name="weight" id="weight" placeholder="Enter your dog's weight" autocomplete="on" required>
                        <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                    </div>
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