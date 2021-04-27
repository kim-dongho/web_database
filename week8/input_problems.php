<html>
    <head>
        <title>input_problems.php</title>
    </head>
<?
    function insert_Data($answer1,$answer2,$answer3,$answer4,$answer5,$answer6,$answer7,$answer8,$answer9,$answer10,$answer11,$answer12)
    {
        $database = 'PBL_DB';
        $connect = mysql_connect('localhost','shlee', 'good') or die("mySQL 서버 연결 Error!");
        mysql_query("set names utf-8", $connect); 

        mysql_select_db($database, $connect);
 
        $query = "insert into PBL_PROBLEMS values('$answer1','$answer2','$answer3','$answer4','$answer5',
                                                    '$answer6','$answer7','$answer8','$answer9','$answer10','$answer11','$answer12')";
        
        echo "$query";
        
        $result = mysql_query($query,$connect);
        mysql_close($connect);

        print "<HTML><head><META http-equiv='refresh' content='0;url=./result.php'></head></head>";
    }

    if(empty($_POST['mode']))
    {
        $depart = $_POST['department'];
        $maj = $_POST['major'];
        $ques_dev = $_POST['question_developer'];
        $course = $_POST['course_title'];
        $target = $_POST['target_grade'];
        $choice_class = $_POST['class'];

        $year_1 = $_POST['year1'];
        $month_1 = $_POST['month1'];
        $day_1 = $_POST['day1'];
        $ymd = "$year_1"." "."$month_1"." "."$day_1";

        $year_2 = $_POST['year2'];
        $month_2 = $_POST['month2'];
        $day_2 = $_POST['day2'];
        $ymd2 = "$year_2"." "."$month_2"." "."$day_2";
        
        $cont = $_POST['contents'];
        $temp = addslashes($cont);
        $cont_len = strlen($temp);
        
        $cont_goal = $_POST['goal'];
        $temp = addslashes($cont_goal);
        $cont_goal_len = strlen($temp);
        
        $ques_name = $_POST['question_name'];
        $temp = addslashes($ques_name);
        $ques_name_len = strlen($temp);
        
        $ques = $_POST['question'];
        $temp = addslashes($ques);
        $ques_len = strlen($temp);

        if($depart == "") $error.=".<br>";
        if($maj == "") $error.="학과 필드의 답을 하지 않았습니다.<br>";
        if($ques_dev == "") $error.="전공 필드의 답을 하지 않았습니다.<br>";
        if($course == "") $error.="문제 개발자 필드의 답을 하지 않았습니다.<br>";
        if($target == "") $error.="교과목명 필드의 답을 하지 않았습니다.<br>";
        if($choice_class == "") $error.="대상학년 필드의 답을 하지 않았습니다.<br>";
        if($year_1 == "" || $month_1 == "" || $day_1 == "") $error.="문제 개발 필드의 답을 하지 않았습니다.<br>";
        if($year_2 == "" || $month_2 == "" || $day_2 == "") $error.="문제 수정 필드의 답을 하지 않았습니다.<br>";
        if($cont_len >= 256) $error.="문제에서 다룰 내용에 입력한 문자열이 너무 깁니다.<br>
                                        저장하게되면 255문자 이후는 저장되지 않습니다.<br>";
        if($cont_goal_len >= 256) $error.="학습 목표에 입력한 문자열이 너무 깁니다.<br>
                                            저장하게되면 255문자 이후는 저장되지 않습니다.<br>";
        if($ques_name_len >= 256) $error.="문제명에 입력한 문자열이 너무 깁니다.<br>
                                            저장하게되면 255문자 이후는 저장되지 않습니다.<br>";
        if($ques_len >= 256) $error.="문제에 입력한 문자열이 너무 깁니다.<br>
                                        저장하게되면 255문자 이후는 저장되지 않습니다.<br>";
    
        if($error != "")
        {
           ?> 
            <html>
                <head>
                    <title>예제 저장 오류</title>
                    <META http-equiv='Content-Type' content='text/html;charset=EUR-KR'>
                    <META name ='Author' content='김창화'>
                    <META name='keyword' content='문제 개발'>
                </head>

                <body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
                    <p align="center"><font size="5"><b>예제 오류</b></font><br>
                    &nbsp;
                    <div align="center"><table border="0">
                    <tr>
                    <td>
                    <? php>
                        print "$error</td></tr></table></div></p>\n";
                        print "<center>\n";
                        print "<form action='./input_problems.php' method=post>\n";
                        print "<input type='hidden' name='answer1' value='$depart'>\n";
                        print "<input type='hidden' name='answer2' value='$maj'>\n";
                        print "<input type='hidden' name='answer3' value='$ques_dev'>\n";
                        print "<input type='hidden' name='answer1' value='$course'>\n";
                        print "<input type='hidden' name='answer2' value='$target'>\n";
                        print "<input type='hidden' name='answer3' value='$choice_class'>\n";
                        print "<input type='hidden' name='answer1' value='$ymd'>\n";
                        print "<input type='hidden' name='answer2' value='$ymd2'>\n";
                        print "<input type='hidden' name='answer3' value='$cont'>\n";
                        print "<input type='hidden' name='answer1' value='$cont_goal'>\n";
                        print "<input type='hidden' name='answer2' value='$ques_name'>\n";
                        print "<input type='hidden' name='answer2' value='$ques'>\n";
                        print "<input type='hidden' name='mode' value='input'>\n";
                        print "<input type='submit' value='내용저장'>\n";
                        print "<input type='button' value='다시입력' onClick=javascript:history.back()>\n</form></center>";
                        print "</body>\n</html>\n";
        }
        else 
        {
            insert_Data($depart,$maj,$ques_dev,$course,$target,$choice_class,$ymd,$ymd2,$cont,$cont_goal,$ques_name,$ques);
        }
    }
    else insert_Data($_POST['depart'],$_POST['major'],$_POST['ques_dev'],$_POST['course'],$_POST['target'],$_POST['class'],
                    $_POST['ymd'],$_POST['ymd2'],$_POST['cont'],$_POST['cont_goal'],$_POST['ques_name'],$_POST['ques']);
?>
</html>