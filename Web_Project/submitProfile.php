<?php 
include 'defined.php';

    if (!empty($hoten) && !empty($gioitinh) && !empty($ngaycap) && !empty($ngaysinh) && !empty($nganhxettuyen) && !empty($dantoc) && !empty($hocluc12) && !empty($hokhau) 
    && !empty($hanhkiem12) && !empty($tongiao) && !empty($noisinh) && !empty($noicap) && !empty($ngaycap) && !empty($namtotnghiep) && !empty($cmnd) 
    && !empty($matinh10) && !empty($matinh11) && !empty($matinh12) && !empty($gioitinh) && !empty($tentinh10) && !empty($tentinh11) && !empty($tentinh12) 
    && !empty($matruong11) && !empty($matruong10) && !empty($matruong12) && !empty($tentruong10) && !empty($tentruong12) && !empty($tentruong12) 
    && !empty($diachi) && !empty($dtphuhuynh) && !empty($dtthisinh) && !empty($phuongthuc) && !empty($nganhxettuyen)){

      $sql = "INSERT INTO profile ( hoten, gioitinh, ngaysinh,	noisinh, dantoc, tongiao, namtotnghiep, hocluc12, hanhkiem12, cmnd, ngaycap, noicap, hokhau,
      matinh10, matinh11, matinh12, tentinh10, tentinh11, tentinh12, matruong10, matruong11, matruong12, tentruong10, tentruong11, tentruong12, dtuutien, 
      kvuutien, diachi, dtthisinh, dtphuhuynh, phuongthuc, nganhxettuyen) 
      VALUES ('$hoten', '$gioitinh', '$ngaysinh', '$noisinh', '$dantoc', '$tongiao', '$namtotnghiep', '$hocluc12', '$hanhkiem12', '$cmnd', '$ngaycap', 
      '$noicap', '$hokhau', '$matinh10', '$matinh11', '$matinh12', '$tentinh10', '$tentinh11', '$tentinh12', '$matruong10', '$matruong11', '$matruong12', 
      '$tentruong10', '$tentruong11', '$tentruong12', '$dtuutien', '$kvuutien', '$diachi', '$dtthisinh', '$dtphuhuynh', '$phuongthuc', '$nganhxettuyen')";
      
      $query = mysqli_query($conn, $sql);  
      
      echo "<script type='text/javascript'>alert('Nhập thông tin hồ sơ thành công');</script>";
    }
?>