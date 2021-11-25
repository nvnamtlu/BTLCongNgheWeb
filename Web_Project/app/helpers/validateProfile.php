<?php
$hotenErr = $gioitinhErr = $ngaysinhErr = $dantocErr = $tongiaoErr = $noisinhErr = $namtotnghiepErr = $hocluc12Err = $hanhkiem12Err = $cmndErr = $ngaycapErr = $noicapErr = $hokhauErr = $matinh10Err = $tentinh10Err = $matruong10Err = $tentruong10Err = $matinh11Err = $matinh12Err = $tentinh11Err = $tentinh12Err = $matruong11Err = $matruong12Err = $tentruong11Err = $tentruong12Err = $dtuutienErr = $kvuutienErr = $diachiErr = $dtthisinhErr = $dtphuhuynhErr = $phuongthucErr = $nganhxettuyenErr = "";
$hoten = $gioitinh = $ngaysinh = $dantoc = $tongiao = $noisinh = $namtotnghiep = $hocluc12 = $hanhkiem12 = $cmnd = $ngaycap = $noicap = $hokhau = $matinh10 = $tentinh10 = $matruong10 = $tentruong10 = $matinh11 = $matinh12 = $tentinh11 = $tentinh12 = $matruong11 = $matruong12 = $tentruong11 = $tentruong12 = $dtuutien = $kvuutien = $diachi = $dtthisinh = $dtphuhuynh = $phuongthuc = $nganhxettuyen = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["hoten"])) {
    $hotenErr = "* Chưa nhập Họ và tên";
  } 

  if (empty($_POST["gioitinh"])) {
    $gioitinhErr = "* Chưa chọn giới tính";
  } 

  if (empty($_POST["ngaysinh"])) {
    $ngaysinhErr = "* Chưa nhập ngày sinh";
  } 

  if (empty($_POST["noisinh"])) {
    $noisinhErr = "* Chưa chọn nơi sinh";
  } 

  if (empty($_POST["dantoc"])) {
    $dantocErr = "* Chưa nhập dân tộc";
  } 
  
  if (empty($_POST["tongiao"])) {
    $tongiaoErr = "* Chưa nhập tôn giáo";
  } 
  
  if (empty($_POST["namtotnghiep"])) {
    $namtotnghiepErr = "* Chưa chọn năm tốt nghiệp";
  } 
  
  if (empty($_POST["hocluc12"])) {
    $hocluc12Err = "* Chưa chọn học lực lớp 12";
  }
  
  if (empty($_POST["hanhkiem12"])) {
    $hanhkiem12Err = "* Chưa chọn hạnh kiểm lớp 12";
  }
  
  if (empty($_POST["cmnd"])) {
    $cmndErr = "* Chưa nhập số CMND/CCCD";
  }
  
  if (empty($_POST["ngaycap"])) {
    $ngaycapErr = "* Chưa nhập ngày cấp";
  }

  if (empty($_POST["noicap"])) {
    $noicapErr = "* Chưa chọn nơi cấp";
  }
  
  if (empty($_POST["hokhau"])) {
    $hokhauErr = "* Chưa nhập hộ khẩu";
  }
  
  if (empty($_POST["matinh10"])) {
    $matinh10Err = "* Chưa nhập mã tỉnh";
  }
  
  if (empty($_POST["matinh11"])) {
    $matinh11Err = "* Chưa nhập mã tỉnh";
  }
  
  if (empty($_POST["matinh12"])) {
    $matinh12Err = "* Chưa nhập mã tỉnh ";
  }
  
  if (empty($_POST["tentinh10"])) {
    $tentinh10Err = "* Chưa nhập tên tỉnh";
  }
  
  if (empty($_POST["tentinh11"])) {
    $tentinh11Err = "* Chưa nhập tên tỉnh";
  }
  
  if (empty($_POST["tentinh12"])) {
    $tentinh12Err = "* Chưa nhập tên tỉnh";
  }
  
  if (empty($_POST["matruong10"])) {
    $matruong10Err = "* Chưa nhập mã trường";
  }
  
  if (empty($_POST["matruong11"])) {
    $matruong11Err = "* Chưa nhập mã trường";
  }
  
  if (empty($_POST["matruong12"])) {
    $matruong12Err = "* Chưa nhập mã trường";
  }
  
  if (empty($_POST["tentruong10"])) {
    $tentruong10Err = "* Chưa nhập tên trường";
  }
  
  if (empty($_POST["tentruong11"])) {
    $tentruong11Err = "* Chưa nhập tên trường";
  }
  
  if (empty($_POST["tentruong12"])) {
    $tentruong12Err = "* Chưa nhập tên trường";
  }
  
  if (empty($_POST["dtuutien"])) {
    $dtuutienErr = "* Chưa chọn đối tượng ưu tiên";
  }
  
  if (empty($_POST["kvuutien"])) {
    $kvuutienErr = "* Chưa chọn khu vực ưu tiên";
  }
  
  if (empty($_POST["diachi"])) {
    $diachiErr = "* Chưa nhập địa chỉ liên hệ";
  }
  
  if (empty($_POST["dtthisinh"])) {
    $dtthisinhErr = "* Chưa nhập số điện thoại thí sinh";
  }
  
  if (empty($_POST["dtphuhuynh"])) {
    $dtphuhuynhErr = "* Chưa nhập số điện thoại phụ huynh";
  }
  
  if (empty($_POST["phuongthuc"])) {
    $phuongthucErr = "* Chưa chọn phương thức xét tuyển";
  }
  
  if (empty($_POST["nganhxettuyen"])) {
    $nganhxettuyenErr = "* Chưa chọn ngành xét tuyển";
  }
}
?>
