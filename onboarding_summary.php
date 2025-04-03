<?php
$dog = [
    "name" => "Mochi",
    "breed" => "Akita",
    "height" => 64,
    "weight" => 36,
    "temperament" => "Loyal, Independent, Protective",
    "grooming_frequency_category" => "Weekly Brushing",
    "shedding_category" => "Seasonal",
    "energy_level_category" => "Energetic",
    "trainability_category" => "Willing to Learn",
    "demeanor_category" => "Alert/Responsive"
];

$breed_avg = [
    "min_height" => 60.96,
    "max_height" => 71.12,
    "min_weight" => 34,
    "max_weight" => 45,
    "temperament" => "Confident, Famously Funny, Fearless",
    "grooming_frequency_category" => "Weekly Brushing",
    "shedding_category" => "Seasonal",
    "energy_level_category" => "Energetic",
    "trainability_category" => "Eager to Please",
    "demeanor_category" => "Alert/Responsive"
];

$breed_description = "{$dog['breed']}s are large, loyal dogs from Japan known for being calm and protective. They bonds closely with their family but can be reserved around strangers.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($dog['name']) ?> vs. the Pack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/breed_compare.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="page-wrapper">

        <h1 class="page-title"><?= htmlspecialchars($dog['name']) ?> vs. the Pack</h1>

        <div class="description">
            <?= nl2br(htmlspecialchars($breed_description)) ?>
        </div>

        <div class="comparison-table">
            <div class="comparison-header-row">
                <label></label>
                <p><strong><?= htmlspecialchars($dog['name']) ?></strong></p>
                <p><strong>Breed Average</strong></p>
            </div>

            <div class="comparison-row">
                <label>🌡️ Height:</label>
                <p><?= $dog['height'] ?> cm</p>
                <p><?= $breed_avg['min_height'] ?> – <?= $breed_avg['max_height'] ?> cm</p>
            </div>

            <div class="comparison-row">
                <label>⚖️ Weight:</label>
                <p><?= $dog['weight'] ?> kg</p>
                <p><?= $breed_avg['min_weight'] ?> – <?= $breed_avg['max_weight'] ?> kg</p>
            </div>

            <div class="comparison-row">
                <label>🧠 Temperament:</label>
                <p><?= $dog['temperament'] ?></p>
                <p><?= $breed_avg['temperament'] ?></p>
            </div>

            <div class="comparison-row">
                <label>🧼 Grooming Needs:</label>
                <p><?= $dog['grooming_frequency_category'] ?></p>
                <p><?= $breed_avg['grooming_frequency_category'] ?></p>
            </div>

            <div class="comparison-row">
                <label>🍂 Shedding:</label>
                <p><?= $dog['shedding_category'] ?></p>
                <p><?= $breed_avg['shedding_category'] ?></p>
            </div>

            <div class="comparison-row">
                <label>⚡ Energy Level:</label>
                <p><?= $dog['energy_level_category'] ?></p>
                <p><?= $breed_avg['energy_level_category'] ?></p>
            </div>

            <div class="comparison-row">
                <label>🎓 Trainability:</label>
                <p><?= $dog['trainability_category'] ?></p>
                <p><?= $breed_avg['trainability_category'] ?></p>
            </div>

            <div class="comparison-row">
                <label>🐾 Demeanor:</label>
                <p><?= $dog['demeanor_category'] ?></p>
                <p><?= $breed_avg['demeanor_category'] ?></p>
            </div>
        </div>

    </div>

</body>

</html>