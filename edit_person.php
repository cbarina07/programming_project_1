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
        </form>
    </div>
    </section>
        <label for="userDoB">Date of Birth</label>
        <input type="date", id="userDoB", name="userDoB", value="get from db" required ></input><br><!--Cake icon + DoB in (mmm dd, yyyy) + edit functionality & icon, clarify what client would like (user input/clicking on visual calender etc) + input validation-->

        <label for="userGender">Gender</label>
        <input type="radio", id="male", name="userGender", value="male">Male</input>
        <input type="radio", id="female", name="userGender", value="female">Female</input><br><!-- form to get male/female button using radio?-->

        <!-- in edit personal its DoB -> gender but in dog profile its gender -> DoB (is it a design thing or does client want to standardise)--> 

        <div class="create-form-row"><!-- form submission -->
            <button type="submit" class="create-form-button">Next</button>
        </div>
    </form>
</body>
</html>