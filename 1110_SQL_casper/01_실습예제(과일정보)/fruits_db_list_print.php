<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>과일정보 리스트 출력문서</title>
  </head>
  <body>
    <h2>과일정보 리스트 출력문서</h2>
    <p>과일정보 입력폼 문서에서 사용자가 리스트 출력하기 버튼 클릭시 해당 문서가 열리면서 db에 있는 자료를 조회(select)하여 리스트 목록으로 출력(print)한다.</p>

    <?php
    //과일 정보 리스트 출력문서 
    //1. db정보를 설정
    $mysql_host='localhost';
    $mysql_user='root';
    $mysql_password='1234';
    $mysql_db='kdt';

    //2. db정보를 conn변수에 담는다.
    $conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    //3. db접속이 실패시 에러 성공하면 쿼리문 실행
    if(!$conn){
      die('연결실패 : ' . mysqli_connect_errer());
    }

    //4. DB접속이 성공이면 쿼리문 실행
    $query = 'select * from fruits';
    $result = mysqli_query($conn, $query);

    print "<table><thead><tr><th>No.</th><th>Name</th><th>Price</th><th>Color</th><th>Country</th></tr></thead>";

    //5. 리스트 출력하기(반복문 for, foreach, while)
    while($row = mysqli_fetch_row($result)){
      print '<tbody><tr><td>' . $row[0] . '</td>' .
      '<td>' . $row[1] . '</td>' .
      '<td>' . $row[2] . '</td>' .
      '<td>' . $row[3] . '</td>' .
      '<td>' . $row[4] . '</td></tr></tbody>';
    }

    print "</table>";

    //6. 출력이 완료되면 쿼리문 종료 db접속 종료
    mysqli_free_result($result); //메모리 비운다.
    mysqli_close($conn); //db접속 종료

    ?>
  </body>
</html>

