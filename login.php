<!DOCTYPE html>
<html lang="pt-br">
 
<head>
 
    <style type="text/css">
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: linear-gradient(40deg, cyan, white) no-repeat;
            background-size: 100% 100vh;
        }
 
        input {
 
 
            margin: 5px 0;
        }
 
        .conteudo {
 
            position: absolute;
            top: 47%;
            left: 49%;
            transform: translate(-51%, -48%);
 
 
            padding: 50px;
            border-radius: 15px;
            margin: 15px;
            background-color: ghostwhite;
 
        }
 
        .logo {
            margin-top: 120px;
        }
 
        .campo {
 
            display: flex;
            flex-direction: column;
            align-items: stretch;
            margin-block: 2px;
        }
 
        .campo input {
            border: 1px solid rgb(0, 0, 0);
            border-radius: 3px;
            font-size: 1.25rem;
        }
 
        button {
            background-color: rgb(72, 223, 228);
            border: none;
            border-radius: 15px;
            font-size: 16px;
            padding: 8px;
            width: 100;
            color: rgb(0, 0, 0);
        }
 
        button:hover {
            background-color: rgb(37, 189, 181);
        }
       
    </style>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
 
</head>
 
<body>
    <center>
        <h1 class="logo"> OXI ÁGUAS </h1>
    </center>
    <div class="conteudo">
        <center>
            <h1> Login </h1>
            <p>Sistema de login.</p>
        </center>
 
        <form action="login.php" method="get">
            <div class="campo">
                <label for="email">Email</label>
            <input type="email" name="email" id="email"><br>
            </div>
 
            <div class="campo">
                <label for="senha">Senha</label>
            <input type="senha" name="senha" id="senha"><br>
            </div>
 
            <center> <button type="submit" name="longar">Entrar</button><br>
 
                <p> Não possui conta? <a href="register.php"> crie agora </a>. </p>
            </center>
        </form>
 
    </div>
</body>
 
</html>
