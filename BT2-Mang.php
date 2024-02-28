
<?php
$products = array(
    array("ten_san_pham" => "Sản phẩm 1", "gia" => 100, "so_luong" => 50, "danh_muc" => "Điện tử"),
    array("ten_san_pham" => "Sản phẩm 2", "gia" => 150, "so_luong" => 30, "danh_muc" => "Thời trang"),
    array("ten_san_pham" => "Sản phẩm 3", "gia" => 200, "so_luong" => 20, "danh_muc" => "Điện tử"),
    // Thêm các sản phẩm khác tại đây
);

// Thêm mới sản phẩm
$products[] = array("ten_san_pham" => "Sản phẩm 4", "gia" => 120, "so_luong" => 25, "danh_muc" => "Thời trang");


// Sửa thông tin sản phẩm (tên, giá, số lượng).

$indexToEdit = 3;
if (isset($products[$indexToEdit])) {
    $products[$indexToEdit]["ten_san_pham"] = "Sản phẩm 4 mới";
    $products[$indexToEdit]["gia"] = 180;
    $products[$indexToEdit]["so_luong"] = 40;
}
// Xóa sản phẩm 

unset($products[0]);
// Tìm kiếm sản phẩm theo tên.


// Sắp xếp sản phẩm theo giá (tăng dần/giảm dần).
// tăng dần
usort($products, function ($a, $b) {
    return $a["gia"] - $b["gia"];
});
// giảm dần
/*
usort($products, function ($a, $b) {
    return $b["gia"] - $a["gia"];
}); */
// In danh sách sản phẩm theo danh mục
foreach ($products as $product) {
    echo "Danh mục: " . $product["danh_muc"] . "<br>";
    echo "Tên sản phẩm: " . $product["ten_san_pham"] . "<br>";
    echo "Giá: " . $product["gia"] . "<br>";
    echo "Số lượng: " . $product["so_luong"] . "<br><br>";
}
