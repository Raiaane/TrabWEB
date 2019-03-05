<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	

	*{
		margin: 0;
		padding: 0;
	}
	nav { display: flex;
		flex-direction: row
	 }
	.menu{
		width: 100%;
		height: 50px;
		background-color: #48D1CC;
		font-family: 'Arial';
		position: relative;
	}
      .menu ul{
      	list-style: none;
      	position: relative;
      }

  
      .menu ul li{
      	width: 150px;
      	float: left;
      }

      .menu a{

      	padding: 15px;
      	display: block;
      	text-decoration: none;
      	text-align: center;
      	background-color: #48D1CC;
      	color: #fff;
      	margin-left: 
      	
      }
      .menu ul ul{
      	position: absolute;
      	visibility: hidden;

      }
      .menu ul li:hover ul{
      	visibility: visible;
      }

      .menu a:hover{
      	background-color: #F0E68C;
      	color: #555;

      }

      .menu ul ul li{
      	float: none;
      	border-bottom: solid 1px #ccc;


      }

      .menu ul ul li a{
      	background-color: #F0E68C;
      
      }
      label[for="bt_menu"]{
      	padding: 5px;
      	background-color: #48D1CC;
      	color: #fff;
      	font-family: "Arial";
      	text-align: center;
      	font-size: 30px;
      	cursor: pointer;
      	width: 50px;
      	height: 50px;
      }
      #bt_menu{
      	display: none;
      }
      label[for="bt_menu"]{
      	display: none;
      }

      @media(max-width: 800px){
      	label[for="bt_menu"]{
      	display: block;
      }
      #bt_menu:checked ~ .menu{
      	margin-left: 0;
      }

      nav h2{ visibility: hidden; display: none; }
      .menu{
      	margin-top: 5px;
      	margin-left: -100%;
      	transition: all .4s;
      	width: 100%;
      }
      		menu ul{
      			width: 100%;
      			float: none;
      		}
      		.menu ul li{
      			width: 100%;
      			float: left;
      		}
      		.menu ul ul{
      			position: static;
      			overflow: hidden;
      			max-height: 0;
      			transition: all .4s;
      		}
      		.menu ul li:hover ul{
      			height: auto;
      			max-height: 800px;
      		}
      }

.btn{
         margin-top: -40px;
          margin-left: 60px; 
          font-family: verdana;
           width:150px; 
           height: 40px;
           text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;


      }
      .btn-yellow{
        background-color: #FFFF50;
        box-shadow: 0 5px 0 #CDCD00;

      }
      .btn-yellow:hover{
        background-color:#CDCD00 ;
        box-shadow: 0 5px 0 #F5F5DC;
      }
        .btn2{
          background-color: #4682B4;
           margin-top: 90px; 
           margin-left: -650px;
            font-family: verdana; 
            width:150px; 
            height: 40px;
            text-transform: uppercase;
           font-weight: 700;
           border: none;
           cursor: pointer;
        }
        .btn-blue{
        background-color: #4682B4;
        box-shadow: 0 5px 0 #B0C4DE;
         margin-top: 90px;
         /*margin-left: -650px;*/
          font-family: verdana;
           width:150px; 
           height: 40px;
      }
      .btn-blue:hover{
        background-color:#B0C4DE ;
        box-shadow: 0 5px 0 #4682B4;
      }
      



</style>
<body background="images/fundo4.jpg">

<!-- menu ######################################-->
<div class="container">
        
		<input type="checkbox" id="bt_menu">
		<label for="bt_menu">&#9776;</label>

		<nav class="menu" >
		<h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="alunoo.php">Aluno</a>
					<ul>
						<li><a href="">Cadastro</a></li>
						<li><a href="">Login</a></li>
					</ul>
				</li>
				<li><a href="professor.php">Professor</a>
				<ul>
						<li><a href="">Provas</a></li>
						<li><a href="">Gabaritos</a></li>
					</ul></li>
				<li><a href="">Dicas</a></li>

		        
			</ul>
     

		</nav>

</div>


<style type="text/css">
    .resp{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .resp{
        display: flex;
        flex-direction: row;
        width:100%;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .resp {
        width:300px;
        height: 400px;
       display: flex; flex: 1; flex-direction: column;
      }
    }
    
   .cadastro, .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
    
   }

   .cadastro{
    margin: 30px 15%;
   }


   @media(max-width: 2000px){
      .cadastro {
        width:300px;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .cadastro {
        width:300px;
        height: 400px;
        
      }
    }


  }
	div.cadastro form{
		display: flex;
		flex-wrap: wrap;
		flex-wrap: row wrap;
	}

  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }

  .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
   }

   @media(max-width: 2000px){
      .login {
        width:300px;
        height: 270px;
       
      }
    }

    @media(max-width: 1000px){
      .login{
        width:300px;
        height: 270px;
       
      }
    }

  }

  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }
}
* {box-sizing:border-box}

   .cadastro2, .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
    
   }

   .cadastro2{
    margin: 30px 15%;
   }


   @media(max-width: 2000px){
      .cadastro2 {
        width:300px;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .cadastro2 {
        width:300px;
        height: 400px;
       
      }
    }


  }
  div.cadastro2 form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }


/* Slideshow container */
.slideshow-container {
  max-width: 1800px;

  margin-top: -20px;
  position: relative;
  margin: auto;
  /*height: 30px;*/
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 10px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

 @media(max-width: 2000px){
      .sobre {
        width:100%;
        height: 270px;
       
      }
    }

    @media(max-width: 1000px){
      .sobre{
      transform: translateY(310px);
        width:300px;
        height: 270px;
       
      }
    }
}


  
</style>



<style type="text/css">
    .resp{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .resp{
        display: flex;
        flex-direction: row;
        width:100%;
        height: 400px;
       
      }
    }

    @media(max-width: 1000px){
      .resp {
        width:300px;
        height: 400px;
       display: flex; flex: 1; flex-direction: column;
      }
    }

   .cadastro, .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
    
   }

   .cadastro{
    /*margin: 30px 15%;*/
   }


   @media(max-width: 2000px){
      .cadastro {
        width:300px;
        height: 400px;
       margin: 30px 5%;
      }
    }

    @media(max-width: 1000px){
      .cadastro {
        width:300px;
        height: 400px;
       
      }
    }


  }
  div.cadastro form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }

  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }

  .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
   }


   @media(max-width: 2000px){
      .login {
        width:300px;
        height: 270px;
       
      }
    }

    @media(max-width: 1000px){
      .login{
        width:300px;
        height: 270px;
       
      }
    }

  }
  div.login form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }
}
* {box-sizing:border-box}

.resp2{
      display: inline-block;
    }

     @media(max-width: 2000px){
      .resp2{
        display: flex;
        flex-direction: row;
        width:100%;
        height: 400px;
        transform: translateY(15px);
       
      }
    }

    @media(max-width: 1000px){
      .resp2 {
        position: relative;
        top: 605px;
        width:300px;
        height: 400px;
       display: flex; flex: 1; flex-direction: column;
       transform: translateY(45px);
      }
    }



.cadastro2, .login{
    background-color:rgb(255,255,255);
    border-radius: 30px;
    
   }

   .cadastro2{
    /*margin: 30px 15%;*/
   }


   @media(max-width: 2000px){
      .cadastro2 {
        width:300px;
        height: 400px;
       margin: 30px 5%;
      }
    }

    @media(max-width: 1000px){
      .cadastro2 {
        width:300px;
        height: 400px;
       
      }
    }


  }
  div.cadastro2 form{
    display: flex;
    flex-wrap: wrap;
    flex-wrap: row wrap;
  }

</style>


</div>
   
<?php
      include_once('UsuarioDAO.php');
      include_once ('Usuario.php');
      
      $Insere = new UsuarioDAO();
      $usuario =  new Usuario();
   	  if(isset($_POST['enviar'])){
      $usuario->setNome($_POST['nome']);
      $usuario->setTel($_POST['telef']);
      $usuario->setUser($_POST['usuario']);
      $usuario->setPass($_POST['senha']);
      $usuario->setEmail($_POST['email']);
      $usuario->setCpf($_POST['cpf']);

      $Insere->Cadastra($usuario);
  }
  ?>

     <!--CODIGO DO LOGIN -->
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/dicass.png" style="width:100%; height: 100%;">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/dicasenem2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/dicasenem3.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
 <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/dicasenem.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->

<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
<!-- <div class="sobre" style="background-color:rgb(254, 254, 128); width: 100%; height: 400px; margin-top: -50px;"> -->

<div class="resp" style="">
  
 <div class="cadastro"> 
  <center>
    <form method="post">
  
         
   
  <legend style="color: black; font-family: System; margin-top: 27px;"><b>FAÇA A LISTA DA SEMANA</b></legend><br>
    <h5 style="color: black; font-family: verdana;"><b>Para não ficar perdido em meio a tantos compromissos que surgem na nossa rotina, faça uma lista de tudo o que precisa fazer a cada semana. Inclua nessa lista as coisas da casa, encontros com amigos e, claro, todas as matérias que vai estudar!</b></h5><br>
    <img src="images/enem2.png">
    
  </form>
  </center>
 </div>


<div class="cadastro" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System; margin-top: 27px;"><b> ESTUDE OS TEMAS QUE MAIS CAEM</b></legend><br>

    <h5 style="color: black; font-family: verdana;" for="usuario"><b>
A prova do Enem tem uma característica peculiar: não é dividida em disciplinas, como os outros vestibulares, mas sim em áreas do conhecimento. Esses grandes grupos são categorizados da seguinte maneira:

</b></h5><br>
    
    <img src="images/book.png">
    
  
  </form>

  </center>
</div>
  
<div class="cadastro" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System;"><b> ENCARE OS ESTUDOS COMO UM COMPROMISSO</b></legend><br>

    <h5 style="color: black; font-family: verdana;" for="usuario"><b>Isso mesmo! Se o seu objetivo é obter um bom resultado no Enem, no vestibular ou no Encceja, deve ter na mente que estudar é coisa séria. Por isso, não pode estudar “quando sobra um tempinho”, nem em qualquer lugar. O ideal é ter um horário e um local dedicados exclusivamente aos estudos.

</b></h5><br>
    
    <img src="images/book22.png">
    
  
  </form>

  </center>
</div>
</div>







<div class="resp2" style="">
  
<div class="cadastro2"> 
  <center>
    <form method="post">
  
         
   
  <legend style="color: black; font-family: System; margin-top: 27px;"><b>Comece a estudar o quanto antes</b></legend><br>
    <h5 style="color: black; font-family: verdana;"><b>Se você já tem um local de estudos e a agenda preparada, é hora de começar a estudar!

Às vezes parece que falta muito tempo para o Enem. Mas, quando a gente se dá conta, já chegou o dia.

Portanto, mãos à obra. </b></h5><br>
    <img src="images/estudos.png">
    
  </form>
  </center>
 </div>


<div class="cadastro2" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System; margin-top: 27px;"><b> Use a internet a seu favor</b></legend><br>

    <h5 style="color: black; font-family: verdana;" for="usuario"><b>
Durante os estudos, a internet pode ser sua melhor aliada ou sua pior inimiga. É que existe muito conteúdo legal sobre Enem para pesquisar, mas também muito material duvidoso. Veja quais são os sites ou perfis de confiança e use a ferramenta para aprender mais.
</b></h5><br>
    
    <img src="images/inter.png">
    
  
  </form>

  </center>
</div>
  
<div class="cadastro2" style="">
  <center>
  <form method="post">
    <legend style="color: black; font-family: System;"><b> Para exercitar, faça as provas anteriores</b></legend><br>

    <h5 style="color: black; font-family: verdana;" for="usuario"><b>Ainda não inventaram uma fórmula melhor de treinar para o Enem do que resolver as provas anteriores. Elas ajudam a se familiarizar com o formato e o grau de dificuldade das questões.

De quebra, ainda permitem identificar quais são as disciplinas em que você tem mais dificuldade.

</b></h5><br>
    
    <img src="images/lampa2.png">
    
  
  </form>

  </center>
</div>
</div>

  
 








</body>
</html>

  
