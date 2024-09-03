
<?php

// Retrieve form data
$formData = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET;

$carouselFiles = glob('carousel*.json');
$carouselNumber = count($carouselFiles) + 1;

$idTag = 'card' . $carouselNumber;
$textRepresentation = [
    'tagname' => 'div',
    'id' => $idTag,
    'style' => 'background-color: #222222; color: #ffffff; padding: 20px; border-radius: 10px; margin-bottom: 20px; width: 100px; height auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);',
    'class' => 'card-type',
    'textContent' => $formData['event_label'] . " " . $formData['event_date'] . " " . $formData['event_start'] . " " . $formData['event_over'] . " " .$formData['event_end']
];

// Create the new carousel file name
$fileName = "carousel{$carouselNumber}.json";

// Save the JSON to the file
file_put_contents($fileName, json_encode($textRepresentation, JSON_PRETTY_PRINT));

$fileFull = '{ "modal": "';

foreach ($carouselFiles as $value) {
    $fileFull .= "$value:carousel-container;";
}

$fileFull .= '" }';

$file = json_decode($fileFull);
$file = json_encode($file);
file_put_contents("./name.json", $fileFull);
echo json_encode($file, JSON_PRETTY_PRINT);
?>
