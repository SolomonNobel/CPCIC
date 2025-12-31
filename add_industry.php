<?php
include 'db.php';

$conn->query("
INSERT INTO industry_data 
(industry_id, area, metric, unit, qty_2022, qty_2023, qty_2024, remarks)
VALUES
(1,'Energy Usage','Total electricity consumption','KWH',40,60,80,60),
(2,'Water Usage','Total water consumption','Cubic meters',30,45,50,42)
");

echo "Sample data inserted";
?>
