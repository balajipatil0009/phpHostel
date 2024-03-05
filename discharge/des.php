<?php 
require "../conn.php";
$stdID = $_POST['stdID'];
$reason = $_POST['reason'];

try{
    $sql = "SELECT id FROM rooms WHERE stdID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $stdID);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $roomID = $row['id'];
    
        $sql = "INSERT INTO discharge (stdID, roomID, reason) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $stdID, $roomID, $reason);
        $stmt->execute();

        $sql = "UPDATE rooms SET asgn=0 WHERE(stdID = ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $stdID);
        $stmt->execute();


        echo "Data inserted successfully.";
        header('location: des.html');
    } else {
        echo "No RoomID found for the provided stdID.";
    }    
     $stmt->close();
$conn->close();
  
}catch(Exception $e){
    echo $e;
}
?>