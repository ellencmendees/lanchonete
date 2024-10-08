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

.quadrado {
  position: relative;
}

.off {
  border-radius: 5px;
  font-size: 20px;
  text-align: center;
  width: 70px;      /* Largura do quadrado */
  height: 30px;     /* Altura do quadrado */
  background-color: #00730c;
  color: #fff;
  font-weight: 700;
  position: absolute;
   top: 64%;         /* Distância do topo do container */
   left:2%;        /* Distância da esquerda do container */
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
              <div class="card" style="position: relative;"> <!-- Adicione position: relative -->
                <img src="img/sanduiches/mega.jpg" class="card-img-top" alt="...">
                <!-- <div class="off">-20%</div> Mensagem de desconto dentro do card -->
                <div class="card-body text-center">
                  <h5 class="card-title">Mega Sanduiche</h5>
                  <p class="card-text">Um sanduíche gigante, recheado com carne suculenta, queijo derretido e bacon crocante.
Acrescenta alface fresca, tomate e um molho especial da casa.
Servido em pão macio e levemente tostado, com toque artesanal.
Perfeito para quem busca um lanche completo e bem servido.</p>
                  <a href="sanduiches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/sanduiches/mortadela.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Mortadelão</h5>
                  <p class="card-text">Sanduíche com generosas fatias de mortadela defumada e saborosa.
Acompanha queijo, tomate, e um toque de mostarda ou maionese a gosto.
Tudo no pão francês fresquinho, crocante por fora e macio por dentro.
Uma opção clássica e suculenta para quem ama mortadela.</p>
                  <a href="sanduiches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/sanduiches/sanduiche.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Tradicional</h5>
                  <p class="card-text">Sanduíche simples e delicioso, com hambúrguer caseiro e queijo derretido.
Alface, tomate e cebola completam o sabor, junto a um molho especial.
Servido em pão macio, é o lanche ideal para quem prefere o básico.
Uma combinação tradicional e sempre irresistível.</p>
                  <a href="sanduiches.php" class="btn ">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/sanduiches/pimenta.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Pimenta com Carne</h5>
                  <p class="card-text">Sanduíche com carne grelhada suculenta e pimenta jalapeño picante.
Queijo cheddar derretido e molho chipotle para um toque especial.
Acompanha alface e cebola roxa no pão brioche levemente tostado.
Ideal para quem aprecia um sanduíche com bastante sabor.</p>
                  <a href="sanduiches.php" class="btn ">Comprar</a>
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
