 <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-orders.html">Hóa đơn</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Hóa đơn chi tiết</li>
                </ol>
              </nav>
              
              <div class="d-sm-flex align-items-sm-center">
                <h1 class="page-header-title">Hóa đơn #ID HOA DON</h1>
                <span class="badge badge-soft-success ml-sm-3">
                  <span class="legend-indicator bg-success"></span>Paid
                </span>
                <span class="badge badge-soft-info ml-2 ml-sm-3">
                  <span class="legend-indicator bg-info"></span>Fulfilled
                </span>
                <span class="ml-2 ml-sm-3">
                  <i class="tio-date-range"></i> 
                </span>
              </div>

              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;" onclick="window.print(); return false;">
                  <i class="tio-print mr-1"></i> In hóa đơn
                </a>
                
                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                    More options <i class="tio-chevron-down"></i>
                  </a>

                  <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                    <a class="dropdown-item" href="#">
                      <i class="tio-copy dropdown-item-icon"></i> Duplicate
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-clear dropdown-item-icon"></i> Cancel order
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-archive dropdown-item-icon"></i> Archive
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-visible dropdown-item-icon"></i> View order status page
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-edit dropdown-item-icon"></i> Edit order
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous order">
                <i class="tio-arrow-backward"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next order">
                <i class="tio-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Chi tiết hóa đơn <span class="badge badge-soft-dark rounded-circle ml-1">4</span></h4>
                <a class="link" href="javascript:;">Edit</a>
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <div class="card-body">
                <!-- Media -->
                <div class="media">
                  <div class="avatar avatar-xl mr-3">
                    <img class="img-fluid" src="..\..\assets\admin\img\400x400\img26.jpg" alt="Image Description">
                  </div>    

                  <div class="media-body">
                    <div class="row">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <a class="h5 d-block" href="ecommerce-product-details.html">Topman shoe in green</a>
                      </div>

                      <div class="col col-md-2 align-self-center">
                        <h5>$21.00</h5>
                      </div>

                      <div class="col col-md-2 align-self-center">
                        <h5>2</h5>
                      </div>

                      <div class="col col-md-2 align-self-center text-right">
                        <h5>$42.00</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Media -->

                <hr>

                <!-- Media -->
        
                <!-- End Media -->

                <div class="row justify-content-md-end mb-3">
                  <div class="col-md-8 col-lg-7">
                    <dl class="row text-sm-right">
                      <dt class="col-sm-6">Số lượng sản phẩm:</dt>
                      <dd class="col-sm-6">2</dd>
                      <dt class="col-sm-6">Tổng tiền:</dt>
                      <dd class="col-sm-6">$65.00</dd>
                      <dt class="col-sm-6">Thanh toán:</dt>
                      <dd class="col-sm-6">$65.00</dd>
                    </dl>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">
                  Shipping activity
                  <span class="badge badge-soft-dark ml-1">
                    <span class="legend-indicator bg-dark"></span>Marked as fulfilled
                  </span>
                </h4>
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <div class="card-body">
                <!-- Step -->
                <ul class="step step-icon-xs">
                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <small class="step-divider">Wednesday, 19 August</small>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Delivered</a>
                        </h5>

                        <p class="font-size-sm mb-0">4:17 AM</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Out for delivery</a>
                        </h5>

                        <p class="font-size-sm mb-0">2:38 AM</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Package arrived at the final delivery station</a>
                        </h5>

                        <p class="font-size-sm mb-0">2:00 AM</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <small class="step-divider">Tuesday, 18 August</small>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Tracking number</a>
                        </h5>

                        <a class="link" href="#">3981241023109293</a>
                        <p class="font-size-sm mb-0">6:29 AM</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Package has dispatched</a>
                        </h5>

                        <p class="font-size-sm mb-0">6:29 AM</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                    <div class="step-content-wrapper">
                      <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                      <div class="step-content">
                        <h5 class="mb-1">
                          <a class="text-dark" href="#">Order was placed</a>
                        </h5>

                        <p class="font-size-sm mb-0">Hóa đơn *ID HOA DON</p>
                      </div>
                    </div>
                  </li>
                  <!-- End Step Item -->
                </ul>
                <!-- End Step -->

                <small>Times are shown in the local time zone.</small>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Khách hàng</h4>
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <div class="card-body">
                <a class="media align-items-center" href="ecommerce-customer-details.html">
                  <div class="avatar avatar-circle mr-3">
                    <img class="avatar-img" src="..\..\assets\admin\img\160x160\img10.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-body text-hover-primary">Amanda Harvey</span>
                  </div>
                  <div class="media-body text-right">
                    <i class="tio-chevron-right text-body"></i>
                  </div>
                </a>
                
                <hr>
                
                <div class="d-flex justify-content-between align-items-center">
                  <h5>Contact info</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <ul class="list-unstyled list-unstyled-py-2">
                  <li>
                    <i class="tio-online mr-2"></i>
                    ella@example.com
                  </li>
                  <li>
                    <i class="tio-android-phone-vs mr-2"></i>
                    +1 (609) 972-22-22
                  </li>
                </ul>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Shipping address</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="..\..\assets\admin\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Billing address</h5>
                  <a class="link" href="javascript:;">Edit</a>
                </div>

                <span class="d-block">
                  45 Roker Terrace<br>
                  Latheronwheel<br>
                  KW5 8NW, London<br>
                  UK <img class="avatar avatar-xss avatar-circle ml-1" src="..\..\assets\admin\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                </span>
                
                <div class="mt-3">
                  <h5 class="mb-0">Mastercard</h5>
                  <span class="d-block">Card Number: ************4291</span>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->
      </div>
