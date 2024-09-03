
<?php

// Retrieve form data
$formData = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET;

$carouselFiles = glob('carousel*.json');
$carouselNumber = count($carouselFiles) + 1;
// Process form data into text representation

$idTag = 'card' . $carouselNumber. 'event';
$textRepresentation = [
    'tagname' => 'div',
    'id' => $idTag,
    'textContent' => $formData['event_label'] . " " . $formData['event_date'] . " " . $formData['event_start'] . " " . $formData['event_over'] . " " .$formData['event_end'],
    'class' => 'time-active',
    'delay' => "500"
    // 'event_date' => $formData['event_date'],
    // 'event_start' => $formData['event_start'],
    // 'event_over' => $formData['event_over'],
    // 'event_end' => $formData['event_end']
];

// Create JSON structure
$jsonStructure = [
    'appointment' => $textRepresentation
];

// Create the new carousel file name
$fileName = "carousel{$carouselNumber}.json";

$string = "";
// Create the carousel JSON structure
foreach ($carouselFiles as $key => $value) {
    $string .= "$value:carousel-container;";
}

$outmodal = [
    'modal' => $string
];
// Combine the appointment and carousel data
// $finalJson = array_merge($textRepresentation, $carouselJson);

// Save the JSON to the file
file_put_contents("server.json", json_encode($formData, JSON_PRETTY_PRINT));

// Save the JSON to the file
file_put_contents($fileName, json_encode($textRepresentation, JSON_PRETTY_PRINT));

echo json_encode($outmodal);
?>
