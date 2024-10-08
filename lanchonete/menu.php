<?php
include './conn/conect.php';
?>

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
}

body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
  
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
 /* .banner{
  background-image: url('img/sanduiche1\ \(1\).jpg');
  width: 100%;
  height: 500px;
  background-size: cover;
  background-position: center center;
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
 }

 .btn:hover {
    background-color: #000000;
    color: #fff;
 }

 .promo {
    margin-top: 30px;
 }
 
 .cardapio {
    margin-top: 30px;
 }

.row {
 
  margin: 20px;
  justify-content: center;
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



@media (max-width: 768px) {
  .container {
    /* flex-direction: column; */
    text-align: center;
  }

  .container .image,
  .container .text {
    padding: 10px;
  }

  h2.titulo-promo {
    font-size: 20px;
  }

  p.text {
    font-size: 16px;
  }

  .btn {
    font-size: 14px;
    padding: 8px 15px;
  }
}

@media (max-width: 480px) {
  h2.titulo-promo {
    font-size: 18px;
  }

  p.text {
    font-size: 14px;
  }

  .btn {
    font-size: 12px;
    padding: 6px 10px;
  }
}

/* Media query para telas menores (dispositivos móveis) */
@media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }

            .logo {
                font-size: 10px;
            }

            nav.menu-primaria {
                flex-direction: column;
                align-items: center;
            }

            nav.menu-primaria ul {
                flex-direction: column;
                align-items: center;
            }

            nav.menu-primaria li {
                margin: 10px 0;
            }

            nav.menu-primaria a {
                font-size: 16px;
            }
        }
a {
  text-decoration: none;
  color: #fff;
}


</style>

<body>
<?php include './-inc/nav.php'  ?>


   <!-- <section class="banner"> </section> -->

   <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner/sanduiche1 (1).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner/porcao1 (1).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner/lanche1 (2).jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

   <h1> CARDÁPIO ONLINE </h1>
  
   <div class="cardapio">
   <div class="container"> 
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <img src="img/lanche1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Lanches</h5>
              <p class="card-text"> Cardápio totalmente dedicado a lanches artesanais incriveis e saborosos.</p>
              <a href="lanches.php" class="btn ">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <img src="img/porcao1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Porções</h5>
              <p class="card-text">Cardápio totalmente dedicado a porções bem saborosas, feitas com muito amor.</p>
              <a href="porcao.php" class="btn ">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
          <div class="card">
            <img src="img/sanduiche1 (1).jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Sanduiches</h5>
              <p class="card-text">Cardápio totalmente dedicado a sanduiches artesanais incriveis e saborosos.</p>
              <a href="sanduiches.php" class="btn ">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
              <img src="img/bebidas/tangerina.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Bebidas</h5>
                <p class="card-text"> Variedade de drinks  e bebidas para você se refrescar e  se divertir. (se beber não diriga)</p>


                <a href="bebidas.php" class="btn ">Comprar</a>
              </div>
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
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>