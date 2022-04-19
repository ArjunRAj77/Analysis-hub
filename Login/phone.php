<?php
    include "db.php";

    $resource = $conn->query('SELECT phone FROM user WHERE id = (SELECT max(id) FROM user)');
    while ( $rows = $resource->fetch_assoc() ) {
        echo "<tr><td>".$rows['phone']."</td></tr>";
    }
    $resource->free();
    $conn->close();
?>
