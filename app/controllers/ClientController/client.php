<?php
session_start();
include "model/pdo.php";
include "views/Client/global.php";
include "model/ClientModel/client.php";
include "views/Client/layout/header.php";
$listdm = loadAll_danhmuc();
$sphome = loadAll_sanpham_home();
$spnew = loadAll_sanpham_top10();
$spyt = loadAll_sanpham_yeuthich_top10();
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap1':
            include "views/Client/layout/taikhoan/dangnhap.php";
            break;
        case 'dangnhap':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $user = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = check_user($user, $password);
                if (is_array($checkuser)) {
                    $_SESSION['tai_khoan'] = $checkuser;
                    //$thongbao = 'đăng nhập thành công';
                    header('Location: index.php');
                } else {
                    echo $thongbao = 'tài khoản không tồn tại';
                }
            }
            break;
        case 'dangkyform':
            include "views/Client/layout/taikhoan/dangki.php";
            break;
        case 'dangky':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $user = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $ngaysinh = $_POST['ngaysinh'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                insert_taikhoan($user, $password, $fullname, $ngaysinh, $phone, $email, $diachi);
                $thongbao = 'đã đăng kí thành công. vui lòng đăng nhập';
            }
            include "views/Client/layout/taikhoan/dangnhap.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'form':
            include "views/Client/layout/taikhoan/myaccount.php";
            break;
        case 'suatk':
            if (isset($_POST['suatk']) && ($_POST['suatk'])) {
                $id = $_POST["id"];
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                update_user($id, $tendangnhap, $matkhau, $hoten, $ngaysinh, $sodienthoai, $email, $diachi);
                $_SESSION['tai_khoan'] = check_user($tendangnhap, $matkhau);
                echo "Cập nhật thành công";
                header("Location: index.php");
            }
            include "views/Client/layout/taikhoan/edit_taikhoan.php";
            break;
        case 'spchitiet':
            if (isset($_GET["idsp"])) {
                $id = $_GET["idsp"];

                // $spcl = loadone_sanpham_cungloai($id);

                $onesp = loadone_sanpham($id);
                extract($onesp);
            }
            include "views/Client/layout/xemsanpham/sanphamct.php";
            break;
        case 'allsanpham';
            $listsp = loadAll_sanpham('', 0);
            include "views/Client/layout/xemsanpham/allsanpham.php";
            break;
        case 'sanpham';
            if (isset($_POST['kyw']) && $_POST['kyw'] != '') {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $iddm = $_GET['id'];
            } else {
                $iddm = 0;
            }
            $listsp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_danhmuc($iddm);
            include "views/Client/layout/xemsanpham/sanpham_dm.php";
            break;
        case 'locsp':
            if (isset($_POST["btn"]) && ($_POST["btn"])) {
                $iddm = $_POST["iddm"];
            } else {
                $iddm = 0;
            }
            $listsp = loadAll_sanpham('', $iddm);

            include "views/Client/layout/xemsanpham/allsanpham.php";
            break;
        case 'addtocart':
            if (isset($_POST["addtocart"]) && ($_POST["addtocart"])) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $img = $_POST["img"];
                $gia = $_POST["price"];
                $soluong = 1;
                $tinhtien = $soluong * $gia;
                $spadd = [$id, $name, $img, $gia, $soluong, $tinhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "views/Client/layout/quanlygiohang/giohang.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location: index.php?act=viewcart");
            break;
        case 'viewcart':
            include "views/Client/layout/quanlygiohang/giohang.php";
            break;
        case 'thanhtoan':
            include "views/Client/layout/quanlygiohang/thanhtoan.php";
            break;
        case 'billconfirm':
            if (isset($_SESSION['tai_khoan'])) {
                if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                    if (isset($_SESSION['tai_khoan'])) {
                        $iduser = $_SESSION['tai_khoan']['id'];
                    } else {
                        $iduser = 0;
                    }
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pttt = $_POST['pttt'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngaydathang = date("Y-m-d H:i:s");
                    $tongdonhang = tongdonhang();
                    $idbill = insert_bill($iduser, $name, $email, $address, $phone, $pttt, $tongdonhang, $ngaydathang);

                    //insert into cart : $_SESSION['mycart'] & idbill

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($cart['0'], $cart['2'], $cart['1'], $cart['3'], $cart['4'], $cart['5'], $idbill);
                    }

                    unset($_SESSION['mycart']);
                    header("Location: index.php");
                }
                $bill = load_one_bill($idbill);
            } else {
                echo "Bạn phải đăng nhập để mua hàng";
            }
            break;
        case 'giohang':
            include "views/Client/layout/quanlygiohang/giohang.php";
            break;
        case 'donhang':
            $listbill = load_all_bill($_SESSION['tai_khoan']['id']);
            include "views/Client/layout/quanlygiohang/donhang.php";
            break;
        case 'donhangchitiet':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            $donhang = loadAll_hoa_don_ct($id);
            include "views/Client/layout/quanlygiohang/donhangct.php";
            break;
        case 'baiviet':
            $dsbv = loadAll_baiviet();
            include "views/Client/layout/baiviet/baiviet.php";
            break;
        case 'lienhe':
            if (isset($_POST['lienhe']) && ($_POST['lienhe'])) {
                $tenkhachhang = $_POST["hoten"];
                $sodienthoai = $_POST["sodienthoai"];
                $email = $_POST["email"];
                $noidung = $_POST["noidung"];
                insert_lienhe($tenkhachhang, $sodienthoai, $email, $noidung);
                echo  "<script> alert ('Gửi liên hệ thành công'); </script>";
            }
            include "views/Client/layout/lienhe/lienhe.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "views/Client/layout/home.php";
    include "views/Client/layout/footer.php";
}
