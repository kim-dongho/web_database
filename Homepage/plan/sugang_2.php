<?
    session_start();
    $stu_id = $_SESSION['userid'];
    $con = mysql_connect('localhost','root','apmsetup')
            or die("Connect error");
        
    mysql_select_db('pbl_db',$con) or die("Unable to connet to SQL Server");

    $year = $_POST['year'];
    $code = $_POST['code'];

    if(!empty($year) && !empty($code))
    {
        $query = 'select * from plan where year='.$year.'code='.$code;
        $result = mysql_query($query,$con);
        $num = mysql_num_rows($result);
        
        print " O ���Ǹ�� ����Ʈ [ �� ".$num." ���� ���� ]<br>
                <table id='plan_table' border=1 style='text-align:center; font-size:13px'><tr>
                <th>�⵵
                </th><th>�б�</th><th>�����ڵ�</th>
                <th>�����</th><th>�̼�����</th><th>��ǥ����</th><th>���ǰ�ȹ�� ����</th></tr>";
        
        for($i=0; $i < $num; $i++)
        {
            $ans = mysql_fetch_row($result);
            print "<tr>
                        <td>".$ans[0]."</td>
                        <td>".$ans[1]."</td>
                        <td>".$ans[4]."</td>
                        <td>".$ans[5]."</td>
                        <td>".$ans[6]."</td>
                        <td>".$ans[7]."</td>
                        <td><a href=./pdf/$ans[4].pdf target='iframe1'>����</a></td>
                   </tr>";
        }
        print "</table>";
    }
    else if(!empty($year) && empty($code))
    {
        $query = 'select * from plan where year='.$year;
        $result = mysql_query($query,$con);
        $num = mysql_num_rows($result);

        print " O ���Ǹ�� ����Ʈ [ �� ".$num." ���� ���� ]<br>
                <table id='plan_table' border=1 style='text-align:center; font-size:13px'><tr>
                <th>�⵵
                </th><th>�б�</th><th>�����ڵ�</th>
                <th>�����</th><th>�̼�����</th><th>��ǥ����</th><th>���ǰ�ȹ�� ����</th></tr>";
              
        for($i=0; $i < $num; $i++)
        {
             $ans = mysql_fetch_row($result);
            print "<tr>
                        <td>".$ans[0]."</td>
                        <td>".$ans[1]."</td>
                        <td>".$ans[4]."</td>
                        <td>".$ans[5]."</td>
                        <td>".$ans[6]."</td>
                        <td>".$ans[7]."</td>
                        <td><a href=./pdf/$ans[4].pdf target='iframe1'>����</a></td>
                   </tr>";
        }
        print "</table>";
    }
    else if(empty($year) && !empty($code))
    {
        $query = 'select * from plan where code='.$code;
        $result = mysql_query($query,$con);
        $num = mysql_num_rows($result);
        
        print " O ���Ǹ�� ����Ʈ [ �� ".$num." ���� ���� ]<br>
                <table id='plan_table' border=1 style='text-align:center; font-size:13px'><tr>
                <th>�⵵
                </th><th>�б�</th><th>�����ڵ�</th>
                <th>�����</th><th>�̼�����</th><th>��ǥ����</th><th>���ǰ�ȹ�� ����</th></tr>";
        

        for($i=0; $i < $num; $i++)
        {
             $ans = mysql_fetch_row($result);
            print "<tr>
                        <td>".$ans[0]."</td>
                        <td>".$ans[1]."</td>
                        <td>".$ans[4]."</td>
                        <td>".$ans[5]."</td>
                        <td>".$ans[6]."</td>
                        <td>".$ans[7]."</td>
                        <td><a href=./pdf/$ans[4].pdf target='iframe1'>����</a></td>
                   </tr>";
        }
        print "</table>";
    }
    else
    {
        $query = 'select * from plan';
        $result = mysql_query($query,$con);
        $num = mysql_num_rows($result);

        print " O ���Ǹ�� ����Ʈ [ �� ".$num." ���� ���� ]<br>
                <table id='plan_table' border=1 style='text-align:center; font-size:13px'><tr>
                <th>�⵵
                </th><th>�б�</th><th>�����ڵ�</th>
                <th>�����</th><th>�̼�����</th><th>��ǥ����</th><th>���ǰ�ȹ�� ����</th></tr>";

        for($i=0; $i < $num; $i++)
        {
            $ans = mysql_fetch_row($result);
            print "<tr>
                        <td>".$ans[0]."</td>
                        <td>".$ans[1]."</td>
                        <td>".$ans[4]."</td>
                        <td>".$ans[5]."</td>
                        <td>".$ans[6]."</td>
                        <td>".$ans[7]."</td>
                        <td><a href=./pdf/$ans[4].pdf target='iframe1'>����</a></td>
                   </tr>";
        }
        print "</table>";
    }
    mysql_close($con);
?>