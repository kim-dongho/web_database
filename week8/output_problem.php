<?
    $database = "PBL_DB";
    $connect = mysql_connect('localhost','shlee', 'good')or die("mySQL 연결 Error!");

    mysql_select_db($database, $connect);

    $query = "select * from PBL_PROBLEMS";
    $result = mysql_query($query,$connect);

    $my_name = $_POST['my_name'];

    print "<table border=1 width=700 hspace=100>
            <tr>
                <td colspan=4 align=center>
                    <font size=15 color=Tomato>".$my_name."의 문제 개발 내용</font>
                </td>
            </tr>";

    $num = mysql_num_rows($result);
    
    for($i=0; $i<$num; $i++)
    {
        $tmp;
        $ans = mysql_fetch_row($result);
       
        if($ans[5] == "1")
            $tmp = "전공";
        else   
            $tmp = "교양";

        print " <tr>
                    <td width=100>학과</td>
                    <td>".$ans[0]."</td>
                    <td width=100>전공</td>
                    <td>".$ans[1]."</td>
                </tr>
                <tr>
                    <td width=100>문제개발자</td>
                    <td>".$ans[2]."</td>
                    <td width=100>교과목명</td>
                    <td>".$ans[3]."</td>
                </tr>
                <tr>
                    <td width=100>대상학년</td>
                    <td>".$ans[4]."</td>
                    <td width=100>과목속성</td>
                    <td>".$tmp."</td>
                </tr>
                <tr>
                    <td width=100>문제 개발</td>
                    <td>".$ans[6]."</td>
                    <td width=100>문제 수정</td>
                    <td>".$ans[7]."</td>
                </tr>
                <tr>
                    <td width=100>문제에서 다룰 주요 내용</td>
                    <td colspan=3>".$ans[8]."</td>
                </tr>
                <tr>
                    <td>전공</td>
                    <td colspan=3>".$ans[9]."</td>
                </tr>
                <tr>
                    <td width=100>학과</td>
                    <td colspan=3>".$ans[10]."</td>
                </tr>
                <tr>
                    <td width=100>전공</td>
                    <td colspan=3>".$ans[11]."</td>
                </tr>";
    }
    
    print "</table><br>";

    mysql_close($connect);
?>