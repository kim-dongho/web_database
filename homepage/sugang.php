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
			<li onclick="window.open('','mywin')">�� HOME</li><br>
			<li onclick="window.open('','mywin')">�� ���� ����</li><br>
			<li onclick="window.open('','mywin')">�� ���� ��ȸ</li><br>
            <li onclick="window.open('','mywin')">�� 0�� ��� ��û</li><br>
			<li onclick="window.open('','mywin')">�� ��� ���� ��ȸ</li><br>
            <li onclick="window.open('','mywin')">�� �ޡ����� ��û</li><br>
			<li onclick="window.open('','mywin')">�� ���� ��ȹ�� ��ȸ</li><br>
		</ul>
    </nav>
    <section>
        <div id="wrap">
            <div id="search">
                > ������ȹ�� ��ȸ <input type="submit" value="��ȸ" id="sub"><br>
                <div id="search_code">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    �⵵ <input type="text" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    �����ڵ� <input type="text">
                </div>
            </div>
            <div id="list">
                O ������� ����Ʈ
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