<?php
session_start();
// if (isset($_POST['id'])) {
    include "dbconnect.php";
    $query = "SELECT * FROM tablename";

    $result = mysqli_query($koneksi, $query);
    

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];

        $return_arr[] = array(
            'id' => $id,
            
        );
    }
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: https://sitename.com/');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($return_arr);
// } else {
//     $return_arr[] = array(
//         'error' => 403,
//         'access' => "Denied",
//     );
//     echo json_encode($return_arr);
// }