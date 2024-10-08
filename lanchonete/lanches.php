<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERIORANNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;

}

.header-bg {
    background-color: #521604; /* Cor de fundo para a barra */

}

.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    padding:20px 20px;
   
  
   
}

.logo {
    color: #fff;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-decoration: none;
    font-weight: bold;
    margin: 5px;
    /* width: 200px; Tamanho da logo, ajuste conforme necessário */
}


.menu-primaria ul {
    list-style: none;

}

.menu-primaria li {
    display: inline-block;

}

.menu-primaria a {
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: 18px;
    padding: 20px;
}

.menu-primaria a:hover {
    background-color: rgb(255, 255, 255);
    padding: 20px;
    color: #000000;
    
    
}

/* .container {
  padding-top: 5%;
} */

h1 {
  background-color: #521604;
  padding: 20px;
  text-align: center;
  color:#fff ;
 }

 h5 {
    font-size: 25px;
    text-align: center;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 }

 .card-text {
    text-align: center;
    margin: 20px;
 }

 .btn{

    background-color: #521604;
    border-radius: 2px solid #521604;
    color: #fff;
    justify-items: center;
 }

 .btn:hover {
    background-color: #000000;
    color: #fff;
 }

 .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-align: center;
}

.image {
    flex: 1;
    text-align: right;
    
}

.image img {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
}

.text {
    flex: 1;
    padding-left: 20px; /* Espaço entre imagem e texto */
}

.titulo-promo {
  color: #521604;
  font-weight: bold;
  font-size: 40px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}


 .text {
  font-size: 30px;
  font-weight: 500;
}

footer {
  background-color: #521604;
  color: #fff;
  padding: 40px;
  margin-top: 30px;
  text-align: center;

}

a {
  text-decoration: none;
  color: #fff;
}


</style>

<body>
<?php include './-inc/nav.php'  ?>

        <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="img/lanches/megabacon.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Mega Bacon</h5>
                  <p class="card-text">Um lanche robusto com hambúrguer suculento, queijo derretido e uma generosa porção de bacon crocante. Tudo isso acompanhado por alface fresca e molho especial, criando o equilíbrio perfeito entre sabor e textura.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/lanches/megacheddar.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Mega Cheddar</h5>
                  <p class="card-text">Para os amantes de queijo, o Mega Cheddar traz um hambúrguer macio com uma camada cremosa de cheddar, bacon crocante, alface e molho especial. Uma combinação irresistível para quem deseja um sabor marcante.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/lanches/salada.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Salada 2.0</h5>
                  <p class="card-text">Uma opção leve e saborosa! O Salada vem com hambúrguer grelhado, alface, tomate, cebola e um toque de molho especial. Ingredientes frescos que garantem uma experiência refrescante e deliciosa.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/lanches/bacon.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Bacon 2.0</h5>
                  <p class="card-text">Suculento hambúrguer acompanhado por fatias de bacon crocante, queijo derretido e alface fresca. Finalizado com molho especial, o Bacon é uma escolha que combina simplicidade e sabor irresistível.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h1>PROMOÇÕES DA SEMANA</h1>

        <div class="container">
          <div class="image">
              <img src="img/bebidas/caipirinha.jpg" alt="Batida de Morango">
          </div>
          <div class="text">
              <h2 class="titulo-promo">CAIPIRINHA</h2>
              <p class="text">Com 20% OFF</p>
              <a href="bebidas.php" class="btn">Comprar</a>
          </div>
      </div>
      
      <hr>
      
      <div class="container">
        <div class="text">
            <h2 class="titulo-promo"> MEGA CHEDDAR</h2>
            <p class="text">Com 20% OFF</p>
            <a href="lanches.php" class="btn">Comprar</a>
        </div>
        <div class="image">
          <img src="img/lanches/megacheddar.jpg" alt="MEGA CHEDDAR">
      </div>
      </div>
      
      <hr>
      
      <div class="container">
        <div class="image">
            <img src="img/sanduiches/mega.jpg" alt="Batida de Morango">
        </div>
        <div class="text">
            <h2 class="titulo-promo">SANDUBÃO</h2>
            <p class="text">Com 20% OFF</p>
            <a href="sanduiches.php" class="btn">Comprar</a>
        </div>
      </div>

      <hr>
      
      <div class="container">
        <div class="text">
            <h2 class="titulo-promo"> DADINHO TAPIOCA</h2>
            <p class="text">Com 20% OFF</p>
            <a href="porcao.php" class="btn">Comprar</a>
        </div>
        <div class="image">
          <img src="img/porcao1.jpg" alt="MEGA CHEDDAR">
      </div>
      </div>


      <?php include './-inc/footer.php' ?>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
