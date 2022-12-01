<div class="banner-wrapper has_background">
    <img src="./assets/client/images/banner-for-all2.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="./index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div style="display: flex;" class="grid-view-mode">
                    <div style="margin-right: 15px;" id="akasha_product_search-2" class="widget akasha widget_product_search">
                        <form action="index.php?act=shop" method="POST" class="akasha-product-search">
                            <input id="akasha-product-search-field-0" class="search-field" placeholder="Search products…" name="kyw" type="search">
                            <button type="submit" name="btn1" value="Search">Search</button>
                        </form>
                    </div>
                        <form>
                            <a href="index.php?act=shop" data-toggle="tooltip" data-placement="top" class="modes-mode mode-grid display-mode active" value="grid">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.php?act=sanpham_list" data-toggle="tooltip" data-placement="top" class="modes-mode mode-list display-mode " value="list">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                    <form action="index.php?act=shop" method="POST" class="akasha-ordering">
                        <select title="product_cat" name="iddm" class="orderby">
                            <option value="0" selected="selected">Tất cả danh mục</option>
                            <?php
                            foreach ($list_dm as $dm) {
                                extract($dm);
                            ?>
                                <option class="popularity" value="<?= $id_dm ?>"><?= $ten_dm ?></option>
                            <?php
                            }
                            ?>

                        </select>
                        <input style="font-weight: 500; height: 44px; margin-bottom: 3px;" type="submit" name="btn" value="Tìm kiếm" class="btn btn-light">

                    </form>
                </div>

                <div class="auto-clear equal-container better-height akasha-products">
                    <ul class="row products columns-3">
                        <?php
                        foreach ($listsp_dm as $sp) {
                            extract($sp);
                            $linkimg = "./assets/uploads/" . $hinh;
                            echo ' <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                    data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="index.php?act=sanphamct&idsp=' . $id_sp . '">
                                <img style="height: 345px;" class="img-responsive"
                                     src="' . $linkimg . '"
                                     alt="Women Bags" width="600" height="778">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                          
                            <div class="group-button">
                           
                                <a href="index.php?act=sanphamct&idsp=' . $id_sp . '" class="button yith-wcqv-button">Quick View</a>
                                <div class="add-to-cart">
                                <form action="index.php?act=add_cart" method="POST">
                                <input type="hidden" name="id" value="' . $id_sp . '">
                                <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                                <input type="hidden" name="img_sp" value="' . $hinh . '">
                                <input type="hidden" name="gia_sp" value="' . $don_gia . '">
                                <input type="hidden" name="so_luong" value="1">
                                <input style="cursor: pointer; background-color: transparent; color: #222; font-size: 15px; font-weight: 500;" type="submit" class="button b" name="add_cart" value=" ">
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-info equal-elem">
                            <h3 class="product-name product_title">
                                <a href="index.php?act=sanphamct&idsp=' . $id_sp . '">' . $ten_sp . '</a>
                            </h3>
                            <span class="price"><span class="akasha-Price-amount amount">
                                           ' . number_format($don_gia) . '</span> <span class="akasha-Price-currencySymbol"> VNĐ</span></span>
                    
                        </div>
                    </div>
                </li>';
                        }
                        ?>

                        <!-- <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro1211-2-600x778.jpg" alt="Classic Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-14%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Classic Shirt</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span>
                                    </div>
                                    <span class="price"><del><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>138.00</span></del> <ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>119.00</span></ins></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro101-1-600x778.jpg" alt="Long Oversized" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Long Oversized</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount">
                                            <span class="akasha-Price-currencySymbol">$</span>60.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro171-1-600x778.jpg" alt="Knitted Stripe " width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <form class="variations_form cart">
                                        <table class="variations">
                                            <tbody>
                                                <tr>
                                                    <td class="value">
                                                        <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                            <option data-type="" data-pa_color="" value="">Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color" data-pa_color="#ff63cb" value="pink" class="attached enabled">Pink
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color" data-pa_color="#a825ea" value="purple" class="attached enabled">Purple
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color" data-pa_color="#db2b00" value="red" class="attached enabled">Red
                                                            </option>
                                                        </select>
                                                        <div class="data-val attribute-pa_color" data-attributetype="box_style"><a class="change-value color" href="#" style="background: #ff63cb;" data-value="pink"></a><a class="change-value color" href="#" style="background: #a825ea;" data-value="purple"></a><a class="change-value color" href="#" style="background: #db2b00;" data-value="red"></a></div>
                                                        <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Knitted Stripe </a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>105.00</span> – <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>110.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro41-1-600x778.jpg" alt="Brown Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Brown Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>134.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro181-2-600x778.jpg" alt="Floral Stripe" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Floral Stripe</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>98.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro83-1-600x778.jpg" alt="Glasses" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <form class="variations_form cart">
                                        <table class="variations">
                                            <tbody>
                                                <tr>
                                                    <td class="value">
                                                        <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                            <option data-type="" data-pa_color="" value="">Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color" data-pa_color="#000000" value="black" class="attached enabled">Black
                                                            </option>
                                                            <option data-width="30" data-height="30" data-type="color" data-pa_color="#db2b00" value="red" class="attached enabled">Red
                                                            </option>
                                                        </select>
                                                        <div class="data-val attribute-pa_color" data-attributetype="box_style"><a class="change-value color" href="#" style="background: #000000;" data-value="black"></a><a class="change-value color" href="#" style="background: #db2b00;" data-value="red"></a></div>
                                                        <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Leopard Print</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>56.00</span> – <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>60.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat  instock featured shipping-taxable product-type-external" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro141-1-600x778.jpg" alt="Mini Dress" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_external add_to_cart_button">Buy it
                                                on Amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Mini Dress</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>207.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro61-1-600x778.jpg" alt="Maternity Shoulder" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_grouped add_to_cart_button">View
                                                products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Maternity Shoulder</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>79.00</span> – <span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>139.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro71-1-600x778.jpg" alt="Women Bags" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-18%</span></span>
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Women Bags</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><del><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>109.00</span></del> <ins><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>89.00</span></ins></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-21 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-lamp product_tag-light product_tag-sock  outofstock featured shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro191-1-600x778.jpg" alt="Dagger Oversized" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="sold-out"><span>Sold out</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Dagger Oversized</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>35.00</span></span>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-ts-6 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple" data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="./assets/client/images/apro13-1-600x778.jpg" alt="Black Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="akasha product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Black Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                    <span class="price"><span class="akasha-Price-amount amount"><span class="akasha-Price-currencySymbol">$</span>109.00</span></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <div class="shop-control shop-after-control">
                    <nav class="akasha-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>