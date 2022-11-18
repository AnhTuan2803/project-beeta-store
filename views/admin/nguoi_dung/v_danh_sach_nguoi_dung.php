<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Danh sách Tài Khoản</h1>

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
                        <a class="nav-link active" href="#">Tất cả tài khoản</a>
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
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm tài khoản" aria-label="Search users">
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
                            <th>Id</th>
                            <th>Vai trò</th>
                            <th>Họ tên</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Ngày đăng ký</th>
                            <th style="padding-left:48px;">Điều khiển</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($listnguoidung as $nguoidung) {
                            extract($nguoidung);
                            if ($id_vai_tro == 1) {
                                $vai_tro = "Admin";
                            }else if($id_vai_tro == 0){
                                $vai_tro = "Khách hàng";
                            }
                            $sua_nd = "index.php?act=sua_nd&id=" . $id_nd;
                            $xoa_nd = "index.php?act=xoa_nd&id=" . $id_nd;
                            echo '<tr>
                            
                
                 
                  <td>' . $id_nd . '</td>
                  <td>' . $vai_tro . '</td>
                  <th>' . $ho_ten . '</th>
                  <th>' . $ten_dang_nhap . '</th>
                  <th>' . $mat_khau . '</th>
                  <th>' . $email . '</th>
                  <th>' . $ngay_dang_ky . '</th>
                  
                  <td>
                    <div class="btn-group" role="group">
                    
                   
                      <!-- Unfold -->
                      <div class="hs-unfold btn-group">
                        

    <div style="display: flex">
                        <a style="padding-left:10px; padding-right:10px" class="dropdown-item" href="' . $sua_nd . '">
                        <i class="fa-solid fa-screwdriver-wrench dropdown-item-icon"></i>Sửa
                        </a>
                          <a style="padding-left:10px; padding-right:10px" class="dropdown-item" href="' . $xoa_nd . '">
                          <i class="fa-solid fa-trash dropdown-item-icon"></i>Xóa
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </td>
                </tr>';
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


</main>
<!-- ========== END MAIN CONTENT ========== -->