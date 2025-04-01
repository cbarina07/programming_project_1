<html>
<head>
    <meta charset="UTF-8">
    <title>Edit dog profile</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=5, minimum-scale=1, width=device-width">
    <link href="css/setup.css" rel="stylesheet" type="text/css">
</head>
<body>

    <header>
        <div class="setup-back-wrapper"> <!--TODO: add link to go back to previous page 'settings' page-->
            <div class="create-back-container">
                <h3 class="create-back-desc">
                    <a href="/"><img src="image/back_arrow.png">  Edit Dog Profile</a>
                </h3>
            </div>

            <div class="create-row dog"> <!-- TODO: get dog name from db -->
                    <label class="create-dog" for="selected">
                        <span>Robbie</span>
                        <input type="radio" name="dog" id="selected" checked hidden>
                    </label>
                    <label class="create-dog" for="new">
                        <a href="dog-create.php" ><span>+ add dog</span></a>
                    </label>
            </div>
        </div>
    </header>

    <section id="dog-form">
        <div class="setup-page-wrapper">
        <form class="create-form" action="/" method="POST"> <!-- TODO: update link (TBC) -->

            <div class="create-form-col"> <!-- TODO: Display dog name ( from db) + send new name to db + input validation-->
                <label for="dogname">Name</label>
                <div class="create-form-row">
                    <input type="text" name="dogname" id="dogname" placeholder="Enter your dog's name" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get image from db + form to upload and send new image to db-->
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

            <div class="create-form-col"> <!-- TODO: get breed from db + form to send new breed to db + input validation-->
                <label for="breed">Breed</label>
                <div class="create-form-row">
                    <input type="text" name="breed" id="breed" placeholder="Enter your dog's breed" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get gender (from db) and auto select gender first instead of leaving it empty -->
                <label for="gender">Gender</label>
                <div class="create-form-row gender">
                    <label class="create-form-gender" for="gender-male">
                        <span>Male</span>
                        <input type="radio" name="gender" id="gender-male" value="male" checked>
                    </label>
                    <label class="create-form-gender" for="gender-female">
                        <span>Female</span>
                        <input type="radio" name="gender" id="gender-female" value="female">
                    </label>
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get Dob (from db), change format to (mmm dd, yyyy) to match deliverables pdf, fix calandar icon from using input type = date -->
                <label for="dob">Date of Birth</label>
                <div class="create-form-row">
                    <img src="image/calendar.png" class="create-form-icon cal" alt="Calendar">
                    <input type="date" id="dob" name="dob" max="<?= date('Y-m-d') ?>" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get weight from db + form to send new weight to db + input validation of correct weight format-->
                <label for="weight">Weight</label>
                <div class="create-form-row">
                    <input type="text" name="weight" id="weight" placeholder="Enter your dog's weight" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get microchip number (from db) + form to send new number to db + input validation of correct microchip format (xxxx xxxx xx) according to deliverables-->
                <label for="microchip">Microchip Number</label>
                <div class="create-form-row">
                    <input type="text" name="microchip" id="microchip" placeholder="Enter your dog's microchip number" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get registration number (from db) + form to send new number to db + input validation of correct microchip format (xxxx xxxx xxxxx) according to deliverables-->
                <label for="registration">Registration Number</label>
                <div class="create-form-row">
                    <input type="text" name="registration" id="registration" placeholder="Enter your dog's registration number" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: change dog pic to pdf pic, clarify what types of files are able to be uploaded -->
                <label for="picture">Documents (upload)</label>
                <div class="create-form-row pic">
                    <input type="file"
                        name="dogpicture"
                        id="dogpicture"
                        accept=".pdf"
                        class="form-file-input">

                    <label for="dogpicture" class="create-form-upload">
                        <img src="image/upload.png" class="create-form-upload-icon" alt="Upload">
                    </label>
                    <div class="create-form-preview">
                        <img src="image/examplepic.png" class="create-form-img" alt="Preview">
                    </div>
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get temperament (from db) + form to send temperament to db + input validation-->
                <label for="temperament">Temperament</label>
                <div class="create-form-row">
                    <input type="text" name="temperament" id="temperament" placeholder="Enter your dog's temperaments" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: CHECK NAMING (favourite things vs likes to match with dislikes) get favourite things (from db) + form to send favourite things to db + input validation-->
                <label for="likes">Favourite Things</label>
                <div class="create-form-row">
                    <input type="text" name="likes" id="likes" placeholder="Enter your dog's favourite things" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get dislikes (from db) + form to send dislikes to db + input validation-->
                <label for="dislikes">Dislikes</label>
                <div class="create-form-row">
                    <input type="text" name="dislikes" id="dislikes" placeholder="Enter your dog's dislikes" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get training level (from db) + form to send training level to db + input validation-->
                <label for="training">Training Level</label>
                <div class="create-form-row">
                    <input type="text" name="training" id="training" placeholder="Enter your dog's training level" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get exercise & lifestyle (from db) + form to send exercise & lifestyle to db + input validation-->
                <label for="lifestyle">Exercise & Lifestyle</label>
                <div class="create-form-row">
                    <input type="text" name="lifestyle" id="lifestyle" placeholder="Enter your dog's exercise & lifestyle" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- TODO: get Looking To Improve (from db) + form to Looking To Improve to db + input validation-->
                <label for="improvement">Looking To Improve</label>
                <div class="create-form-row">
                    <input type="text" name="improvement" id="improvement" placeholder="Enter your dog's improvement goals" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-row"> <!-- TODO: create form submission to DB -->
                <button type="submit" class="create-form-button">Save Settings</button>
            </div>
        </form>
        </div>
    </section>
</body>
</html>