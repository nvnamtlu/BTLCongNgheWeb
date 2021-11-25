<?php  
    function getAllTS(){
        global $conn;
        $sql="SELECT * FROM profile";
        $result = mysqli_query($conn,$sql);
        $thisinh = mysqli_fetch_all($result);
        return $thisinh;
    }
    function deleteTS($id){
        global $conn;
        $sql = "DELETE FROM profile WHERE id ='$id'";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }
    function getOneTS($id){
		global $conn;
		$sql="SELECT * FROM profile WHERE id='$id'";
		$result= mysqli_query($conn,$sql);
		$thisinh= mysqli_fetch_assoc($result);
		return $thisinh;
    }
?>