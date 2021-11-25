<?php
include("../../app/controllers/profiles.php");
include '../../app/helpers/validateProfile.php';
require("../../app/database/connect.php");
$id = $_GET['id'];
$id_ts = getOneTS($id);
$conn = mysqli_connect('localhost', 'root', '') or die("Không thể kết nối ");
mysqli_select_db($conn, 'project_web') or die("Không tồn tại cơ sở dữ liệu tlu");

if (isset($_POST['update'])) {
    $error = array();

    $alert = array();

    
    if (empty($_POST['phuongthuc'])) {
        $error['phuongthuc'] = "";
    } else {
        $phuongthuc = $_POST['phuongthuc'];
    }
    if (empty($_POST['nganhxettuyen'])) {
      $error['nganhxettuyen'] = "";
    } else {
        $nganhxettuyen = $_POST['nganhxettuyen'];
    }

    if (empty($error)) {
      $sql = "UPDATE profile SET phuongthuc='$phuongthuc', nganhxettuyen='$nganhxettuyen' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
          header("location:index.php"); 
        } else {
            echo mysqli_error($error);
        }
    }
}
$sql= "SELECT *FROM profile WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
$item = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Sửa thông tin thí sinh</title>
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
  <form action="" id="form_update" method="POST">  
    <div class="container">
      <div class="row">
        <div class="col-lg-9 m-auto">
          <div class="card my-5">
            <div class="card-body">
              <form action="" id="form_update" method="POST">
                <div class="card mb-4">
                  <div class="card-title">
                    <h2 class="bg-info text-center text-light">CHỈNH SỬA ĐĂNG KÝ</h2>
                  </div>
                  <br />
                  <b>PHƯƠNG THỨC XÉT TUYỂN</b>
                  <br /> 
                  <?php 
                  if($id_ts['phuongthuc'] == 'tb3mon'){
                            ?>          
                                  <div class="form-check radio">
                                  <input type="radio" class="form-check-input" id="phuongthuc1" name="phuongthuc" <?php if(isset($item['phuongthuc'])&& $item['phuongthuc']=='tb3mon') echo "selected ='selected'" ; ?> value="tb3mon" checked/>
                                  <label class="form-check-lable" for="phuongthuc1">
                                    <p>Tuyển bằng tổng điểm trung bình lớp 12 theo tổng điểm 3
                                      môn</p></label>
                                  <br />
                                  <input type="radio" class="form-check-input" id="phuongthuc2" name="phuongthuc"  <?php if(isset($item['phuongthuc'])&& $item['phuongthuc']=='tb3ky') echo "selected ='selected'" ; ?> value="tb3ky"/>
                                  <label for="phuongthuc2" class="form-check-lable">
                                    <p>Tuyển bằng tổng điểm trung bình (HK1 , HK2 lớp 11 )</p>
                                  </label><br />
                                  <div class="message-error">
                                    <span> <?php if(empty($phuongthuc)){echo $phuongthucErr;} ?></span>
                                  </div>
                                  <?php 
                                } else{?>
                                  <div class="form-check radio">
                                  <input type="radio" class="form-check-input" id="phuongthuc1" name="phuongthuc" <?php if(isset($item['phuongthuc'])&& $item['phuongthuc']=='tb3mon') echo "selected ='selected'" ; ?> value="tb3mon"/>
                                  <label class="form-check-lable" for="phuongthuc1">
                                    <p>Tuyển bằng tổng điểm trung bình lớp 12 theo tổng điểm 3
                                      môn</p></label>
                                  <br />
                                  <input type="radio" class="form-check-input" id="phuongthuc2" name="phuongthuc"  <?php if(isset($item['phuongthuc'])&& $item['phuongthuc']=='tb3ky') echo "selected ='selected'" ; ?> value="tb3ky" checked/>
                                  <label for="phuongthuc2" class="form-check-lable">
                                    <p>Tuyển bằng tổng điểm trung bình (HK1 , HK2 lớp 11 )</p>
                                  </label><br />
                                  <div class="message-error">
                                    <span> <?php if(empty($phuongthuc)){echo $phuongthucErr;} ?></span>
                                  </div>
                                <?php }?>                               
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
                    <?php 
                    if($id_ts['nganhxettuyen'] == "Công nghệ thông tin"){
                    ?>
                    <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="nganhxettuyen1" name="nganhxettuyen" value="Công nghệ thông tin" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Công nghệ thông tin'){echo "selected ='selected'" ; }?> checked/>
                    <label class="form-check-lable" for="nganhxettuyen1">
                    TLS106 - Công nghệ thông tin
                    </label>
                    <br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen2" name="nganhxettuyen" value="Quản trị kinh doanh" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Quản trị kinh doanh'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen2" class="form-check-lable">
                    TLS402 - Quản trị kinh doanh
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen3" name="nganhxettuyen" value="Kỹ thuật tài nguyên nước" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật tài nguyên nước'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen3" class="form-check-lable">
                    TLS102 - Kỹ thuật tài nguyên nước
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen4" name="nganhxettuyen" value="Kỹ thuật xây dựng" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật xây dựng'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen4" class="form-check-lable">
                    TLS104 - Kỹ thuật xây dựng
                    </label><br />
                      </div>
                    <?php } elseif($id_ts['nganhxettuyen'] == "Quản trị kinh doanh") {?>
                      <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="nganhxettuyen1" name="nganhxettuyen" value="Công nghệ thông tin" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Công nghệ thông tin'){echo "selected ='selected'" ; }?> />
                    <label class="form-check-lable" for="nganhxettuyen1">
                    TLS106 - Công nghệ thông tin
                    </label>
                    <br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen2" name="nganhxettuyen" value="Quản trị kinh doanh" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Quản trị kinh doanh'){echo "selected ='selected'" ; }?> checked/>
                    <label for="nganhxettuyen2" class="form-check-lable">
                    TLS402 - Quản trị kinh doanh
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen3" name="nganhxettuyen" value="Kỹ thuật tài nguyên nước" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật tài nguyên nước'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen3" class="form-check-lable">
                    TLS102 - Kỹ thuật tài nguyên nước
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen4" name="nganhxettuyen" value="Kỹ thuật xây dựng" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật xây dựng'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen4" class="form-check-lable">
                    TLS104 - Kỹ thuật xây dựng
                    </label><br />
                      </div>
                    <?php } elseif($id_ts['nganhxettuyen'] == "Kỹ thuật tài nguyên nước") {?>
                      <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="nganhxettuyen1" name="nganhxettuyen" value="Công nghệ thông tin" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Công nghệ thông tin'){echo "selected ='selected'" ; }?> />
                    <label class="form-check-lable" for="nganhxettuyen1">
                    TLS106 - Công nghệ thông tin
                    </label>
                    <br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen2" name="nganhxettuyen" value="Quản trị kinh doanh" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Quản trị kinh doanh'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen2" class="form-check-lable">
                    TLS402 - Quản trị kinh doanh
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen3" name="nganhxettuyen" value="Kỹ thuật tài nguyên nước" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật tài nguyên nước'){echo "selected ='selected'" ; }?>checked/>
                    <label for="nganhxettuyen3" class="form-check-lable">
                    TLS102 - Kỹ thuật tài nguyên nước
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen4" name="nganhxettuyen" value="Kỹ thuật xây dựng" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật xây dựng'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen4" class="form-check-lable">
                    TLS104 - Kỹ thuật xây dựng
                    </label><br />
                      </div>
                    <?php } else {?>
                      <div class="form-check radio">
                    <input type="radio" class="form-check-input" id="nganhxettuyen1" name="nganhxettuyen" value="Công nghệ thông tin" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Công nghệ thông tin'){echo "selected ='selected'" ; }?> />
                    <label class="form-check-lable" for="nganhxettuyen1">
                    TLS106 - Công nghệ thông tin
                    </label>
                    <br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen2" name="nganhxettuyen" value="Quản trị kinh doanh" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Quản trị kinh doanh'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen2" class="form-check-lable">
                    TLS402 - Quản trị kinh doanh
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen3" name="nganhxettuyen" value="Kỹ thuật tài nguyên nước" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật tài nguyên nước'){echo "selected ='selected'" ; }?>/>
                    <label for="nganhxettuyen3" class="form-check-lable">
                    TLS102 - Kỹ thuật tài nguyên nước
                    </label><br />
                    <input type="radio" class="form-check-input" id="nganhxettuyen4" name="nganhxettuyen" value="Kỹ thuật xây dựng" <?php if (isset($_POST['nganhxettuyen']) && $_POST['nganhxettuyen'] == 'Kỹ thuật xây dựng'){echo "selected ='selected'" ; }?>checked/>
                    <label for="nganhxettuyen4" class="form-check-lable">
                    TLS104 - Kỹ thuật xây dựng
                    </label><br />
                      </div>
                    <?php }?>
                    </div>
                </div><br/>
                </div>
                <div class="text-center">
                  <input type="submit" name="update" class="btn btn-primary" value="Cập nhật">
                  <a name="" id="" class="btn btn-primary" href="index.php" role="button">Hủy</a>
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