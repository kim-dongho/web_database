<?
    session_start();
    $stu_id = $_SESSION['userid'];
    $database = "pbl_db";
    $con = mysql_connect('localhost','root','apmsetup')
            or die("mySQL ���� ���� Error");
        
    mysql_select_db($database, $con);

    $name = $_POST['name'];
    $stu_id = $_POST['stu_id'];
    $reason = $_POST['reason'];
    $day = $_POST['day'];
    $choice = $_POST['choice'];
    $address = $_POST['address'];

    $query = 'select * from statement where stu_id='.$stu_id;

    $result = mysql_query($query,$con);

    $ans = mysql_fetch_row($result);

    if(empty($ans[0]))
    {
        if($choice == 1)
            $choice = "������";
        else   
            $choice = "�Ϲ�����";

        $query1 = "insert into statement values('$stu_id','$name','$reason','$day','$choice','$address')";

        $result1 = mysql_query($query1,$con);

        $query2 = "update ".$stu_id."grade set lastrecord='����'";

        $result2 = mysql_query($query2,$con);

        mysql_close($con);

        print '<script type="text/javascript">alert("���� ��û�� �Ϸ� �Ǿ����ϴ�!");</script>';
    }
    else
    {
        print '<script type="text/javascript">alert("�̹� ���� ��û�� �� ������ �ֽ��ϴ�!");</script>';
    }
    echo ("<script>location.href='../login/home.html'</script>") ;
?>
    