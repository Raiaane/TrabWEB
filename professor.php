<<<<<<< HEAD
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



  
=======

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	
	* {
		padding: 0 auto;
		margin: 0;
	}

	.container {
		width: 100%;
		height: 60px;
		background: #48D1CC;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.teste ul li {
		display: inline;
		text-decoration: none;
		padding: 0px 30px;
		margin-left: 30px;
	}

	.teste ul li a {
		color: #fff; 
		text-decoration: none;
		
	}
	.flex-container{
		display: flex;
		justify-content: center;
		background-color: white;
		width: 300px;
		height: 440px;
		margin-left: 240px;
		margin-top: 60px;
}
	

  

		
  




    


	
>>>>>>> c636d4625f453e010a0d83584ace27970b0361f9

</style>
<body background="images/fundo4.jpg">

<<<<<<< HEAD
<!-- menu ######################################-->
<div class="container">
        
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu" >
    <h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
      <ul>
        <li><a href="teste.php">Home</a></li>
        <li><a href="">Aluno</a>
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
     
     <!--<h2  style="margin-left: -100px; color: white; font-family: verdana; "> Simulado online </h2> <h2> <img class="logo" src="images/icon2.png" style=" margin-top:-25px; margin-left: 510px; width: 60px;"></h2></ul><nav></nav>-->

    </nav>


    <!-- <nav><h2  style="margin-left: -30px; color: white; font-family: verdana; "> Simulado online</h2> </nav>
    <nav><img class="logo" src="images/icon2.png" style="padding-top: -20px; margin-left: -290px; width: 60px;"></nav>
    <nav class="teste">

      <ul>

        <li>
          <a href="aluno.php" style="font-family: verdana;" >ALUNO</a>
        </li>
        <li>
          <a href="professor.php" style="font-family: verdana;">PROFESSOR</a>
        </li>
        <li>
          <a href="" style="font-family: verdana;">CADASTRO</a>
        </li>
        <li>
          <a href="" style="font-family: verdana; ">SOBRE</a>
        </li>
      </ul>
    </nav> -->
</div>

=======
<!-- menu #########################################################################################################################################################-->
	<div class="container">

		<nav><h2  style="margin-left: -30px; color: white; font-family: verdana; "> Simulado online</h2> </nav>
		<nav><img class="logo" src="images/icon2.png" style="padding-top: -20px; margin-left: -290px; width: 60px;"></nav>
		<nav class="teste">

			<ul>

				<li>
					<a href="" style="font-family: verdana;">PROFESSOR</a>
				</li>
				<li>
					<a href="" style="font-family: verdana;">DICAS</a>
				</li>
				<li>
					<a href="" style="font-family: verdana;">SOBRE</a>
				</li>
				<li>
					<a href="menu.php" style="font-family: verdana; ">SAIR</a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- cadastro ################################################################################################################################################-->
	
 <!--login ###################################################################################################################################################-->
 	    
>>>>>>> c636d4625f453e010a0d83584ace27970b0361f9

</body>
</html>