<?
    $con = mysql_connect('localhost','root','apmsetup')
            or die("Connect error");
        
    mysql_select_db('pbl_homepage',$con) or die("Unable to connet to SQL Server");

    $query = 'select * from sugang';
    $result = mysql_query($query,$con);

    print "<table id='sugang_table' border=1 style='text-align:center; font-size:13px'><tr>
            <th>�⵵</th><th>�б�</th><th>�����ڵ�</th>
            <th>�����</th><th>�̼�����</th><th>��ǥ����</th></tr>";
    
    $num = mysql_num_rows($result);

    for($i=0; $i < $num; $i++)
    {
        $ans = mysql_fetch_row($result);
        
        print "<tr>
                    <td>".$ans[0]."</td>
                    <td>".$ans[1]."</td>
                    <td>".$ans[2]."</td>
                    <td>".$ans[3]."</td>
                    <td>".$ans[4]."</td>
                    <td>".$ans[5]."</td>
                </tr>";
        
    }
    print "</table>";

    mysql_close($con);
?>