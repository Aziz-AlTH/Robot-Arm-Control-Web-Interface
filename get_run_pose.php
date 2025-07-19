<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT motor1, motor2, motor3, motor4, motor5, motor6 FROM poses WHERE id=$id";
    $result = $conn->query($sql)->fetch_assoc();
    echo json_encode(array_values($result));
} else {
    $result = $conn->query("SELECT * FROM poses WHERE status = 0");
    echo "<table><tr>
        <th>#</th><th>Motor 1</th><th>Motor 2</th><th>Motor 3</th><th>Motor 4</th><th>Motor 5</th><th>Motor 6</th><th>Action</th>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['motor1']}</td>
            <td>{$row['motor2']}</td>
            <td>{$row['motor3']}</td>
            <td>{$row['motor4']}</td>
            <td>{$row['motor5']}</td>
            <td>{$row['motor6']}</td>
            <td>
                <button onclick='loadPose({$row["id"]})'>Load</button>
                <button onclick='removePose({$row["id"]})'>Remove</button>
            </td>
        </tr>";
    }
    echo "</table>";
}
$conn->close();
?>
