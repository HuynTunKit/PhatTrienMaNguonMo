 
<?php
// Bài Tập 1
$products = array(
    array(
        "ten_san_pham" => "Sản phẩm 1",
        "gia" => 100,
        "so_luong" => 50
    ),

);
// Thêm mới sản phẩm
$products[] = array("ten_san_pham" => "Sản phẩm 2", "gia" => 100, "so_luong" => 50);
$products[] = array("ten_san_pham" => "Sản phẩm 3", "gia" => 150, "so_luong" => 30);
$products[] = array("ten_san_pham" => "Sản phẩm 4", "gia" => 200, "so_luong" => 20);


// sửa 
$indexToEdit = 2;
if (isset($products[$indexToEdit])) {
    $products[$indexToEdit]["ten_san_pham"] = "Sản phẩm 2 mới";
    $products[$indexToEdit]["gia"] = 180;
    $products[$indexToEdit]["so_luong"] = 40;
}
// Xóa sản phẩm.

unset($products[0]);

// tìm kiếm 


// Sắp xếp sản phẩm theo giá tăng dần
usort($products, function ($a, $b) {
    return $a["gia"] - $b["gia"];
});
// In thông tin về các sản phẩm
foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product["ten_san_pham"] . "<br>";
    echo "Giá: " . $product["gia"] . "<br>";
    echo "Số lượng: " . $product["so_luong"] . "<br><br>";
}
