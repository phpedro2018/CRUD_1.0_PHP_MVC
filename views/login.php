<div class="container">
    <br>
    <?php
    if(!empty($msg)) {
        echo $msg;
    }

    if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){
        header("Location: ".BASE_URL);
    }

    ?>
    <!-- formulário de login -->
    <div class="caixalogin">
    <h1>CRUD | MVC | SCA</h1>
    <form method="POST">
        <div class="form-group">
            <label for="username">Usuário:</label>
      		<input type="username" name="username" id="username" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required />
        </div>
        <input type="submit" value="Fazer Login" class="botao1 btn btn-primary" />
        <a href="<?php echo BASE_URL; ?>cadUsuario" class="botao1 btn btn-success">Cadastrar-se</a>
    </form>
    <hr>
    
    <center>
        *Login com Cadastro de Usuários
    </center>
</div>
</div>