<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    if ($username == 'admin' && $password == 'admin') {
        header('Location: http://localhost/myvulnrouter/router');
    } else {
        echo "Not welcome";
    }
?>