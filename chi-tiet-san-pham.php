<?php
include_once ("Entities/product.class.php");
if (!isset($_GET["product_ID"]))
{
    header("Location: oops.php");
}
else
{
    $product_ID = $_GET["product_ID"];
    $productdetail = product::get_product($product_ID);
    $productdetail = reset($productdetail);
}
?>
<?php
    include_once ("Inc/header.php");
//    include_once ("Inc/slide.php");
?>
    <div class="page_image_title">
        <h3>
            <?php echo $productdetail["product_Name"]?>
        </h3>
    </div>
    <div class="breadcum_main breadcum_pro">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/Webphp/index.php">Trang chủ</a></li>
                <li><a href="http://19671.chilibusiness.net/pho-nuoc">Phở nước</a></li>
                <li><a href="http://19671.chilibusiness.net/pho-nuoc/bun-bo-gio-heo">Phở bò chả cá</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="position-display">
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="single-product-image">
                            <div class="single-pro-main-image">
                                <a href="<?php echo "WebPHP/".$productdetail["picture"]?>" title="Phở bò chả cá"><img id="optima_zoom" src="<?php echo "WebPHP/".$productdetail["picture"]?>" data-zoom-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_4-700x700.jpg" title="Phở bò chả cá" alt="Phở bò chả cá" class="img-responsive"></a>
                            </div>
                            <div class="single-pro-thumb">
                                <ul class="thubm-caro" id="optima_gallery">
                                    <li>
                                        <a href="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_4-100x100.jpg" title="Phở bò chả cá" data-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_4-700x700.jpg" data-zoom-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_4-700x700.jpg"> <img class="img-responsive" src="img/pho_4-100x100.jpg" title="Phở bò chả cá" alt="Phở bò chả cá"> </a>
                                    </li>
                                    <li>
                                        <a href="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_5-100x100.jpg" title="Phở bò chả cá" data-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_5-700x700.jpg" data-zoom-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_5-700x700.jpg"> <img class="img-responsive" src="img/pho_5-100x100.jpg" title="Phở bò chả cá" alt="Phở bò chả cá"> </a>
                                    </li>
                                    <li>
                                        <a href="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_6-100x100.jpg" title="Phở bò chả cá" data-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_6-700x700.jpg" data-zoom-image="http://19671.chilibusiness.net/image/cache/catalog/19671/pho_6-700x700.jpg"> <img class="img-responsive" src="img/pho_6-100x100.jpg" title="Phở bò chả cá" alt="Phở bò chả cá"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 product_details">
                        <div class="single-product-description">
                            <div class="pro-desc">
                                <h1><?php echo $productdetail["product_Name"]?> </h1>
                                <div class="rating">
                                    <p>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        /
                                        <a href onclick="$('a[href=\'#tab-review\']').trigger('click');
                                          return false;">0 Bình luận</a>
                                    </p>
                                </div>
                                <ul class="list-unstyled">
                                    <li>Danh mục: <span class="span"><?php echo $productdetail["category_Name"]?></span></li>
                                    <li>Số lượng sản phẩm trong kho: <span class="span"><?php echo $productdetail["quantity"]?></span></li>
                                </ul>
                                <ul class="list-unstyled des2">
                                    <li class="span">Giá sản phẩm:</li>
                                    <li>
<!--                                        <p>--><?php //echo $productdetail["decscription"]?><!--</p>-->
                                    </li>
                                </ul>
                            </div>
                            <ul class="list-unstyled">
                                <li><span style="text-decoration: line-through;"><?php echo number_format($productdetail["price"]*0.1 + $productdetail["price"] ); echo "VNĐ"?></span></li>
                                <li>
                                    <h2 class="new_price_details"><?php echo number_format($productdetail["price"]); echo "VNĐ"?></h2>
                                </li>
                            </ul>
                        </div>
                        <div id="product">
                            <hr>
                            <h3>Tùy chọn đang có</h3>
                            <div class="form-group required">
                                <label class="control-label" for="input-option229">Kích cỡ</label>
                                <select name="option[229]" id="input-option229" class="form-control">
                                    <option value> --- Chọn --- </option>
                                    <option value="24">Nhỏ                                                                    </option>
                                    <option value="25">Trung bình                                                                    </option>
                                    <option value="23">Lớn                                                                    </option>
                                </select>
                            </div>
                            <div class="product_details_cart">
                                <div class="product-quantity">
                                    <div class="numbers-row">
                                        <input type="text" name="quantity" value="1" id="input-quantity">
                                        <input type="hidden" name="product_id" value="4">
                                    </div>
                                    <div class="fv-comp-button">
                                        <ul class="add-to-links">
                                            <li><button type="button" data-toggle="tooltip" class="link-wishlist" title="Thêm so sánh" onclick="compare.add('4');"><i class="fa fa-retweet"></i></button></li>
                                            <li><button type="button" data-toggle="tooltip" class="link-wishlist" title="Thêm Yêu thích" onclick="wishlist.add('4');"><i class="fa fa-heart-o"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-poraduct-botton">
                                    <button type="button" id="button-cart" data-loading-text="Đang Xử lý..." class="button btn-cart shopng-btn">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <hr>
                            <div class="product-quantity">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                                <script type="text/javascript" src="js/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="bg-ms-product">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
                                <li><a href="#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active bottom20" id="tab-description">
                                    <p>Phở là món ăn nhân gian tồn tại lâu đời của người Việt Nam và giờ đây với hương vị truyền thống chúng tôi đã làm ra nhiều món phở thơm ngon đê phục vụ mọi người được thưởng thức món ăn ngon đậm đà Việt Nam chúng ta....</p>
                                </div>
                                <div class="tab-pane" id="tab-review">
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review"></div>
                                        <h2>Gửi Bình luận</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Họ & Tên:</label>
                                                <input type="text" name="name" value id="input-name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Nội dung:</label>
                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                <div class="help-block"><span style="color: #FF0000;">Lưu ý:</span> không hỗ trợ HTML!</div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label">Cho điểm:</label>
                                                &nbsp;&nbsp;&nbsp; Bình thường&nbsp;
                                                <input type="radio" name="rating" value="1">
                                                &nbsp;
                                                <input type="radio" name="rating" value="2">
                                                &nbsp;
                                                <input type="radio" name="rating" value="3">
                                                &nbsp;
                                                <input type="radio" name="rating" value="4">
                                                &nbsp;
                                                <input type="radio" name="rating" value="5">
                                                &nbsp;Tốt
                                            </div>
                                        </div>
                                        <div class="buttons clearfix">
                                            <div class="pull-right">
                                                <button type="button" id="button-review" data-loading-text="Đang Xử lý..." class="btn btn-primary">Tiếp tục</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--PRODCUCT LATE -->
            </div>
        </div>
        <div class="product-late-ms product_module">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3 class="text_related title">Sản phẩm liên quan</h3>
                        <div class="titleborderOut">
                            <div class="titleborder"></div>
                        </div>
                    </div>
                </div>
                <div class="related_product">
                    <?php foreach ($listproduct as $item) {?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="related_product">
                            <div class="t-all-product-info">
                                <div class="t-product-img">
                                    <a href="http://19671.chilibusiness.net/pho-bo-ca-loc">
                                        <img src="<?php echo "Webphp/".$item["picture"] ?>" alt="Phở khô Gia Lai" title="Phở khô Gia Lai" class="img-responsive">
                                    </a>
                                </div>
                                <div class="tab-p-info">
                                    <a href="http://19671.chilibusiness.net/pho-bo-ca-loc">Phở khô Gia Lai</a>
                                    <div class="price_product">
                                        <span class="price-new">22.000 VNĐ</span>
                                        <div class="clear"></div>
                                        <span class="price-old">48.000 VNĐ</span>
                                    </div>
                                    <div class="star">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="al-btns">
                                        <button type="button" onclick="cart.add('1');" class="button btn-cart"><span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</span></button>
                                        <ul class="add-to-links">
                                            <li><a href="http://19671.chilibusiness.net/pho-bo-ca-loc" class="link-wishlist" data-toggle="tooltip" title="Xem chi tiết"><i class="fa fa-eye"></i></a></li>
                                            <li>
                                                <button class="link-wishlist" type="button" data-toggle="tooltip" title="Thêm so sánh" onclick="compare.add('1');"><i class="fa fa-retweet"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="tooltip" title="Thêm Yêu thích" onclick="wishlist.add('1');"><i class="fa fa-heart"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="position-display">
        </div>
    </div>
<?php
include_once ("Inc/footer.php");
?>