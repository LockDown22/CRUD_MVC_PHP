<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action="";
}

switch($action){
    case "add":{
        if(isset($_POST['submit'])){
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $db->action("INSERT INTO nhansu(hoten,gioitinh,sdt,diachi,email) VALUES ('$hoten','$gioitinh','$sdt','$diachi','$email') ");
            header("Location:index.php?controller=nhansu");
            // if(empty($hoten)||empty($gioitinh)||empty($sdt)||empty($diachi)||empty($email)){

            //     $error = "not null";
            // }else{
               
            // }

        }
        require_once "view/add.php";
        
        break;
    }
    case "edit":{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach($db->getData("SELECT * FROM nhansu WHERE mans='$id'") as $row){
                $name = isset($_GET['hoten'])?$row['hoten']:'';
                $gioitinh = isset($_GET['gioitinh'])?$row['gioitinh']:'';
                $sdt = isset($_GET['sdt'])?$row['sdt']:'';
                $diachi = isset($_GET['diachi'])?$row['diachi']:'';
                $email = isset($_GET['email'])?$row['email']:'';

            }
        }
        if(isset($_POST['submit'])){
            $name_new = $_POST['hoten'];
            $gt_new = $_POST['gioitinh'];
            $sdt_new = $_POST['sdt'];
            $dc_new = $_POST['diachi'];
            $mail_new = $_POST['email'];
            $db->action("UPDATE nhansu SET hoten='$name_new',gioitinh='$gt_new',sdt='$sdt_new',diachi='$dc_new',email='$mail_new' WHERE mans='$id'");
            header("Location:index.php?controller=nhansu");

        }
        require_once "view/edit.php";
        break;
    }
    case "delete":{
       if(isset($_GET['id'])){
        $id=$_GET['id'];
        $db->action("DELETE FROM nhansu WHERE mans = '$id'");
        header("Location:index.php?controller=nhansu");
       }
        break;
    }
    default:{
        $data = $db -> getData("SELECT * FROM nhansu");
        require_once "view/index.php";
        break;
    }


}



?>