<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add product</li>
                </ol>
              </nav> -->

              <h1 class="page-header-title">Thêm Sản Phẩm</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-12">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Thông tin sản phẩm</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form Group -->
                <div class="form-group">
                  <label for="productNameLabel" class="input-label">Danh mục sản phẩm <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                  <div class="col-4">
                        <div class="input-group-prepend">
                          <!-- Select -->
                          <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                            <option value="Size">Size</option>
                            <option value="Color">Color</option>
                            <option value="Material">Material</option>
                            <option value="Style">Style</option>
                            <option value="Title">Title</option>
                          </select>
                          <!-- End Select -->
                        </div>
                      </div>
           
                </div>
                <!-- End Form Group -->

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form Group -->
                  <div class="form-group">
                    <label for="SKULabel" class="input-label">Tên sản phẩm</label>

                    <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="Tên sản phẩm..." aria-label="eg. 348121032">
                  </div>
                  <!-- End Form Group -->
                  </div>

                  <div class="col-sm-6">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="weightLabel" class="input-label">Đơn giá</label>
      
                   
                        <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="Đơn giá..." aria-label="0.0">
                       
                      
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>
                <!-- End Row -->
                
                <label class="input-label">Mô tả ngắn</label>

                 <!-- Quill -->
                 <div class="quill-custom">
                  <div class="js-quill" style="min-height: 15rem;" data-hs-quill-options='{
                          "placeholder": "Type your description..."
                         }'>
                  </div>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Hình ảnh</h4>

                <!-- Unfold -->
                <!-- <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-sm btn-ghost-secondary" href="javascript:;" data-hs-unfold-options='{
                       "target": "#mediaDropdown",
                       "type": "css-animation"
                     }'>
                    Add media from URL <i class="tio-chevron-down"></i>
                  </a>

                  <div id="mediaDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#addImageFromURLModal">
                      <i class="tio-link dropdown-item-icon"></i> Add image from URL
                    </a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#embedVideoModal">
                      <i class="tio-youtube-outlined dropdown-item-icon"></i> Embed video
                    </a>
                  </div>
                </div> -->
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
                  <div class="dz-message custom-file-boxed-label">
                    <img class="avatar avatar-xl avatar-4by3 mb-3" src="..\..\assets\admin\svg\illustrations\browse.svg" alt="Image Description">
                    <h5 class="mb-1">Choose files to upload</h5>
                    <p class="mb-2">or</p>
                    <span class="btn btn-sm btn-primary">Browse files</span>
                  </div>
                </div>
                <!-- End Dropzone -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
          </div>

        </div>
        <!-- End Row -->

        
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->