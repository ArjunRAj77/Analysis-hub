<?php
    include "db.php";

    $resource = $conn->query('SELECT name FROM user WHERE id = (SELECT max(id) FROM user)');
    while ( $rows = $resource->fetch_assoc() ) {
        echo "<tr><td>".$rows['name']."</td></tr>";
    }
    $resource->free();
    $conn->close();
?>
