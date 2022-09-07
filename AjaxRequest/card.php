
            <?php
            include 'dbconnect.php';
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 15;
            $offset = ($pageno - 1) * $no_of_records_per_page;


            $total_pages_sql = "SELECT COUNT(*) FROM cardwebsite";
            $result = mysqli_query($koneksi, $total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            // if (isset($_GET['search'])) {
            //     $search = $_GET['search'];
            //     $sql = "SELECT * FROM property_list WHERE property_live = 'on' AND property_id LIKE '%" . $search . "%' OR property_tittle LIKE '%" . $search . "%' OR property_desc LIKE '%" . $search . "%' OR property_type LIKE '%" . $search . "%' OR property_city LIKE '%" . $search . "%' OR property_status LIKE '%" . $search . "%' ";
            // } else if (isset($_GET['villa'])) {
            //     $search = $_GET['villa'];
            //     $sql = "SELECT * FROM property_list WHERE property_type = 'Villa' AND property_status LIKE '%$search%' ORDER BY property_number DESC";
            // } else if (isset($_GET['land'])) {
            //     $search = $_GET['land'];
            //     $sql = "SELECT * FROM property_list WHERE property_type = 'Land' AND property_status LIKE '%$search%' ORDER BY property_number DESC";
            // } else {
            //     $sql = "SELECT * FROM property_list WHERE property_live = 'on' ORDER BY property_number DESC LIMIT $offset, $no_of_records_per_page";
            // }
            $sql = "SELECT * FROM cardwebsite";
            $res_data = mysqli_query($koneksi, $sql);
            $angka = 0;
            while ($row = mysqli_fetch_array($res_data)) {
                $image_link2 = '';
                $image_link1 = '';
                $image_link1 = explode(',', $row['images']);
                foreach ($image_link1 as $link1) {
                    $image_link2 = $link1;
                    break;
                }
            ?>
                <!-- Hasil 1 -->
                <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr20 col-span-1">
                    <a href="#" class="">
                        <div class="p-3">
                            <p class="font-semibold"><?= mb_strimwidth($row['name'], 0, 30, "..."); ?></p>
                            <p class="text-red-600">BLI1300</p>
                        </div>
                        <img class="object-cover h-56 w-full" loading="lazy" src="uploader/<?= $image_link2; ?>">
                        <div class="ml-auto -mt-48 w-max">
                        </div>
                        <div class="-mt-3"></div>
                        <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-48">
                            <div class="flex">
                                <div class="w-8">
                                    <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                                </div>
                                <p class="text-sm h-full my-auto">Badung</p>
                            </div>
                            <div class="flex">
                                <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                                <p class="text-sm">10,000 sqm</p>
                            </div>
                            <div class="flex">
                                <i class="fas fa-home pr-2 w-8"></i>
                                <p class="text-sm">Leasehold</p>
                            </div>
                            <div class="flex">
                                <i class="fas fa-bed pr-2 w-8"></i>
                                <p class="text-sm">Bedroom</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <p class="matauang pt-4 text-right font-bold">IDR</p>
                            <p id="property" class="currencyprop p-4 text-right font-bold">10,000,000</p>
                        </div>
                    </a>
                </div>
            <?php
            $angka = $angka + 1;
            }
            ?>