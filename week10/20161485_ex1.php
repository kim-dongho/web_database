<?
    session_start();
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    
    if(!isset($_SESSION['user_id']))
    {   
        if($id=='shlee' && $pw=='good')
        {
            $_SESSION['user_id'] = $id;
            $_SESSION['pw'] = $pw;
            echo "<hr><center><b>인증되었습니다.</b><hr></center>";
        }
        else
        {
            echo "<br><br><center>아이디 혹은 패스워드를 확인하시기 바랍니다 :
                  <a href=20161485_ex1.html>다시인증</a><br></center>";
        }
    }
    else
    {
        echo "<center><b>이미 인증된 사용자입니다.<br>";   
    }
?>
