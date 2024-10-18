<?php
try {
    $db_host = getenv('DB_HOST');
    $db_name = getenv('DB_NAME');
    $db_user = getenv('DB_USER');
    $root_password_file_path = getenv('ROOT_PASSWORD_FILE_PATH');
    $password_file_path = getenv('APP_USER_PASSWORD_FILE_PATH');
    $db_pass = trim(file_get_contents($password_file_path));
    $db_root_pass = trim(file_get_contents($root_password_file_path));

    $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    echo '<h4 style="color: green">Connected to MySql env sucessfully.</h4>';
    echo '<p style="color: green">' . "db host " . $db_host . '</p>';
    echo '<p style="color: green">' . "db name " . $db_name . '</p>';
    echo '<p style="color: green">' . "db user " . $db_user . '</p>';
    echo '<p style="color: green">' . "db pass " . $db_pass . '</p>';
    echo '<p style="color: green">' . "db root pass " . $db_rootpass . '</p>';
}
catch (PDOException $e) {
    echo '<h4 style="color: red">Fail to connect to database.</h4>';
    $message = $e->getMessage();
    echo '<p style="color: red">' . "message " . $message . '</p>';
    echo '<p style="color: red">' . "db host " . $db_host . '</p>';
    echo '<p style="color: red">' . "db name " . $db_name . '</p>';
    echo '<p style="color: red">' . "db user " . $db_user . '</p>';
    echo '<p style="color: red">' . "db pass " . $db_pass . '</p>';
    echo '<p style="color: red">' . "db root pass " . $db_rootpass . '</p>';
}
?>