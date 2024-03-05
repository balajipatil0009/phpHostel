<?php
require_once "../collage/conn.php";
$resister = "CREATE TABLE IF NOT EXISTS students(
    stdID INT PRIMARY KEY AUTO_INCREMENT,
    clgID INT,
    course VARCHAR(50),
    contact BIGINT,
    parent VARCHAR(50),
    pcontact BIGINT,
    address VARCHAR(100),
    FOREIGN KEY (clgID) REFERENCES collages(clgID),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

$report="CREATE TABLE IF NOT EXISTS report(id int AUTO_INCREMENT PRIMARY KEY, report TEXT, email TEXT, createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP);";

$feedback="CREATE TABLE IF NOT EXISTS feedback(id int AUTO_INCREMENT PRIMARY KEY, feedback TEXT, email TEXT, createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP);";

$rooms = "CREATE TABLE IF NOT EXISTS rooms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    stdID INT,
    asgn BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (stdID) REFERENCES students(stdID),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

$collages="CREATE TABLE IF NOT EXISTS collages(
    clgID INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT,
    teacher_nm TEXT,
    contact_number BIGINT,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
$fees="CREATE TABLE IF NOT EXISTS fees(
    feeID INT AUTO_INCREMENT PRIMARY KEY,
    feeType TEXT,
   
);";

 $discharge="CREATE TABLE IF NOT EXISTS discharge (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stdID INT,
    roomID INT,
    reason TEXT,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (stdID) REFERENCES students(stdID),
    FOREIGN KEY (roomID) REFERENCES rooms(id)
);";

$comb = "".$feedback.$collages.$fees.$report.$resister.$rooms.$discharge;
  
  try {
$que = $conn->multi_query($discharge);
echo "query Execuded table created";
  } catch (Exception $e) {
    echo "query not Execuded".$e;
  }

?>