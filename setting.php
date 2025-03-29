<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Woofya</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=5, minimum-scale=1, width=device-width">
    <link href="css/setting.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav class="setting-header-container">
            <a href="#" class="setting-header-back">
                <img src="image/back_arrow_white.png" class="setting-header-icon" alt="Back">
            </a>
            <h1 class="setting-header-title">Settings</h1>
        </nav>
    </header>
    <section id="setting-profile">
        <div class="setting-page-wrapper">
            <div class="setting-profile-container">
                <div class="setting-profile-col">
                    <a href="#" class="setting-profile-frame">
                        <img src="image/qr_code.png" class="setting-profile-icon" alt="QR">
                    </a>
                    <p class="setting-profile-desc">Open QR Code</p>
                </div>
                <div class="setting-profile-frame dog">
                    <img src="image/examplepic.png" class="setting-profile-pic" alt="Profile Picture">
                </div>
                <div class="setting-profile-col">
                    <a href="#" class="setting-profile-frame">
                        <img src="image/edit.png" class="setting-profile-icon" alt="Edit">
                    </a>
                    <p class="setting-profile-desc">Edit Profile</p>
                </div>
            </div>
            <div class="setting-profile-information">
                <h2 class="setting-profile-name">Robbie</h2>
                <p class="setting-profile-email">janeandrobbie@gmail.com</p>
                <p class="setting-profile-location">New York, USA</p>
            </div>
        </div>
    </section>
    <section id="setting-general">
        <div class="setting-page-wrapper">
            <div class="setting-general-row">
                <h3 class="setting-general-title">General Settings</h3>
                <button class="setting-general-menu">
                    <img src="image/menu.png" class="setting-general-menu-icon" alt="Menu">
                </button>
            </div>
            <div class="setting-general-container">
                <a href="#" class="setting-general-item highlighted">
                    <div class="setting-general-frame">
                        <img src="image/notification.png" class="setting-general-icon" alt="Notification">
                    </div>
                    <h4 class="setting-general-desc">Notifications</h4>
                    <img src="image/next.png" class="setting-general-next" alt="Next">
                </a>
                <a href="#" class="setting-general-item highlighted">
                    <div class="setting-general-frame">
                        <img src="image/user.png" class="setting-general-icon" alt="Personal Information">
                    </div>
                    <h4 class="setting-general-desc">Personal Information</h4>
                    <img src="image/next.png" class="setting-general-next" alt="Next">
                </a>
                <a href="#" class="setting-general-item highlighted">
                    <div class="setting-general-frame">
                        <img src="image/share.png" class="setting-general-icon" alt="Share">
                    </div>
                    <h4 class="setting-general-desc">Invite Pet Care Providers</h4>
                    <img src="image/next.png" class="setting-general-next" alt="Next">
                </a>
                <a href="#" class="setting-general-item">
                    <div class="setting-general-frame">
                        <img src="image/feedback.png" class="setting-general-icon" alt="Feedback">
                    </div>
                    <h4 class="setting-general-desc">Submit Feedback</h4>
                    <img src="image/next.png" class="setting-general-next" alt="Next">
                </a>
                <div class="setting-general-item">
                    <div class="setting-general-frame">
                        <img src="image/moon.png" class="setting-general-icon" alt="Dark Mode">
                    </div>
                    <h4 class="setting-general-desc">Dark Mode</h4>
                    <button class="setting-mode-button" id="themeModeButton">
                        <div class="setting-mode-circle"></div>
                    </button>
                </div>
            </div>
            <div class="setting-general-container logout">
                <button href="#" class="setting-general-item">
                    <div class="setting-general-frame">
                        <img src="image/logout.png" class="setting-general-icon" alt="Log Out">
                    </div>
                    <h4 class="setting-general-desc logout">Log Out</h4>
                    <img src="image/next.png" class="setting-general-next" alt="Next">
                </button>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>