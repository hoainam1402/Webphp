<?php
     include_once("../Admin/Inc/headers.php");
     include_once ("../Admin/Inc/menu-sidebar.php");
     include_once ("../Admin/Entities/product.class.php");
     include_once ("../Admin/Entities/category.php");
     $danhsachsanpham = product:: DanhSachSanPham();
?>
<script>
function confirmDelete(delUrl) {
    if (confirm("Are you sure you want to delete")) {
        document.location = delUrl;
    }
}
</script>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="btn btn-primary" onclick="document.location = 'add-product.php'">
                                <i class="fa fa-plus-square"></i> Thêm sản phẩm</button>
                        </div>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning" border="1">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Hình ảnh</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($danhsachsanpham as $item):?>
                                <tr>
                                <tr>
                                    <td><?php echo $item["product_Name"]; ?></td>
                                    <td><?php echo $item["category_Name"]; ?></td>
                                    <td><?php echo number_format($item["price"]); ?></td>
                                    <td><?php echo $item["quantity"]; ?></td>
                                    <td><img style="width: 150px;height: 100px;" src="<?php echo $item["picture"]; ?>">
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-sm"><a
                                                href="edit-product.php?product_ID=<?php echo $item["product_ID"]; ?>"
                                                style="color:white;" class="fa fa-dot-circle-o">Sửa</a></button>
                                        | <button class="btn btn-danger btn-sm"><a
                                                href="javascript:confirmDelete('delete-product.php?product_ID=<?php echo $item["product_ID"]; ?>')"
                                                style="color:white;" class="fa fa-dot-circle-o">Xoá</a></button>
                                    </td>

                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
   include_once ("../Admin/Inc/footer.php")
   ?>