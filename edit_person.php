<html>
<head>
    <meta charset="UTF-8">
    <title>Edit dog profile</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=5, minimum-scale=1, width=device-width">
    <link href="css/setup.css" rel="stylesheet" type="text/css">
</head>

</head>
<body>
    <a href="/"> &#8592 Personal Information</a> <!--add link to go back to previous page 'settings' page-->

    <section id="user-form">
    <div class="setup-page-wrapper">
        <form class="create-form" action="test_outcome.php" method="POST"><!-- link to next page (home/settings) tbc -->

            <div class="create-form-col"> <!-- Display profile name ( from db) + send new name to db + input validation-->
                <label for="username">Name</label>
                <div class="create-form-row">
                    <input type="text" name="username" id="username" placeholder="Enter your full name" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- Display email (from db) +  send new email to db + input validation-->
                <label for="email">Email</label>
                <div class="create-form-row">
                    <input type="email" name="email" id="email" placeholder="Enter your email address" autocomplete="on" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- Display lock icon + Display masked password (from db) +  send new password to db (clarify password policy) + input validation-->
                <label for="password">Password</label>
                <div class="create-form-row">
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- Display location (from db) + update new location to db + get list of avaliable location (?) -->
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

            <div class="create-form-col"> <!-- get Dob (from db), change format to (mmm dd, yyyy) to match deliverables pdf, fix calandar icon from using input type = date -->
                <label for="dob">Date of Birth</label>
                <div class="create-form-row">
                    <input type="date" id="dob" name="dob" max="<?= date('Y-m-d') ?>" required>
                    <img src="image/pencil.png" class="create-form-icon pen" alt="Pencil">
                </div>
            </div>

            <div class="create-form-col"> <!-- get gender (from db) and auto select gender first instead of leaving it empty -->
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

            <div class="create-form-row"><!-- form submission -->
                <button type="submit" class="create-form-button">Save settings</button>
            </div>
        </form>
    </div>
    </section>
</body>
</html>