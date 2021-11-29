<?php 
function loadall_taikhoan(){
    $sql="SELECT * FROM taikhoan order by idnd desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
    function insert_taikhoan($email,$pass,$user,$role){
        $sql= "INSERT INTO taikhoan(email,pass,use,vaitro) VALUES ('$email','$pass','$user','$role')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."' ";
        $sp=pdo_query_one($sql);
        return $sp ;
    }
    function update_taikhoan($idnd,$user,$pass,$email,$address,$tel,$role){
 
        $sql=" UPDATE taikhoan set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."', tel='".$tel."',vaitro='".$role."' WHERE idnd=".$idnd;
            pdo_execute($sql);
    }
    function checkemail($email){
        $sql="SELECT * FROM taikhoan WHERE email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function delete_kh($idnd){
        $sql="DELETE FROM taikhoan WHERE idnd=".$idnd;
        pdo_execute($sql);
    }
?>