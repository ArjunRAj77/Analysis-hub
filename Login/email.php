<?php
    include "db.php";

    $resource = $conn->query('SELECT email FROM user WHERE id = (SELECT max(id) FROM user)');
    while ( $rows = $resource->fetch_assoc() ) {
        echo "<tr><td>".$rows['email']."</td></tr>";
    }
    $resource->free();
    $conn->close();
?>
