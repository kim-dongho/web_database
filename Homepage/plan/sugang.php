<?php
    session_start();

    $userid="";

    if(isset($_SESSION['userid'])) $userid = $_SESSION['userid'];

?>
<!doctype html>
<html>
    <head>
        <style>
         #navigat li{
            margin-top : 20px;
            color : black;
            font-size : 17px;
        }
       </style>
    </head>
    <body>
        <form action="sugang.php" method="post">
            <nav style='float:left; background-color:#d5fefd; height:100%; width:18%; position:fixed; min-width:200px'>
              <p>
                  <img src="logo.png" style='margin:20px; width:200px; height:80px'>
              </p>
              <ul id="navigat" style='margin-top:20px; font-size:17px; list-style: none; cursor:pointer;' >
		<li onclick="window.open('home.html','_self')">ㅡ HOME</li><br>


		<!-- 비 로그인시 로그인/학번등록 -->
		<?php																		
			if(!$userid) {															
		?>
			<li onclick="window.open('../login/login.html','_self')">ㅡ 로그인/학번등록 </li><br>

		<!-- 로그인시 접속 학번출력 및 로그아웃 -->
		<?php } else { ?>														
			<li>ㅡ 접속 학번 : <?php print "$userid" ?> </li><br>						
			<li onclick="window.open('../login/logout.php','_self')">ㅡ 로그아웃 </li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 학적 관리</li><br>					
																							
		<!-- 로그인시 기능동작 -->
		<?php } else { ?>															
			<li onclick="window.open('../academic/grade1.html','_self')">ㅡ 학적 관리</li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 성적 조회</li><br>		

		<!-- 로그인시 기능동작 -->
		<?php } else { ?>	
			<li onclick="window.open('../grades/grades1.html','_self')">ㅡ 성적 조회</li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 0원 등록 신청</li><br>						
																							
		<!-- 로그인시 기능동작 -->
		<?php } else { ?>	
            <li onclick="window.open('../zerofee/zero_fee_m','_self')">ㅡ 0원 등록 신청</li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 등록 내역 조회</li><br>					
																							
		<!-- 로그인시 기능동작 -->
		<?php } else { ?>	
			<li onclick="window.open('../lookupfee/lookup_fee.html','_self')">ㅡ 등록 내역 조회</li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 휴·복학 신청</li><br>
					
																							
		<!-- 로그인시 기능동작 -->
		<?php } else { ?>	
            <li onclick="window.open('../leave/leave_page.html','_self')">ㅡ 휴·복학 신청</li><br>
		<?php } ?>


		<!-- 비 로그인시 알림창(alert 스크립트) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">ㅡ 수강 계획서 조회</li><br>
					
																							
		<!-- 로그인시 기능동작 -->
		<?php } else { ?>	
			<li onclick="window.open('../plan/sugang.html','_self')">ㅡ 수강 계획서 조회</li><br>
		<?php } ?>

		</ul>
    </nav>

            <section style='width:82%; height:100%; float:right'>
                <div id="wrap" style='height:100%; width:81%; margin:50px'>
                    <div id="search" style='width:100%; height:20%'>
                        > 강의계획서 조회 <input type="submit" value="조회" id="sub"><br>
                        <div id="search_code" style='height:30px; border: 1px solid black; background-color:#cceeff; margin:10px'>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            년도 <input type="text" name='year'>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            과목코드 <input type="text" name='code'>
                        </div>
                    </div>

                    <div id="list" style='width:50%; height:550px; float:left; margin-top:30px'>
                            <? include "sugang_2.php" ?>
                    </div>
                    <div id="show_pdf" style='width:450px; height:1000px; float:left; margin-top:30px'>
                            <iframe name="iframe1" style="width:650px; height:1000px"></iframe>
                    </div>
                </div>
            </section>
        </form>
    </body>
</html>