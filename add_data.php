<?php
include 'db.php';

$industry_id = $_POST['industry_id'];
$area = $_POST['area'];
$metric = $_POST['metric'];
$unit = $_POST['unit'];
$q2022 = $_POST['q2022'];
$q2023 = $_POST['q2023'];
$q2024 = $_POST['q2024'];

$remarks = ($q2022 + $q2023 + $q2024) / 3;

$sql = "INSERT INTO industry_data
(industry_id, area, metric, unit, qty_2022, qty_2023, qty_2024, remarks)
VALUES (?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssdddi",
    $industry_id, $area, $metric, $unit,
    $q2022, $q2023, $q2024, $remarks
);

$stmt->execute();
echo "Data saved successfully";
?>
