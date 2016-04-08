<?php

  if($_POST['img'] == 'drag1' ){
      $data = '<img id="drag1" src="http://www.w3schools.com/html/html5.gif" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />';
  }else if($_POST['img'] == 'drag2'){
      $data = '<img id="drag2" src="lula.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />';
  }else if($_POST['img'] == 'drag3'){
      $data = '<img id="drag3" src="1.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />';
  }else if($_POST['img'] == 'drag4'){
      $data = '<img id="drag4" src="2.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />';
  }else if($_POST['img'] == 'drag5'){
      $data = '<img id="drag5" src="3.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />';
  }


  echo $data;

?>