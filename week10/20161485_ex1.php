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
            echo "<hr><center><b>�����Ǿ����ϴ�.</b><hr></center>";
        }
        else
        {
            echo "<br><br><center>���̵� Ȥ�� �н����带 Ȯ���Ͻñ� �ٶ��ϴ� :
                  <a href=20161485_ex1.html>�ٽ�����</a><br></center>";
        }
    }
    else
    {
        echo "<center><b>�̹� ������ ������Դϴ�.<br>";   
    }
?>
