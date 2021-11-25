<?php
    if(isset($_POST['save'])){
      $hoten = $_POST['hoten'];
      $gioitinh  = $_POST['gioitinh'];
      $ngaysinh = $_POST['ngaysinh'];
      $noisinh = $_POST['noisinh'];
      $dantoc = $_POST['dantoc'];
      $tongiao = $_POST['tongiao'];
      $namtotnghiep = $_POST['namtotnghiep'];
      $hocluc12 = $_POST['hocluc12'];
      $hanhkiem12 = $_POST['hanhkiem12'];
      $cmnd = $_POST['cmnd'];
      $ngaycap = $_POST['ngaycap'];
      $noicap = $_POST['noicap'];
      $hokhau = $_POST['hokhau'];
      $matinh10 = $_POST['matinh10'];
      $matinh11 = $_POST['matinh11'];
      $matinh12 = $_POST['matinh12'];
      $tentinh10 = $_POST['tentinh10'];
      $tentinh11 = $_POST['tentinh11'];
      $tentinh12 = $_POST['tentinh12'];
      $matruong10 = $_POST['matruong10'];
      $matruong11 = $_POST['matruong11'];
      $matruong12 = $_POST['matruong12'];
      $tentruong10 = $_POST['tentruong10'];
      $tentruong11 = $_POST['tentruong11'];
      $tentruong12 = $_POST['tentruong12'];
      $dtuutien = $_POST['dtuutien'];
      $kvuutien = $_POST['kvuutien'];
      $diachi = $_POST['diachi'];
      $dtthisinh = $_POST['dtthisinh'];
      $dtphuhuynh = $_POST['dtphuhuynh'];
      if(isset($_POST['phuongthuc'])){
        $phuongthuc = $_POST['phuongthuc'];
      }  else {
        $phuongthuc = false;
        }
        if(isset($_POST['nganhxettuyen'])){
          $nganhxettuyen = $_POST['nganhxettuyen'];
        }  else {
          $nganhxettuyen = false;
          }
      }
?>