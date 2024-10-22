<?php
    $db_host = getenv('DB_HOST');
    $db_name = getenv('DB_NAME');
    $db_user = getenv('DB_USER');
    $base_url = getEnv('BASE_URL');
    $password_file_path = getenv('APP_USER_PASSWORD_FILE_PATH');
    $db_pass = trim(file_get_contents($password_file_path));

    define("HOSTNAME",  $db_host);
    define("DBNAME", $db_name);
    define("USERNAME", $db_user);
    define("PASSWORD", $db_pass);
    define("BASEURL", $base_url);
?>