<?php include 'layout/header.php';
?>
<meta name="description" content="BVR property specialises in Villa Sales, Villa Rentals, both Leasehold and Freehold as well as Villa Rentals services">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container {
        background: #fff;
        border: 1px solid #ccc;
        padding: 30px;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 3px;
        box-shadow: none !important;
        margin-bottom: 15px;
    }

    .form-control:focus {
        border: 1px solid #34495e;
    }

    .select2.select2-container {
        width: 1 0rem !important;
    }

    .select2.select2-container .select2-selection {
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        height: 34px;
        /* margin-bottom: 15px; */
        outline: none !important;
        transition: all .15s ease-in-out;
    }

    .select2.select2-container .select2-selection .select2-selection__rendered {
        color: #333;
        line-height: 32px;
        padding-right: 33px;
    }

    .select2.select2-container .select2-selection .select2-selection__arrow {
        background: #f8f8f8;
        border-left: 1px solid #ccc;
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
        height: 32px;
        width: 33px;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
        background: #f8f8f8;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
        -webkit-border-radius: 0 3px 0 0;
        -moz-border-radius: 0 3px 0 0;
        border-radius: 0 3px 0 0;
    }

    .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
        border: 1px solid #34495e;
    }

    .select2.select2-container .select2-selection--multiple {
        height: auto;
        min-height: 34px;
    }

    .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
        margin-top: 0;
        height: 32px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
        display: block;
        padding: 0 4px;
        line-height: 29px;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin: 4px 4px 0 0;
        padding: 0 6px 0 22px;
        height: 24px;
        line-height: 24px;
        font-size: 12px;
        position: relative;
    }

    .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        margin: 0;
        text-align: center;
        color: #e74c3c;
        font-weight: bold;
        font-size: 16px;
    }

    .select2-container .select2-dropdown {
        background: transparent;
        border: none;
        margin-top: -5px;
    }

    .select2-container .select2-dropdown .select2-search {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-search input {
        outline: none !important;
        border: 1px solid #34495e !important;
        border-bottom: none !important;
        padding: 4px 6px !important;
    }

    .select2-container .select2-dropdown .select2-results {
        padding: 0;
    }

    .select2-container .select2-dropdown .select2-results ul {
        background: #fff;
        border: 1px solid #34495e;
    }

    .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
        background-color: #3498db;
    }
</style>
<title>Bali Villa For Sale</title>
</head>

<body class="bg-gray-200 text-black">

    <!-- Property List -->
    <div class="mx-auto w-10/12 mt-7">
        <div class="flex my-3">
            <p class="flex-none pr-6 font-bold">PROPERTY LIST</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>

        <div id="cardnya" class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-10">
            <!-- Here the Card -->
        </div>

        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-5 my-10">
            <div class=" flex justify-center mx-auto">
                <ul class="flex pagination">
                    <li class=""><a id="linkprev"><button class="h-10 px-5 text-gray-600 bg-white border border-r-0 border-gray-600 hover:bg-gray-100">Prev</button></a>
                    </li>
                    <li class=""><a id="linknext"><button class="h-10 px-5 text-gray-600 bg-white border border-gray-600 hover:bg-gray-100">Next</button></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex my-3">
            <p class="flex-none pr-6 font-bold">OUR ONLINE MARKETING PARTNERS</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 my-2 items-center">
            <div class=" filter col-span-1">
                <img class="mx-auto w-45 " src="/partner/lamudi.png" alt="">
            </div>
            <div class=" filter col-span-1">
                <img class="mx-auto w-45" src="/partner/rumahku.png" alt="">
            </div>
            <div class=" filter col-span-1">
                <img class="mx-auto w-45" src="/partner/rumah123.png" alt="">
            </div>
            <div class=" filter col-span-1">
                <img class="mx-auto w-45" src="/partner/dotproperty.png" alt="">
            </div>
            <div class=" filter col-span-1">
                <img class="mx-auto w-45" src="/partner/99co.png" alt="">
            </div>
        </div>
    </div>

    <!-- https://www.bvrproperty.com/home?search=&propertytype=&ownership=&minbed=&maxbed=&minprice=&maxprice=&minland=&maxland= -->

    <script>
        $(document).ready(function() {
            link = window.location.href;

            if (link.indexOf("pageno=") == -1) {
                if (link.indexOf("?") == -1) {
                    link = link + "?pageno=1";
                } else {
                    link = link + "&pageno=1";
                }
            }

            function changePageNo(link, number) {
                function arrayContains(needle, arrhaystack) {
                    return (arrhaystack.indexOf(needle) > -1);
                }
                var link_length = link.length;
                var Mark = link.indexOf("pageno");
                var get_param = link.slice(Mark, link_length);
                var pageno_splited = get_param.split("=");
                pageno_splited[1] = number;
                var changed_pageno = pageno_splited.join("=");
                var original_link = link.slice(0, Mark);
                var results = original_link + changed_pageno;
                return (results);
            }

            <?php
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            ?>

            <?php
            if (isset($_GET['location'])) {
                $loc = $_GET['location'];
                $locations = '';
                if ($loc != null) {
                    $numItems = count($loc);
                    $i = 0;
                    foreach ($loc as $city) {
                        if (++$i === $numItems) {
                            $locations = $locations . "location%5B%5D=" . $city;
                        } else {
                            $locations = $locations . "location%5B%5D=" . $city . "&";
                        }
                    }
                }
            }
            ?>

            var pageno = <?= $pageno ?>;
            var pageno_next = pageno + 1;
            var pageno_prev = pageno - 1;

            if (pageno_prev == 0) {
                $("#linkprev").attr("href", "#");
            } else {
                $("#linknext").attr("href", changePageNo(link, pageno_prev));
            }


            $("#linknext").attr("href", changePageNo(link, pageno_next));
            var banyaknyaData = 0;
            $.ajax({
                type: "get",
                url: "ajax.php?<?= $locations ?>",
                data: {
                    <?php
                    if ($_GET['search'] != '') {
                        echo "search: '" . $_GET['search'] . "',";
                    }
                    if ($_GET['propertytype'] != '') {
                        echo "propertytype: '" . $_GET['propertytype'] . "',";
                    }
                    if ($_GET['ownership'] != '') {
                        echo "ownership: '" . $_GET['ownership'] . "',";
                    }
                    if ($_GET['minbed'] != '') {
                        echo "minbed: " . $_GET['minbed'] . ",";
                    }
                    if ($_GET['maxbed'] != '') {
                        echo "maxbed: " . $_GET['maxbed'] . ",";
                    }
                    if ($_GET['minprice'] != '') {
                        echo "minprice: " . $_GET['minprice'] . ",";
                    }
                    if ($_GET['maxprice'] != '') {
                        echo "maxprice: " . $_GET['maxprice'] . ",";
                    }
                    if ($_GET['minland'] != '') {
                        echo "minland: " . $_GET['minland'] . ",";
                    }
                    if ($_GET['maxland'] != '') {
                        echo "maxland: " . $_GET['maxland'] . ",";
                    }
                    ?>
                    pageno: pageno,
                },
                dataType: "JSON",
                success: function(data) {
                  banyaknyaData = data.length;
                }
            });

            setInterval(() => {
                $.ajax({
                    type: "get",
                    url: "ajax.php?<?= $locations ?>",
                    data: {
                        <?php
                        if ($_GET['search'] != '') {
                            echo "search: '" . $_GET['search'] . "',";
                        }
                        if ($_GET['propertytype'] != '') {
                            echo "propertytype: '" . $_GET['propertytype'] . "',";
                        }
                        if ($_GET['ownership'] != '') {
                            echo "ownership: '" . $_GET['ownership'] . "',";
                        }
                        if ($_GET['minbed'] != '') {
                            echo "minbed: " . $_GET['minbed'] . ",";
                        }
                        if ($_GET['maxbed'] != '') {
                            echo "maxbed: " . $_GET['maxbed'] . ",";
                        }
                        if ($_GET['minprice'] != '') {
                            echo "minprice: " . $_GET['minprice'] . ",";
                        }
                        if ($_GET['maxprice'] != '') {
                            echo "maxprice: " . $_GET['maxprice'] . ",";
                        }
                        if ($_GET['minland'] != '') {
                            echo "minland: " . $_GET['minland'] . ",";
                        }
                        if ($_GET['maxland'] != '') {
                            echo "maxland: " . $_GET['maxland'] . ",";
                        }
                        ?>
                        pageno: pageno,
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $("#cardnya").html('');
                        $.each(data, function(index, val) {
                            $("#cardnya").append('<div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr20 col-span-1"><a href="#" class="">' +
                                '<div class="p-3">' +
                                '<p class="font-semibold">' + data[index].property_tittle + '</p>' +
                                '<p class="text-red-600">' + data[index].property_id + '</p>' +
                                '</div>' +
                                '<img class="object-cover h-56 w-full" loading="lazy" src="' + data[index].front_image + '">' +
                                '<div class="ml-auto -mt-48 w-max">' +
                                '</div>' +
                                '<div class="-mt-3"></div>' +
                                '<div class="px-4 py-3 grid grid-cols-2 gap-3 mt-48">' +
                                '<div class="flex">' +
                                '<div class="w-8">' +
                                '<i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>' +
                                '</div>' +
                                '<p class="text-sm h-full my-auto">' + data[index].property_city + '</p>' +
                                '</div>' +
                                '<div class="flex">' +
                                '<i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>' +
                                '<p class="text-sm">' + data[index].land_size + ' sqm</p>' +
                                '</div>' +
                                '<div class="flex">' +
                                '<i class="fas fa-home pr-2 w-8"></i>' +
                                '<p class="text-sm">' + data[index].property_status + '</p>' +
                                '</div>' +
                                '<div class="flex">' +
                                '<i class="fas fa-bed pr-2 w-8"></i>' +
                                '<p class="text-sm">' + data[index].bedroom + ' Bedroom</p>' +
                                '</div>' +
                                '</div>' +
                                '<div class="flex justify-end">' +
                                '<p class="matauang pt-4 text-right font-bold">IDR</p>' +
                                '<p id="property" class="currencyprop p-4 text-right font-bold">' + data[index].property_price + '</p>' +
                                '</div>' +
                                '</a></div>');
                        });
                    }
                });
            }, 1000);
        });
    </script>