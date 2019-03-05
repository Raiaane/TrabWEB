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

  .materia
</style>
<body>
<div class="container">
        
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu">&#9776;</label>

            <nav class="menu" >
            <h2  style="width: 230px; border: 1px; margin-left: 10px; color: white; font-family: verdana; display: inline-block; margin-top: 10px; background-color: #48D1CC; ">Simulado Online</h2>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Aluno</a>
                              <ul>
                                    <li><a href="index.php"><?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Cadastro</a></li>
                                    <li><a href="index.php"> <?php echo "<script>alert('CADASTRE-SE OU LOGA-SE')</script>"; ?>Login</a></li>
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
<body background="images/fundo4.jpg" >

<div= class="materia">

</div>
</body>
</html>
