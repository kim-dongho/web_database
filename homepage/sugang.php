<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="sugang.css" type="text/css">
</head>
<body>
    <form action="sugang.php" method="post">
	<nav>
		<p>
			<img src = 'logo.png'>
		</p>
		<ul id="navigat">
			<li onclick="window.open('','mywin')">ㅡ HOME</li><br>
			<li onclick="window.open('','mywin')">ㅡ 학적 관리</li><br>
			<li onclick="window.open('','mywin')">ㅡ 성적 조회</li><br>
            <li onclick="window.open('','mywin')">ㅡ 0원 등록 신청</li><br>
			<li onclick="window.open('','mywin')">ㅡ 등록 내역 조회</li><br>
            <li onclick="window.open('','mywin')">ㅡ 휴·복학 신청</li><br>
			<li onclick="window.open('','mywin')">ㅡ 수강 계획서 조회</li><br>
		</ul>
    </nav>
    <section>
        <div id="wrap">
            <div id="search">
                > 수강계획서 조회 <input type="submit" value="조회" id="sub"><br>
                <div id="search_code">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    년도 <input type="text" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    과목코드 <input type="text">
                </div>
            </div>
            <div id="list">
                O 수강목록 리스트
                    <? include "sugang_2.php" ?>
             </div>
            <div id="show_pdf">
                    <? include "sugang_3.php" ?>
                    <iframe src="./viewer.php" frameborder="0"></iframe>
            </div>
    </section>
    </form>
</body>
</html>