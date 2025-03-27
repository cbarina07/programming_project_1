<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit dog profile</title>
    </head>
    <body>
        
        <a href="/"> &#8592 Personal Information</a> <!--add link to go back to previous page 'settings' page-->

        <form action="test_outcome.php" method="GET"><!-- link to next page (home/settings) tbc --> <!-- https://www.w3schools.com/tags/att_button_type.asp -->
            <label for="userName">Name</label>
            <input type="text", id="userName", name="userName", value="get from db" required></input><br> <!-- Display profile name (get from db) + edit functionality & icon, form(?) to send new name to db + input validation-->

            <label for="userEmail">Email</label>
            <input type="text", id="userEmail", name="userEmail", value="get from db" required></input><br> <!-- Display email + edit functionality & icon, form(?) to send new email to db + input validation-->

            <label for="userPassword">Password</label>
            <input type="password", id="userPassword", name="userPassword", value="get from db" required></input><br> <!--Display lock icon + masked password + edit functionality & icon, form(?) to send new name to db + input validation, clarify password policy + storage system (hash/salt etc)-->

            <label for="userLocation">Location</label>
            <input type="text", id="userLocation", name="userLocation", value="get from db" required></input><br> <!--Display location icon + location (city, country), form(?) to send new location to db + input validation, clarify drop down list of all location or only specific region/only user input-->

            <label for="userDoB">Date of Birth</label>
            <input type="date", id="userDoB", name="userDoB", value="get from db" required ></input><br><!--Cake icon + DoB in (mmm dd, yyyy) + edit functionality & icon, clarify what client would like (user input/clicking on visual calender etc) + input validation-->

            <label for="userGender">Gender</label>
            <input type="radio", id="male", name="userGender", value="male">Male</input>
            <input type="radio", id="female", name="userGender", value="female">Female</input><br><!-- form to get male/female button using radio?-->

            <!-- in edit personal its DoB -> gender but in dog profile its gender -> DoB (is it a design thing or does client want to standardise)--> 

            <button type="submit">Save Settings</button><!-- form submission where everything is saved to the db-->
        </form>
    </body>
</html>