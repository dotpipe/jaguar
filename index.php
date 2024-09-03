<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JaguarOne - Appointment Scheduler</title>
    <style>
        body {
            background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        .cosmic-scheduler {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .stardust-select,
        .nebula-input,
        .galaxy-textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
        }

        .stardust-select option {
            background-color: #302b63;
        }

        .time-warp-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .cosmic-button {
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .cosmic-button:hover {
            transform: scale(1.2);
        }

        .galaxy-textarea {
            height: 100px;
            resize: vertical;
        }

        .warp-speed-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #ff00cc, #3333ff);
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .warp-speed-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
</head>

<body>
    <header>
        <h1>JaguarOne</h1>
        <h2>Appointment Scheduler</h2>
    </header>

    <main>
        <div id="appointment-form-container">
            <!-- The appointment form will be inserted here by the modal function -->
        </div>
        <card id="carousel-container" class="clear-node modala" insert="carousel-container" iter="1" index="0" boxes="5">
            <!-- The appointment form will be inserted here by the modal function -->
        </card>
    </main>

    <footer>
        <p>© 2024 JaguarOne. All rights reserved.</p>
    </footer>

    <script src="./dotpipe.js"></script>
    <script>
        // Load the appointment form
        modal("./generate_appointment_template.php", "appointment-form-container");
        function ready() {
            
            modal("./name.json", "carousel-container");
            // console.log(dataJson);
            // modala(dataJson, document.getElementById("carousel-container"));
        }
    </script>
</body>

</html>