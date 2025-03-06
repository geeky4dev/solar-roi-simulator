<?php
// Here is the calculate.php script that processes the input data from the Solar PV ROI Simulator and calculates the estimated Return on Investment (ROI).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cost = $_POST["cost"];
    $capacity = $_POST["capacity"];
    $consumption = $_POST["consumption"];
    $tariff = $_POST["tariff"];
    $solar_hours = $_POST["solar_hours"];

    // Validate input (avoid division by zero)
    if ($cost <= 0 || $capacity <= 0 || $tariff <= 0 || $solar_hours <= 0) {
        die("Error: All values must be greater than zero.");
    }

    // Calculate solar energy production
    $daily_production = $capacity * $solar_hours;  // kWh/day
    $monthly_production = $daily_production * 30;  // kWh/month
    $annual_production = $monthly_production * 12; // kWh/year

    // Calculate potential savings
    $monthly_savings = min($monthly_production, $consumption) * $tariff;
    $annual_savings = $monthly_savings * 12;

    // Calculate ROI (years to recover the investment)
    $roi_years = $cost / $annual_savings;

    // Display results
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Solar PV ROI Results</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
    </head>
    <body class='bg-light'>
        <div class='container mt-5'>
            <div class='card shadow p-4'>
                <h2 class='text-center text-success'>ROI Calculation Results</h2>
                <p><strong>Daily Production:</strong> " . round($daily_production, 2) . " kWh</p>
                <p><strong>Monthly Production:</strong> " . round($monthly_production, 2) . " kWh</p>
                <p><strong>Annual Production:</strong> " . round($annual_production, 2) . " kWh</p>
                <p><strong>Monthly Savings:</strong> $" . round($monthly_savings, 2) . "</p>
                <p><strong>Annual Savings:</strong> $" . round($annual_savings, 2) . "</p>
                <h4 class='text-primary'>Estimated ROI: " . round($roi_years, 1) . " years</h4>
                <a href='index.html' class='btn btn-primary mt-3'>Go Back</a>
            </div>
        </div>
    </body>
    </html>";
} else {
    die("Invalid request.");
}
?>
