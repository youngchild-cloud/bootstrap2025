<?php

  //php문법 작성하기

  class Grammer{ //클래스형 문법
    public $name = 'PHP수업';

    // 함수작성하기
    public function phpStudy($year){ //함수명 뒤에 매개변수 만들기
      //document.write(변수명);
      echo 'echo => 출력을 위한 명령어<br>';  //1줄 단위로 출력하기 위한 명령어
      echo '1줄씩 작성합니다.<br>';
      print '여러줄의 내용을 출력할 수 있습니다. <br>'; //출력하기
      echo '변수 name은 {$this->name}입니다.<br>';
      echo '변수 year는 {$year}입니다.<br>';
      echo $this->name . $year . '<br>';
    }
  }
  $year = '2025'; //전역변수 값을 입력
  $grammer = new Grammer(); //인스턴스(객체) 생성하기
  $grammer->phpStudy($year); //함수호출하여 객체 실행하기
?>