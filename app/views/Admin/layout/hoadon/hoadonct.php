<style>
    .button {
        color: white;
        padding: 8px;
        border: 1px solid;
        background-color: green;
        border-radius: 5px 5px 5px 5px;
    }

    .button:hover {
        cursor: pointer;
        background-color: red;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý hóa đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách hóa đơn chi tiết</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên người nhận</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th >Thành tiền</th>
                                        
                                    </tr>
                                    <?php
                                    foreach ($list_hoa_don_ct as $list) {
                                        extract($list);
                                        echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_nguoi_nhan . '</td>
                    <td>' . $sdt_nguoi_nhan . '</td>
                    <td>' . $email_nguoi_nhan . '</td>
                    <td>' . $dia_chi_nguoi_nhan . '</td>
                    <td>' . $id_san_pham . '</td>
                    <td>' . $ten_san_pham . '</td>
                    <td><img src="../../img/' . $img_sp . '" style="width: 100px;"></td>
                    <td>' . $gia_san_pham . '</td>
                    <td>' . $so_luong . '</td>
                    <td>' . $thanh_tien . '</td>
                    </tr>';
                                    }
                                    ?>
                                </thead>
                                
                            </tfoot>
                        </table>
                        <a href="index.php?act=listhd"><input type="button" class="button" value="Quay lại"></a>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->