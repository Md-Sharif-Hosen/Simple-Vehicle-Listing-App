<?php
require_once "../../app/classes/VehicleManager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicleManager = new VehicleManager('', '', '', '');
    $vehicleManager->addVehicle([
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ]);
    header('Location:../index.php');
}
include './header.php'
?>

<div class="container mb-4">
    <h1>Add Vehicle</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Vehicle Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Vehicle Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
</div>