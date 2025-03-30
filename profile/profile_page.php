<?php
// Placeholder: this will eventually be fetched from the database
$dog = [
    'name' => 'Firstname Lastname',
    'image' => 'examplepic.png',
    'location' => 'Melbourne, AU',
    'age' => 2,
    'xp' => 2500,
    'mood' => 'Happy',
    'streak' => 4,
    'goals' => 16,
    'breed' => 'Pug',
    'size' => 'Small',
    'weight' => '9.0kg',
];

$photos = [
    '../image/default_journal_pic_1.jpg',
    '../image/default_journal_pic_2.jpg',
    '../image/default_journal_pic_3.jpg',

    // Placeholder for Journal Photos
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dog Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <div class="background-wrapper">
        <div class="profile-container">
            <!-- Header -->
            <div class="profile-header">
                <div class="profile-top-left">
                    <h2 class="dog-header-name"><?= explode(' ', htmlspecialchars($dog['name']))[0] ?></h2>
                </div>

                <!-- Edit button in top-right -->
                <a href="../edit_person.php">
                    <button class="edit-button">Edit Profile ✏️</button>
                </a>

                <!-- Dog image -->
                <img src="../image/<?= $dog['image'] ?>" alt="Dog profile picture" class="profile-pic">

                <!-- QR Share text -->
                <!-- DOES NOT LINK ANYWHERE FOR THE MOMENT -->
                <div class="qr-share-text">
                    <img src="../image/qr_code.png" alt="QR Code"
                        style="height: 16px; vertical-align: middle; margin-right: 6px;">
                    Open QR Code To Share
                </div>

                <!-- Location, Age and Dog Stats -->
                <div class="profile-meta">
                    <span>📍 <?= htmlspecialchars($dog['location']) ?></span> ·
                    <span><?= $dog['age'] ?> years old</span>
                </div>

                <div class="dog-stats-row">
                    <div class="dog-stat stat-divider">
                        <div class="stat-title">Breed</div>
                        <div class="stat-value">Pug</div>
                    </div>
                    <div class="dog-stat stat-divider">
                        <div class="stat-title">Size</div>
                        <div class="stat-value">Small</div>
                    </div>
                    <div class="dog-stat">
                        <div class="stat-title">Weight</div>
                        <div class="stat-value">9.0kg</div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats-wrapper">
                <div class="stats-container">
                    <div class="stat-box">
                        <div class="stat-icon">🏅</div>
                        <div class="stat-text">
                            <div class="stat-value"><?= $dog['xp'] ?>xp</div>
                            <div class="stat-label">Experience Earned</div>
                        </div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-icon">😊</div>
                        <div class="stat-text">
                            <div class="stat-value"><?= htmlspecialchars($dog['mood']) ?></div>
                            <div class="stat-label">Av. Mood</div>
                        </div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-icon">🔁</div>
                        <div class="stat-text">
                            <div class="stat-value"><?= $dog['streak'] ?></div>
                            <div class="stat-label">Best Streak</div>
                        </div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-icon">🎯</div>
                        <div class="stat-text">
                            <div class="stat-value"><?= $dog['goals'] ?></div>
                            <div class="stat-label">Goals Finished</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs -->
            <div class="tab-bar">
                <button class="tab active" onclick="showTab('journal')">Journal (20)</button>
                <button class="tab" onclick="showTab('territory')">Territory (18)</button>
                <button class="tab" onclick="showTab('achievements')">Achievements (4)</button>
            </div>

            <!-- Content Sections -->
            <div id="journal" class="tab-content">
                <div class="journal-entry">
                    <h3>Example Entry - <span class="place">Port Melbourne Dog Beach</span></h3>
                    <p>We had a wonderful day today..</p>
                    <div class="tags">
                        <span>🏖️ Beach</span>
                        <span>🌲 Park</span>
                        <span>🎆 Fireworks</span>
                        <span>🚶 20min Walk</span>
                    </div>
                    <div class="photos-grid">
                        <?php if (!empty($photos)): ?>
                            <img src="<?= $photos[0] ?>" alt="main photo" class="main-photo">
                            <?php if (count($photos) > 1): ?>
                                <div class="side-photos">
                                    <?php foreach (array_slice($photos, 1) as $sidePhoto): ?>
                                        <img src="<?= $sidePhoto ?>" alt="side photo">
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <!-- NOT CURRENTLY DISPLAYING XP GAINED -->
                    <p class="xp-earned">+100xp</p>
                </div>
            </div>

            <div id="territory" class="tab-content" style="display:none;">
                <div class="journal-entry">
                    <!--STATIC TERRITORIES FOR NOW -->
                    <h3>Territory List</h3>
                    <p>🗺️ Central Bark</p>
                    <p>🌳 Carlton Gardens</p>
                </div>
            </div>

            <div id="achievements" class="tab-content" style="display:none;">
                <div class="journal-entry">

                    <!--STATIC ACHIEVEMENTS FOR NOW -->
                    <h3>Achievements</h3>
                    <ul>
                        <li>🏆 First Walk</li>
                        <li>🥇 7 Day Streak</li>
                        <li>🐶 Obedience Level 1</li>
                    </ul>
                </div>
            </div>

            <!-- Script to toggle tabs -->
            <script>
                function showTab(tabId) {
                    // Hide all tab content
                    const contents = document.querySelectorAll('.tab-content');
                    contents.forEach(el => el.style.display = 'none');

                    // Remove active class from all tabs
                    const tabs = document.querySelectorAll('.tab-bar .tab');
                    tabs.forEach(tab => tab.classList.remove('active'));

                    // Show selected tab content
                    document.getElementById(tabId).style.display = 'block';

                    // Set clicked tab as active
                    event.target.classList.add('active');


                }
            </script>
        </div>
    </div>
</body>

</html>