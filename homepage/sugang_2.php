<?
    $con = mysql_connect('localhost','root','apmsetup')
            or die("Connect error");
        
    mysql_select_db('pbl_homepage',$con) or die("Unable to connet to SQL Server");

    $query = 'select * from sugang';
    $result = mysql_query($query,$con);

    print "<table id='sugang_table' border=1 style='text-align:center; font-size:13px'><tr>
            <th>년도</th><th>학기</th><th>과목코드</th>
            <th>과목명</th><th>이수구분</th><th>대표교수</th></tr>";
    
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