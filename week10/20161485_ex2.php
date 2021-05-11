<?
      if(!isset($_SESSION['user_id']))
      {
         echo "<center>
                    <ht>인증되지 않아 이 기능을 사용할 수 없습니다 : >\n
                    <a href=20161485_ex1.html>인증 사이트로 가기</a><hr>
                 </center>";
      }
      else
      {
         echo "<center>
                    <hr><b>인증되었으므로 이 기능을 사용할 수 있습니다.</b><hr>
                 </center>\n";
      }
?>
