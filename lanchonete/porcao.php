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

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .container {
        flex-direction: column; /* Stack elements vertically */
    }

    .intro-verde, .verde-escuro {
        width: 100%; /* Make sections full width */
    }

    .intro-verde h1 {
        font-size: 2.5rem; /* Adjust font size for smaller screens */
    }

    .intro-verde p {
        font-size: 1.5rem; /* Adjust font size for smaller screens */
    }

    .login-form {
        padding: 20px; /* Reduce padding */
    }

    .login-form button {
        width: 100%; /* Make buttons full width */
    }

    .login-form .logo img {
        width: 80px; /* Adjust logo size */
        height: 80px;
    }
}

@media (max-width: 480px) {
    .intro-verde h1 {
        font-size: 2rem; /* Further reduce font size */
    }

    .intro-verde p {
        font-size: 1.2rem; /* Further reduce font size */
    }
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
a {
  text-decoration: none;
  color: #521604;
}
</style>

<body>
<?php include './-inc/nav.php'  ?>

        <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="img/porcao/batatas.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Batatinhas</h5>
                  <p class="card-text">Batatas fritas crocantes, servidas bem quentes e salpicadas com sal.
Acompanha um molho especial de ketchup e maionese.
Perfeitas para compartilhar ou saborear sozinho.
Uma opção clássica e sempre deliciosa para qualquer momento.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/porcao/coxinha.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Coxinhas</h5>
                  <p class="card-text">Coxinhas de frango, com massa leve e bem temperada, fritas até ficarem douradas.
O recheio suculento de frango desfiado traz um sabor irresistível.
Servidas com um toque de requeijão cremoso.
Ideais para petiscar ou acompanhar um bom bate-papo.

</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/porcao/doritos.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Mexicano</h5>
                  <p class="card-text">Nachos crocantes acompanhados de um delicioso guacamole caseiro.
Servidos com uma salsa de tomate levemente picante e queijo cheddar derretido.
Uma experiência única e apimentada, cheia de sabores mexicanos.
Perfeitos para quem busca algo diferente.</p>
                  <a href="lanches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/porcao/frango.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Frango + Fritas</h5>
                  <p class="card-text">Porção de frango empanado, frito até ficar bem dourado e suculento.
Acompanha batatas fritas sequinhas e crocantes.
Ideal para compartilhar e aproveitar um momento descontraído.
Combinação clássica e irresistível para qualquer hora do dia.</p>
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
