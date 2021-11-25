<?php
require '../../app/database/connect.php';
include '../../app/controllers/insertPF.php';
include '../../app/helpers/validateProfile.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Thêm thí sinh</title>
  <style>
    .message-error{
        color: red;
    }

    .radio{
        padding-left: 50px;
    }
  </style>
</head>

<body class="bg-light">
  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <div class="container">
      <div class="row">
        <div class="col-lg-9 m-auto">
          <div class="card my-5">
            <div class="card-title">
              <h2 class="bg-info text-center text-light">THÔNG TIN HỒ SƠ</h2>
            </div>
            <div class="card-body">
              <form class="card-body" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Họ và tên</span>
                      </div>
                      <input type="text" class="form-control" name="hoten" id="hoten" placeholder="Nhập Họ và Tên" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($hoten)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($hoten)){echo $hotenErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" name="gioitinh" id="inputGroupPrepend2">Giới tính</span>
                      </div>
                      <select name="gioitinh" class="form-control" id="gioitinh">
                        <option value="0">Chọn giới tính</option>
                        <option value="nam" <?php echo (isset($_POST['gioitinh']) && $_POST['gioitinh'] == 'nam') ? 'selected="selected"' : ''?>>Nam</option>
                        <option value="nu" <?php echo (isset($_POST['gioitinh']) && $_POST['gioitinh'] == 'nu') ? 'selected="selected"' : ''?>>Nữ</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($gioitinh)){echo $gioitinhErr;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Ngày sinh</span>
                      </div>
                      <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($ngaysinh)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($ngaysinh)){echo $ngaysinhErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Dân tộc</span>
                      </div>
                      <input type="text" class="form-control" name="dantoc" id="dantoc" placeholder="Nhập dân tộc" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($dantoc)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($dantoc)){echo $dantocErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Tôn giáo</span>
                      </div>
                      <input type="text" class="form-control" name="tongiao" id="tongiao" placeholder="Nhập tôn giáo" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($tongiao)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tongiao)){echo $tongiaoErr;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Nơi Sinh</span>
                      </div>
                      <select name="noisinh" class="form-control" id="noisinh">
                        <option value="0">Chọn nơi sinh</option>
                        <option value="hochiminh" <?php echo (isset($_POST['noisinh']) && $_POST['noisinh'] == 'hochiminh') ? 'selected="selected"' : ''?>>Hồ Chí Minh</option>
                        <option value="hanoi" <?php echo (isset($_POST['noisinh']) && $_POST['noisinh'] == 'hanoi') ? 'selected="selected"' : ''?>>Hà Nội</option>
                        <option value="danang" <?php echo (isset($_POST['noisinh']) && $_POST['noisinh'] == 'danang') ? 'selected="selected"' : ''?>>Đà Nẵng</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($noisinh)){echo $noisinhErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Năm tốt nghiệp</span>
                      </div>
                      <select name="namtotnghiep" class="form-control" id="namtotnghiep" value="<?php echo htmlspecialchars($namtotnghiep)?>">
                        <option value="0">Chọn năm tốt nghiệp</option>
                        <option value="2018" <?php echo (isset($_POST['namtotnghiep']) && $_POST['namtotnghiep'] == '2018') ? 'selected="selected"' : ''?>>2018</option>
                        <option value="2019" <?php echo (isset($_POST['namtotnghiep']) && $_POST['namtotnghiep'] == '2019') ? 'selected="selected"' : ''?>>2019</option>
                        <option value="2020" <?php echo (isset($_POST['namtotnghiep']) && $_POST['namtotnghiep'] == '2020') ? 'selected="selected"' : ''?>>2020</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php echo $namtotnghiepErr; ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Học lực lớp 12</span>
                      </div>
                      <select name="hocluc12" class="form-control" id="hocluc12">
                        <option value="0">Chọn học lực</option>
                        <option value="gioi" <?php echo (isset($_POST['hocluc12']) && $_POST['hocluc12'] == 'gioi') ? 'selected="selected"' : ''?>>Giỏi</option>
                        <option value="kha" <?php echo (isset($_POST['hocluc12']) && $_POST['hocluc12'] == 'kha') ? 'selected="selected"' : ''?>>Khá</option>
                        <option value="trungbinh" <?php echo (isset($_POST['hocluc12']) && $_POST['hocluc12'] == 'trungbinh') ? 'selected="selected"' : ''?>>Trung bình</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($hocluc12)){echo $hocluc12Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Hạnh kiểm lớp 12</span>
                      </div>
                      <select name="hanhkiem12" class="form-control" id="hanhkiem12">
                        <option value="0">Chọn hạnh kiểm</option>
                        <option value="tot" <?php echo (isset($_POST['hanhkiem12']) && $_POST['hanhkiem12'] == 'tot') ? 'selected="selected"' : ''?>>Tốt</option>
                        <option value="kha" <?php echo (isset($_POST['hanhkiem12']) && $_POST['hanhkiem12'] == 'kha') ? 'selected="selected"' : ''?>>Khá</option>
                        <option value="trungbinh" <?php echo (isset($_POST['hanhkiem12']) && $_POST['hanhkiem12'] == 'trungbinh') ? 'selected="selected"' : ''?>>Trung bình</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($hanhkiem12)){echo $hanhkiem12Err;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Số CMND/CCCD</span>
                      </div>
                      <input type="text" class="form-control" name="cmnd" id="cmnd" placeholder="Nhập CMND/CCCD" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($cmnd)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($cmnd)){echo $cmndErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Ngày cấp</span>
                      </div>
                      <input type="date" class="form-control" name="ngaycap" id="ngaycap" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($ngaycap)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($ngaycap)){echo $ngaycapErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Nơi cấp</span>
                      </div>
                      <select name="noicap" class="form-control" id="noicap">
                        <option value="0">Chọn tỉnh</option>
                        <option value="hanoi" <?php echo (isset($_POST['noicap']) && $_POST['noicap'] == 'hanoi') ? 'selected="selected"' : ''?>>Hà Nội</option>
                        <option value="hochiminh" <?php echo (isset($_POST['noicap']) && $_POST['noicap'] == 'hochiminh') ? 'selected="selected"' : ''?>>Hồ Chí Minh</option>
                        <option value="danang" <?php echo (isset($_POST['noicap']) && $_POST['noicap'] == 'danang') ? 'selected="selected"' : ''?>>Đà Nẵng</option>
                      </select>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($noicap)){echo $noicapErr;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Hộ khẩu thường trú</span>
                      </div>
                      <input type="text" class="form-control" name="hokhau" id="hokhau" placeholder="Nhập hộ khẩu thường trú" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($hokhau)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($hokhau)){echo $hokhauErr;} ?></span>
                    </div>
                  </div>
                </div>
                <p>
                  <i>
                  * Ghi rõ tên tỉnh (thành phố), huyện (quận) , xã (phường) , vào
                  ô hộ khẩu thường trú
                  </i>
                </p>
                <b>
                  Nơi học THPT hoặc tương đương (Ghi tên trường và nơi trường
                  đóng : huyện quận , tỉnh thành phố)
                </b>
                <br />
                <br />
                <div class="form-row">
                  <div class="col-md-2 mb-3">
                    <h6 class="text-center">Năm học</h6>
                    <div class="input-group ml-4">
                      <div class="input-group-prepend mt-2">
                        <span class="input-group-text" id="inputGroupPrepend">Lớp 10</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <h6 class="text-center">Mã Tỉnh</h6>
                    <div class="input-group">
                      <div class="input-group-prepend mt-2">
                        <input type="text" name="matinh10" class="form-control" id="matinh10" value="<?php echo htmlspecialchars($matinh10)?>"/>
                      </div>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($matinh10)){echo $matinh10Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <h6 class="text-center">Tên Tỉnh/TP</h6>
                    <div class="input-group">
                      <div class="input-group-prepend mt-2">
                        <input type="text" class="form-control" name="tentinh10" id="tentinh10" value="<?php echo htmlspecialchars($tentinh10)?>"/>
                      </div>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tentinh10)){echo $tentinh10Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <h6 class="text-center">Mã Trường</h6>
                    <div class="input-group">
                      <div class="input-group-prepend mt-2">
                        <input type="text" class="form-control" name="matruong10" id="matruong10" value="<?php echo htmlspecialchars($matruong10)?>"/>
                      </div>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($matruong10)){echo $matruong10Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <h6 class="text-center">Tên Trường</h6>
                    <div class="input-group">
                      <div class="input-group-prepend mt-2">
                        <input type="text" class="form-control" name="tentruong10" id="tentruong10" value="<?php echo htmlspecialchars($tentruong10)?>"/>
                      </div>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tentruong10)){echo $tentruong10Err;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend pl-4">
                        <span class="input-group-text" id="inputGroupPrepend">Lớp 11</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="matinh11" id="matinh11" value="<?php echo htmlspecialchars($matinh11)?>"/>
                    </div>
                    <div class="message-error">
                        <span> <?php if(empty($matinh11)){echo $matinh11Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="tentinh11" id="tentinh11" value="<?php echo htmlspecialchars($tentinh11)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tentinh11)){echo $tentinh11Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="matruong11" id="matruong11" value="<?php echo htmlspecialchars($matruong11)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($matruong11)){echo $matruong11Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="tentruong11" id="tentruong11" value="<?php echo htmlspecialchars($tentruong11)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tentruong11)){echo $tentruong11Err;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend pl-4">
                        <span class="input-group-text " id="inputGroupPrepend">Lớp 12</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="matinh12" id="matinh12" value="<?php echo htmlspecialchars($matinh12)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($matinh12)){echo $matinh12Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="tentinh12" id="tentinh12" value="<?php echo htmlspecialchars($tentinh12)?>"/>
                    </div>
                    <div class="message-error">
                      <?php if(empty($tentinh12)){echo $tentinh12Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-2 mb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="matruong12" id="matruong12" value="<?php echo htmlspecialchars($matruong12)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($matruong12)){echo $matruong12Err;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="input-group">
                      <input type="text" class="form-control" name="tentruong12" id="tentruong12" value="<?php echo htmlspecialchars($tentruong12)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($tentruong12)){echo $tentruong12Err;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-9">
                    <label>
                      <p>
                        <b>Đối tượng ưu tiên</b>
                        <i>(Thuộc đối tượng nào thì chọn đối tượng tương ứng)</i>
                      </p>
                    </label>
                  </div>
                  <div class="col-md-3">
                    <select name="dtuutien" class="form-control" id="dtuutien">
                      <option value="0">Đối tượng ưu tiên</option>
                      <option value="dt1" <?php echo (isset($_POST['dtuutien']) && $_POST['dtuutien'] == 'dt1') ? 'selected="selected"' : ''?>>Đối tượng 1</option>
                      <option value="dt2" <?php echo (isset($_POST['dtuutien']) && $_POST['dtuutien'] == 'dt2') ? 'selected="selected"' : ''?>>Đối tượng 2</option>
                      <option value="dt3" <?php echo (isset($_POST['dtuutien']) && $_POST['dtuutien'] == 'dt3') ? 'selected="selected"' : ''?>>Đối tượng 3</option>
                    </select>
                    <div class="message-error">
                      <span> <?php if(empty($dtuutien)){echo $dtuutienErr;} ?></span>
                    </div>
                  </div>
                </div>
                <br />
                <div class="form-row mb-2">
                  <div class="col-md-9">
                    <label>
                      <p>
                        <b>Khu vực ưu tiên</b>
                        <i>(Thuộc khu vực nào thì chọn khu vực tương ứng)</i>
                      </p>
                    </label>
                  </div>
                  <div class="col-md-3">
                    <select name="kvuutien" class="form-control" id="kvuutien">
                      <option value="0">Khu vực ưu tiên</option>
                      <option value="kv1" <?php echo (isset($_POST['kvuutien']) && $_POST['kvuutien'] == 'kv1') ? 'selected="selected"' : ''?>>Khu vực 1</option>
                      <option value="kv2" <?php echo (isset($_POST['kvuutien']) && $_POST['kvuutien'] == 'kv2') ? 'selected="selected"' : ''?>>Khu vực 2</option>
                      <option value="kv3" <?php echo (isset($_POST['kvuutien']) && $_POST['kvuutien'] == 'kv3') ? 'selected="selected"' : ''?>>Khu vực 3</option>
                    </select>
                    <div class="message-error">
                      <span> <?php if(empty($kvuutien)){echo $kvuutienErr;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Địa chỉ liên hệ</span>
                      </div>
                      <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Nhập địa chỉ liên hệ" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($diachi)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($diachi)){echo $diachiErr;} ?></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Điện thoại thí sinh</span>
                      </div>
                      <input type="text" class="form-control" name="dtthisinh" id="dtthisinh" placeholder="Nhập số điện thoại" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($dtthisinh)?>" />
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($dtthisinh)){echo $dtthisinhErr;} ?></span>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Điện thoại phụ huynh</span>
                      </div>
                      <input type="text" class="form-control" name="dtphuhuynh" id="dtphuhuynh" placeholder="Nhập số điện thoại" aria-describedby="inputGroupPrepend2" value="<?php echo htmlspecialchars($dtphuhuynh)?>"/>
                    </div>
                    <div class="message-error">
                      <span> <?php if(empty($dtphuhuynh)){echo $dtphuhuynhErr;} ?></span>
                    </div>
                  </div>
                </div>
                <br />
                <div class="card mb-4">
                  <div class="card-title">
                    <h2 class="bg-info text-center text-light">THÔNG TIN ĐĂNG KÝ</h2>
                  </div>
                  <br />
                  <h6 class="ml-3">Sau khi đã đọc và hiểu rõ các quy định vể tiêu chí và điều
                    kiện xét tuyển của nhà trường , tôi đồng ý xét tuyển học bạ
                    vào trình độ đại học như sau (Chọn phương thức xét tuyển)</h6>
                  <br />
                  <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="phuongthuc1" name="phuongthuc" value="tb3mon" <?php if (isset($_POST['phuongthuc']) && $_POST['phuongthuc'] == 'tb3mon'){echo "checked";}?>/>
                    <label class="form-check-lable" for="phuongthuc1">
                      <b>Tuyển bằng tổng điểm trung bình lớp 12 theo tổng điểm 3
                        môn</b></label>
                    <br />
                    <input type="radio" class="form-check-input" id="phuongthuc2" name="phuongthuc" value="tb3ky" <?php if (isset($_POST['phuongthuc']) && $_POST['phuongthuc'] == 'tb3ky'){echo "checked";}?>/>
                    <label for="phuongthuc2" class="form-check-lable">
                      <b>Tuyển bằng tổng điểm trung bình (HK1 , HK2 lớp 11 )</b>
                    </label><br />
                    <div class="message-error">
                      <span> <?php if(empty($phuongthuc)){echo $phuongthucErr;} ?></span>
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <div class="col-sm-5 text-center">
                      <br />
                      <b>ĐĂNG KÍ NGÀNH XÉT TUYỂN</b>
                      <div class="message-error">
                      <span> <?php if(empty($nganhxettuyen)){echo $nganhxettuyenErr;} ?></span>
                      </div>
                    </div>
                    <div class="col-sm-7">
                    <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="nganhxettuyen1" name="nganhxettuyen" value="Công nghệ thông tin" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Công nghệ thông tin'){echo "checked";}?>/>
                    <label class="form-check-lable" for="nganhxettuyen1">
                    TLS106 - Công nghệ thông tin
                    </label>
                    <br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen2" name="nganhxettuyen" value="Quản trị kinh doanh" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Quản trị kinh doanh'){echo "checked";}?>/>
                    <label for="nganhxettuyen2" class="form-check-lable">
                    TLS402 - Quản trị kinh doanh
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen3" name="nganhxettuyen" value="Kỹ thuật tài nguyên nước" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật tài nguyên nước'){echo "checked";}?>/>
                    <label for="nganhxettuyen3" class="form-check-lable">
                    TLS102 - Kỹ thuật tài nguyên nước
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen4" name="nganhxettuyen" value="Kỹ thuật xây dựng" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật xây dựng'){echo "checked";}?>/>
                    <label for="nganhxettuyen4" class="form-check-lable">
                    TLS104 - Kỹ thuật xây dựng
                    </label><br />
                      </div>
                    </div>
                  </div><br/>
                </div>
                <div class="text-center">
                  <button class="btn btn-outline-info btn-lg" type="submit" name="save">Thêm thí sinh</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </form>
</body>

</html>