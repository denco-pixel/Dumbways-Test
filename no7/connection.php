<?php
$server = 'localhost';
$username = 'root';
$password = '12345678';
$database = 'dumbways';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connection_error) {
    die('connection failed');
}

$query = 'select b.id, b.full_name, b.date_of_birth, b.place_of_birth_id, c.name as city, b.phone_number, b.address, b.last_education, b.religion, b.hobby from biodata b left join cities c on c.id=b.place_of_birth_id ';
if (isset($_GET['id'])) {
    $data = $conn->query($query . ' where b.id="' . $_GET['id'] . '"');
} else {
    $data = $conn->query($query);
}