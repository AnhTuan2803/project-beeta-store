
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Quản lý hóa đơn</h1>

                </div>

                <!-- <div class="col-sm-auto">
          <a class="btn btn-primary" href="index.php?act=them_danh_muc">Thêm danh mục</a>
        </div> -->
            </div>
            <!-- End Row -->
            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-right"></i>
                    </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="v_hoa_don.php">Tất cả hóa đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Archived</a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->



        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm hóa đơn" aria-label="Search">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>


                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 4, 9],
                        "width": "5%",
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 12,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                    <thead class="thead-light">
                        <tr>
                            <!-- <th scope="col" class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                  <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                  <label class="custom-control-label" for="datatableCheckAll"></label>
                </div>
                            </th> -->
                            <th>Mã hóa đơn</th>
                            <th>Ngày đặt hàng</th>
                            <th>Mã khách hàng</th>
                            <th>Tổng tiền</th>
                            <th>Thanh toán</th>
                            <th>Tình trạng</th>
                            <th style="padding-left:48px;">Điều khiển</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listhoadon as $hoadon) {
                            extract($hoadon);
                            $xem_ct_hoa_don = "index.php?act=xem_ct_hoa_don&id=" . $id_hd;
                            $xoa_hd = "index.php?act=xoa_hd&id=" . $id_hd;
                            if ($thanh_toan == 0) {
                                $tt = "Chuyển khoản";
                            } else if ($thanh_toan == 1) {
                                $tt = "Tiền mặt";
                            } else if ($thanh_toan == 2) {
                                $tt = "Ngân hàng liên kết";
                            }
                        ?>

                            <tr>
                                <td><?= $id_hd ?></td>
                                <td><?= $ngay_hd ?></td>
                                <th><?= $id_kh ?></th>
                                <th><?= $gia_tien ?></th>
                                <th><?= $tt ?></th>
                                <th>
                                        <select name="tinh_trang" id="">
                                            <option value="1" <?php echo ($tinh_trang == 1) ? "selected" : "" ?>>Chưa thanh toán</option>
                                            <option value="0" <?php echo ($tinh_trang == 0) ? "selected" : "" ?>>Đã thanh toán</option>
                                            <option value="2" <?php echo ($tinh_trang == 2) ? "selected" : "" ?>>Đơn hàng bị hủy</option>
                                        </select>
                                </th>
                                <td>
                                    <div class="btn-group" role="group">


                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">


                                            <div style="display: flex">
                                                <a style="padding-left:10px; padding-right:10px" class="dropdown-item" href="<?= $xem_ct_hoa_don ?>">
                                                    <i class="fa-solid tio-visible-outlined dropdown-item-icon"></i>Xem chi tiết
                                                </a>
                                                <a style="padding-left:10px; padding-right:10px" class="dropdown-item" href="<?= $xoa_hd ?>">
                                                    <i class="fa-solid fa-trash dropdown-item-icon"></i>Xóa
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
            <!-- End Table -->

        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->
    </form>
</main>

<!-- ========== END MAIN CONTENT ========== -->