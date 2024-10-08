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

h1 {
    font-size: 3rem;
    padding: 125px;
    background-color: #521604;
    color: #ffff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
}
.text {
  font-size: 30px;
  font-weight: 500;
}

footer {
  background-color: #ffffff;
  color: #521604;
  padding: 40px;
  /* margin-top: 30px; */
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
<h1>
    COMO PREFERE FALAR COM A GENTE?
</h1>


<footer>
    <div class="footer-container">
      <div class="footer-column">
        <h3>Sobre Nós</h3>
        <p>Somos uma empresa dedicada a oferecer o melhor em lanches e bebidas de qualidade.</p>
      </div>

      <div class="footer-column">
        <h3>Contato</h3>
        <p>Telefone: (11) 1234-5678</p>
        <p>Email: contato@exemplo.com</p>
        <p>Endereço: Rua dos Lanches, 123, São Paulo - SP</p>
        <p>&copy; 2024 Todos os direitos reservados | Sua Empresa</p>
      </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>