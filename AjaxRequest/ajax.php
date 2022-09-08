<?php
session_start();
// if (isset($_POST['propid'])) {
include "dbconnect.php";
session_start();
// $get1 = $_GET["pageno"];
// $get2 = $_GET["search"];
// $get3 = $_GET["location"];
// $get4 = $_GET["ownership"];
// $get5 = $_GET["minbed"];
// $get6 = $_GET["maxbed"];
// $get7 = $_GET["minprice"];
// $get8 = $_GET["maxprice"];
// $get9 = $_GET["minland"];
// $get10 = $_GET["maxland"];
// $pageno;


$pageno = $_GET['pageno'];

// echo json_encode($pageno); 

$no_of_records_per_page = 6;
$offset = ($pageno - 1);
$offset = $offset * $no_of_records_per_page;

$sql = "SELECT * FROM property_list WHERE property_live = 'on'";
$con1 = '';
$con2 = [];
$con3 = '';
$con4 = '';
$con5 = '';
$con6 = '';
$con7 = '';
$con8 = '';
$con9 = '';
$con10 = '';

$next1 = '';
$next2 = '';
$next3 = '';
$next4 = '';
$next5 = '';
$next6 = '';
$next7 = '';
$next8 = '';
$next9 = '';
$next10 = '';


if (isset($_GET['search'])) {
    $con1 = $_GET['search'];
}
if (isset($_GET['propertytype'])) {
    $con10 = $_GET['propertytype'];
}

if (isset($_GET['location'])) {
    $con2 = $_GET['location'];
}

if (isset($_GET['ownership'])) {
    $con3 = $_GET['ownership'];
}

if (isset($_GET['minbed'])) {
    $con4 = $_GET['minbed'];
}

if (isset($_GET['maxbed'])) {
    $con5 = $_GET['maxbed'];
}

if (isset($_GET['minprice'])) {
    $con6 = $_GET['minprice'];
}

if (isset($_GET['maxprice'])) {
    $con7 = $_GET['maxprice'];
}

if (isset($_GET['minland'])) {
    $con8 = $_GET['minland'];
}

if (isset($_GET['maxland'])) {
    $con9 = $_GET['maxland'];
}

$and = ' AND';
$or = ' OR';

$property_id = ' property_id LIKE ';
$property_city = ' property_city IN ( ';
$property_desc = ' property_desc LIKE ';
$property_status = ' property_status LIKE ';
$property_tittle = ' property_tittle LIKE ';
$property_minbedroom = ' bedroom  >= ';
$property_maxbedroom = ' bedroom  <= ';
$property_minprice = ' property_price  >= ';
$property_maxprice = ' property_price  <= ';
$property_minland = ' land_size  >= ';
$property_maxland = ' land_size  <= ';
$property_type = ' property_type  LIKE ';


if ($con1 != null) {
    $sql = $sql . $and . $property_id . "'%$con1%'";
    $next1 = $con1;
}
if ($con2 != null) {
    $numItems = count($con2);
    $i = 0;
    $sql = $sql . $and . $property_city;
    foreach ($con2 as $city) {
        $sql = $sql . "'$city'";
        // $next2 = $next2 . $city;
        if (++$i === $numItems) {
            $sql = $sql . " ) ";
            $next2 = $next2 . "location%5B%5D=" . $city;
        } else {
            $sql = $sql . " , ";
            $next2 = $next2 . "location%5B%5D=" . $city . "&";
        }
    }
}
if ($con3 != null) {
    $sql = $sql . $and . $property_status . "'%$con3%'";
    $next3 = $con3;
}
if ($con4 != null) {
    $sql = $sql . $and . $property_minbedroom . "$con4";
    $next4 = $con4;
}
if ($con5 != null) {
    $sql = $sql . $and . $property_maxbedroom . "$con5";
    $next5 = $con5;
}
if ($con6 != null) {
    $sql = $sql . $and . $property_minprice . "$con6";
    $next6 = $con6;
}
if ($con7 != null) {
    $sql = $sql . $and . $property_maxprice . "$con7";
    $next7 = $con7;
}
if ($con8 != null) {
    $sql = $sql . $and . $property_minland . "$con8";
    $next8 = $con8;
}
if ($con9 != null) {
    $sql = $sql . $and . $property_maxland . "$con9";
    $next9 = $con9;
}
if ($con10 != null) {
    $sql = $sql . $and . $property_type . "'%$con10%'";
    $next10 = $con10;
}

$sql = $sql . " ORDER BY property_number DESC LIMIT $offset, $no_of_records_per_page";

// $sql = "SELECT * FROM property_list WHERE property_live = 'on' ORDER BY property_number DESC LIMIT 0, 6";
// echo json_encode($sql);


// $query = "SELECT * FROM property_list ORDER BY property_number DESC LIMIT $offset, $no_of_records_per_page";

$result = mysqli_query($koneksi, $sql);
// if($result){
//     echo json_encode("Sukses");
// } else {
//     echo json_encode("gagal");
// }


$property_id = '';
$property_tittle = '';
$property_desc = '';
$property_price = '';
$property_city = '';
$property_type = '';
$property_status = '';
$land_size = '';
$bedroom = '';
$bathroom = '';
$building_size = '';
$facility = [];
$image_link = [];
$agent = '';
$youtube_link = '';
$d_link = '';
$property_available = '';
$property_note = '';
$property_address = '';
$gmaps = '';
$property_floor = '';
$property_year = '';
$property_ac = '';
$property_furnish = '';
$property_parking = '';
$property_garden = '';
$property_manage = '';
$owner = '';
$owner_phone = '';
$owner_email = '';
$property_name = '';
$property_live = '';
$road_width = '';
$road_type = '';
$property_pondok = '';
$property_pondok = '';
$total_lease = '';
$lease_expire = '';
$extension = '';

// echo json_encode($result);
$banyaknya = 0;
while ($row = mysqli_fetch_array($result)) {
    $property_id = $row['property_id'];
    $property_tittle = mb_strimwidth($row['property_tittle'], 0, 30, "...");
    $property_desc = $row['property_desc'];
    $property_price = $row['property_price'];
    $property_price = $row['property_price'];
    $property_city = $row['property_city'];
    $property_id = $row['property_id'];
    $property_type = $row['property_type'];
    $property_status = $row['property_status'];
    $property_price = $row['property_price'];
    $land_size = $row['land_size'];
    $building_size = $row['building_size'];
    $facility = $row['facility'];
    $image_link = $row['images_link'];
    $agent = $row['agent'];
    $bedroom = $row['bedroom'];
    $bathroom = $row['bathroom'];
    $youtube_link = $row['youtube_link'];
    $d_link = $row['3d_link'];
    $property_available = $row['property_available'];
    $property_note = $row['property_note'];
    $property_address = $row['property_address'];
    $gmaps = $row['gmaps'];
    $property_floor = $row['property_floor'];
    $property_year = $row['property_year'];
    $property_ac = $row['property_ac'];
    $property_furnish = $row['property_furnish'];
    $property_parking = $row['property_parking'];
    $property_garden = $row['property_garden'];
    $property_manage = $row['property_manage'];
    $owner = $row['owner'];
    $owner_phone = $row['owner_phone'];
    $owner_email = $row['owner_email'];
    $property_name = $row['property_name'];
    $property_live = $row['property_live'];
    $road_width = $row['road_width'];
    $road_type = $row['road_type'];
    $property_pondok = $row['property_pondok'];
    $slider = $row['slider'];
    $total_lease = $row['total_lease'];
    $lease_expire = $row['lease_expire'];
    $extension = $row['extension'];

    $facility = explode(',', $facility);
    $image_link = explode(',', $image_link);

    $banyaknya = $banyaknya + 1;
    $return_arr[] = array(
        'property_id' => $property_id,
        'property_tittle' => $property_tittle,
        'property_price' => $property_price,
        'property_city' => $property_city,
        'property_type' => $property_type,
        'property_status' => $property_status,
        'land_size' => $land_size,
        'building_size' => $building_size,
        'agent' => $agent,
        'bedroom' => $bedroom,
        'bathroom' => $bathroom,
        'property_available' => $property_available,
        'property_address' => $property_address,
        'gmaps' => $gmaps,
        'property_floor' => $property_floor,
        'property_year' => $property_year,
        'property_ac' => $property_ac,
        'property_furnish' => $property_furnish,
        'property_parking' => $property_parking,
        'property_garden' => $property_garden,
        'property_manage' => $property_manage,
        'owner' => $owner,
        'owner_phone' => $owner_phone,
        'owner_email' => $owner_email,
        'property_name' => $property_name,
        'property_live' => $property_live,
        'road_width' => $road_width,
        'road_type' => $road_type,
        'property_pondok' => $property_pondok,
        'slider' => $slider,
        'total_lease' => $total_lease,
        'lease_expire' => $lease_expire,
        'extension' => $extension,
        'front_image' => $image_link[0],
        'banyaknya' => $banyaknya
    );
}
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: https://bvrgroupasia.test/');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    // header('Content-Type: text/plain');
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