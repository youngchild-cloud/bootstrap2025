<?php

  //fruits_db_input.php
  //입력양식에서 사용자가 입력한 내용을 전달받아 데이터를 처리하기 위한 문서
  //입력폼에서 post로 전송한 경우는 $_POST로 받음
  //입력폼의 name속성값을 POST안에 넣어준다.

  //1. 변수선언
  $name = $_POST['name_txt'];
  $price = $_POST['price_txt'];
  $color = $_POST['color_txt'];
  $country = $_POST['country_txt'];

  //2. 변수값 출력하기
  //echo $name . '<br>';
  //echo $price . '<br>';
  //echo $color . '<br>';
  //echo $country . '<br>';
  //echo '출력 테스트 완료<br>';

  //p. 537  php와 db연동 방법

  //1. 절차지향스타일  p.538
  $mysql_host = 'localhost'; //127.0.0.1
  $mysql_user = 'root'; //관리자 아이디
  $mysql_password = '1234'; //관리자 패스워드
  $mysql_db = 'kdt'; //db명

  //$conn = mysqli_connect('localhost', 'root', '', 'kdt');
  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  //2. 객체지향스타일 p.539
  //$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db)

  //3. 만약에 db연결이 실패한다면 오류 메세지 띄우기
  if(!$conn){ //연결 실패한다면
    die('연결실패 : ' .mysqli_connect_errer()); //오류 메세지 띄우고 접속종료.
  }

  //4. db정보 검사가 통과가 되면 쿼리문을 통해 $query변수에 결과값 저장한다.
  $query = "insert into fruits(name, price, color, country) values ('$name', '$price', '$color','$country')";

  //5. db에 쿼리문을 실행한다. (==입력완료)
  $result = mysqli_query($conn, $query);

  //6. db입력완료 출력
  echo 'db입력완료';
  

?>