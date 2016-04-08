<!DOCTYPE HTML>
<html>
<head>
    <style>
        #div1{
            width:350px;
            height:140px;
            padding:10px;
            border:1px solid #aaaaaa;
        }

    </style>

    <script type="text/javascript" src="jquery.min.js" ></script>

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var drag1 = ev.dataTransfer.getData("text");
            var a = document.getElementById(drag1).src.toString();
            if(ev.target.appendChild(document.getElementById(drag1))){
                document.getElementById('imgloko').src = '';
                document.getElementById('imgloko').src = a;

                $.ajax({
                    url:'teste.php',
                    type:'POST',
                    data:{
                        img: drag1
                    },
                    success:function(data){
                        $('#recebe').append(data);
                    }
                });
            }

        }



    </script>
</head>
<body>

<h1 style="font-size: 26px;">APLICAÇÃO SIMPLES</h1>
<h1 style="font-size: 22px;">Arraste a imagem para dentro da DIV.</h1>

<h5>Fontes: http://www.w3schools.com/html/tryit.asp?filename=tryhtml5_draganddrop</h5>

<div id="div1"  >

    <img id="imgloko" class="imgloko" src="lula.jpg" style="width: 24%;" ondrop="drop(event)" ondragover="allowDrop(event)"   />

</div>

<br>


<img id="drag1" src="http://www.w3schools.com/html/html5.gif" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />
<img id="drag2" src="lula.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />
<img id="drag3" src="1.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"  />
<img id="drag4" src="2.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"   />
<img id="drag5" src="3.jpg" draggable="true" ondragstart="drag(event)" style="width: 5%; cursor: pointer;"   />

<div id="recebe">

</div>

</body>
</html>