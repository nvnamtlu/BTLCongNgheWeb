<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/profiles.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý xét tuyển online</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <style>
        input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
    </style>
</head>
<body>
    <!--Facebook Page  Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="5hLQAPhL"></script>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!--Admin Content-->
        <div class="admin-content">
            <h1 style="text-align:center;">DANH SÁCH THÍ SINH ĐĂNG KÝ XÉT TUYỂN</h1> 
        <?php
        
        ob_start();
            $conn = mysqli_connect('localhost','root','','project_web');
            if(isset($_POST['search'])){
                $searchkey = $_POST['search'];
                $sql = "SELECT * FROM profile WHERE hoten LIKE '%$searchkey%'";
            }else{
                $sql = "SELECT * FROM profile";
                $searchkey = "";
            }
            $result = mysqli_query($conn,$sql);
        ?>
        <form action="" method="POST">
            <div class="col-md-6">
                <input type="text" name="search" class='form-control' placeholder="Tìm theo họ tên thí sinh" value="<?php echo $searchkey;?>">
            </div>
            <div class="col-md-6 text-left">
                <button class="btn btn-primary">Tìm kiếm</button>
            </div><hr/>
        </form>
            <div class="button-group">
                <a href="add.php" class="btn btn-big" style="float:right" target="_blank"><i class="fas fa-user"></i>+Thêm thí sinh</a>
            </div>
        <table>
            <thead>
                <tr>
                    <th><i class="far fa-square"></i></th>
                    <th>Họ tên</th>
                    <th>CMND</th>
                    <th>Ngành xét tuyển</th>
                    <th>Điện thoại</th>
                    <th>Địa chỉ</th>
                    <th colspan="3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $thisinh = mysqli_fetch_all($result);
                        foreach($thisinh as $row){
                    ?>
                <tr>
                    <td scope="row">
                    <form action="" method="post">
                            <input type="checkbox" name="records[]" value="<?php echo $row[0];?>">
                    </td>
                    <td><?php echo $row[1];?></td>  
                    <td><?php echo $row[10];?></td>
                    <td><?php echo $row[32];?></td>
                    <td><?php echo $row[29];?></td>
                    <td><?php echo $row[28];?></td>
                    <td><a href="view.php?id=<?php echo $row[0];?>" target="_blank"><i class="far fa-eye"></i></a></td>
                    <td><a href="update.php?id=<?php echo $row[0];?>" class="edit" target="_blank"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $row[0]?>" class="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa thí sinh này không?');"><i class="fas fa-trash-alt"></i></a> </td>
                </tr>          
            <?php
                }
            ?>
        </div>
            <div class="row">
                <div class="form-group">
                    <input type="submit" name="deleteMultipleBtn" value="Delete" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn xóa những thí sinh này không?');">
                </div>
            </div>
            </form>
                <?php
                    if(isset($_POST['deleteMultipleBtn'])){
                        $numberOfCheckbox = count($_POST['records']);
                        $i = 0;
                        while($i<$numberOfCheckbox){
                            $keyToDelete = $_POST['records'][$i];
                            $sql="DELETE FROM profile WHERE id = '$keyToDelete'";
                            mysqli_query($conn,$sql);
                            $i++;
                        }
                        header("Location:index.php");
                        ob_enf_fluch();
                    }
                ?>
            </tbody>
        </table>
        <!--//Admin Content-->

    </div>
    <!--//Page Wrapper-->

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!--Custom Script-->
    <script src="../../assets/js/scripts.js"></script>


</body>
</html>