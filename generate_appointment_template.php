<?php
header('Content-Type: application/json');

$currentDate = new DateTime();
$dates = [];

//
$jsonStructure = [
    "appointmentBlock" => [
        "tagname" => "div",
        "id" => "appointment",
        "class" => "carousel-item themed-block",
        "style" => "border: 2px solid #4a90e2; border-radius: 10px; padding: 15px; background-color: #f0f8ff;",
        "fields" => [
            [
                "tagname" => "h3",
                "textContent" => "New Appointment Slot",
                "style" => "color: #4a90e2; margin-bottom: 15px;"
            ],
            [
                "tagname" => "span",
                "textContent" => "Event Type",
                "style" => "display: block; margin-bottom: 5px; color: #333;",
                "children" => [
                    [
                        "tagname" => "select",
                        "id" => "event_label",
                        "options" => "Initial Consultation:Consult;Follow-up Meeting:Follow-Up;Project Review:Review;Client Presentation:Presentation;Team Brainstorming:Brainstorming",
                        "class" => "appointment-block themed-input",
                        "style" => "width: 100%; padding: 8px; border: 1px solid #4a90e2; border-radius: 5px;"
                    ]
                ]
            ],
            [
                "tagname" => "div",
                "class" => "date-time-container",
                "style" => "display: flex; justify-content: space-between; margin-top: 10px;",
                "children" => [
                    [
                        "tagname" => "span",
                        "textContent" => "Start",
                        "style" => "flex: 1; margin-right: 10px;",
                        "children" => [
                            [
                                "tagname" => "input",
                                "type" => "date",
                                "id" => "event_date",
                                "class" => "appointment-block themed-input",
                                "style" => "width: 100%; padding: 8px; border: 1px solid #4a90e2; border-radius: 5px; margin-bottom: 5px;"
                            ],
                            [
                                "tagname" => "input",
                                "type" => "time",
                                "id" => "event_start",
                                "class" => "appointment-block themed-input",
                                "style" => "width: 100%; padding: 8px; border: 1px solid #4a90e2; border-radius: 5px;"
                            ]
                        ]
                    ],
                    [
                        "tagname" => "span",
                        "textContent" => "End",
                        "style" => "flex: 1;",
                        "children" => [
                            [
                                "tagname" => "input",
                                "type" => "date",
                                "id" => "event_over",
                                "class" => "appointment-block themed-input",
                                "style" => "width: 100%; padding: 8px; border: 1px solid #4a90e2; border-radius: 5px; margin-bottom: 5px;"
                            ],
                            [
                                "tagname" => "input",
                                "type" => "time",
                                "id" => "event_end",
                                "class" => "appointment-block themed-input",
                                "style" => "width: 100%; padding: 8px; border: 1px solid #4a90e2; border-radius: 5px;"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "tagname" => "button",
                "id" => "add-to-schedule",
                "textContent" => "Add to Schedule",
                "ajax" => "process_appointment.php",
                "method" => "GET",
                "form-class" => "appointment-block",
                "class" => "add-button themed-button",
                "style" => "width: 100%; padding: 10px; background-color: #4a90e2; color: white; border: none; border-radius: 5px; margin-top: 15px; cursor: pointer;"
            ]
        ]
    ],
    "addTemplateButton" => [
        "tagname" => "button",
        "id" => "add-template-button",
        "textContent" => "Add New Appointment Block",
        "class" => "themed-button clear-node",
        "method" => "GET",
        "form-class" => "appointment-block",
        "style" => "padding: 10px 20px; background-color: #4a90e2; color: white; border: none; border-radius: 5px; margin-top: 20px; cursor: pointer;",
        "insert" => "carousel-container",
        "onclick" => "modal('./process_appointment.php', 'carousel-container');"
    ]
];

echo json_encode($jsonStructure, JSON_PRETTY_PRINT);
