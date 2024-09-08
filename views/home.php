<?php

    echo "<h1>Users List</h1>";

    if (!empty($users)) {
        echo "<ul>";
            foreach($users as $user) {
                echo "<li>" . htmlspecialchars($user['firstname']) . "</li>";
            }
        echo "</ul>";
    } else {
        echo "<p>Users not found.</p>";
    }

?>