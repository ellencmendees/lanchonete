
<?php
include './conn/conect.php';

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara uma consulta para verificar se o email e senha existem no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    $stmt = $conn->prepare($sql); // Prepara a consulta

    // Vincula os parâmetros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $password);

    // Executa a consulta
    $stmt->execute();

    // Verifica se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
        // Usuário encontrado, faz login
        session_start(); // Inicia a sessão
        $_SESSION['usuario'] = $email; // Armazena o email na sessão
        header("Location: menu.php"); // Redireciona para a página do painel
        exit(); // Encerra o script para evitar execução adicional
    } else {
        // Se não encontrar o usuário, exibe mensagem de erro
        echo "<script>alert('Email ou senha incorretos.');</script>";
    }

    // Fecha a conexão
    $conn = null; // Fecha a conexão com o banco de dados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logonova.jpg" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <title>Receitas Mendes</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header-bg {
    background-color: #ffffff; /* Cor de fundo para a barra */

}

.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    padding:20px 20px;
    padding-left: 20%;
   
    
}

.logo {
    color: #521604;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-decoration: none;
    font-weight: bold;
    margin: 5px;
    width: 200px; /* Tamanho da logo, ajuste conforme necessário */
}

.menu-primaria ul {
    margin: 5px;
    list-style: none;
    display: flex;
    gap: 15px; /* Espaçamento entre os itens */
}

.menu-primaria li {
    display: inline-block;

}

.menu-primaria a {
    text-decoration: none;
    color:#521604;
    font-size: 18px;
    padding: 20px;
}

.menu-primaria a:hover {
    background-color: #521604;
    padding: 20px;
    color: #ffffff;
    
    
}

.entrar { 
    color: #292929;
    padding: 20px;
}

.msg {
    text-align: left;
}

body, html {
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #521604;
}


.verde-escuro {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

   
}

.verde-escuro {
    padding: 20px;
}

.login-form {
    background-color: #ffffffcb;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.589);
    max-width: 400px; 
    text-align: center;
}

.login-form .logo {
    margin-bottom: 20px;
}
/* 
.login-form form {
    display: flex;
    flex-direction: column;
} */

.login-form label {
    display: block;
    font-size: 20px;
    margin-bottom: 8px;
    font-weight: bolder;
    color: #333333;
}

.login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #363636;
    border-radius: 4px;
}

.login-form button {
    width: 50%;
    padding: 10px;
    background-color: #521604;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

.login-form button:hover {
    background-color: #070707;
}


a {
    color: #521604;   
}

.text {
  font-size: 30px;
  font-weight: 500;
  margin-top: 10px;
}

footer {
  background-color: #fff;
  color: #521604;
  padding: 40px;
  margin-top: 30px;
  text-align: center;

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
</div>
        <!-- <span class="detalhe"></span> -->
        <div class="verde-escuro">
            <form class="login-form" action="login.php" method="POST">
                <div class="logo">
                </div>
                <h2 class="entrar">Entrar</h2>
                <label for="email" class="msg">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password" class="msg">Senha:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">ENTRAR</button>
                <p>Não tem cadastro? <a href="cadastro.html">Cadastre-se</a></p>
              
            </form>
        </div>
        <?php include './-inc/footer.php' ?>

