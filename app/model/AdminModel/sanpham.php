<?php
// lấy tất cả sản phẩm
function loadAll_san_pham()
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc order by san_pham.id desc";
    $list = pdo_query($sql);
    return $list;
}
// thêm san phẩm
function insert_san_pham($tensp, $gia, $anh, $mota, $id_danh_muc )
{
    $sql = "INSERT INTO san_pham(id, ten_san_pham, gia, img, mo_ta, id_danh_muc) VALUES(NULL, '$tensp', '$gia', '$anh', '$mota' ,'$id_danh_muc')";
    pdo_execute($sql);
}
// lấy 1 sản phẩm theo id
function loadOne_san_pham($id)
{
    $sql = "SELECT * FROM san_pham where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// hàm sửadanh mục theo id
function update_san_pham($id, $tensp, $gia, $anh, $mota , $id_danh_muc )
{
    if ($anh != '') {
        $sql = "UPDATE san_pham SET id_danh_muc = '$id_danh_muc', ten_san_pham = '$tensp', gia = '$gia', mo_ta = '$mota', img = '$anh'  Where id ='$id'";
    } else {
        $sql = "UPDATE san_pham SET id_danh_muc = '$id_danh_muc', ten_san_pham = '$tensp', gia = '$gia', mo_ta = '$mota' Where id ='$id'";
    }
    pdo_execute($sql);
}
// hàm xóa danh mục
function delete_san_pham($id){
    $sql = "DELETE FROM san_pham Where id ='$id'";
    pdo_execute($sql);
}
// load sản phẩm theo tên hoặc id danh mục
function loadAll_sanpham($kyw, $iddm)
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc WHERE 1";
    if ($kyw != '') {
        $sql .= " AND ten_san_pham LIKE '%" . $kyw . "%' ";
    }
    if ($iddm > 0) {
        $sql .= " AND id_danh_muc = '$iddm' ";
    }
    $sql .= " order by san_pham.id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
