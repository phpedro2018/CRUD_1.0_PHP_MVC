<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-1"><br>
            <img src="<?php echo BASE_URL; ?>assets/images/list.png" alt="" class="img-fluid">
        </div>
    </div>
    <h5 style="text-align: center">Alunos Cadastrados</h5>
    <a href="<?php echo BASE_URL;?>addAluno" class="botao1 btn btn-primary">Cadastrar Aluno</a>
    
   <br><br>
    
    <div class="table-responsive">
    <table class="table table-hover table-sm">
        <thead style="background: #f3f3f3">
        <tr>
            <th>Visualizar</th>
            <th>Matricula</th>
            <th>Nome Completo</th>
            <!-- <th>Email</th> -->
            <!-- <th>CPF</th>
            <th>Telefone1</th>
            <th>Telefone2</th>
            <th>nmascimento</th>
            <th>endereco</th> -->
            <th>Ações</th>
        </tr>
        </thead>
        <?php foreach($alunos as $aluno): ?>

            <tr>
                <td><a href="<?php echo BASE_URL;?>listAluno/detalhes/<?=$aluno['matricula']?>" class="btn btn-primary btn-sm">Detalhes</a></td>
                <td><?=$aluno['matricula'] ?> </td>
                <td><?=$aluno['nome']?></td>
                <!-- <td><?=$aluno['email']?></td> -->
                <!-- <td><?=$aluno['cpf']?></td> -->
               <!--  <td><?=$aluno['telefone1']?></td>
                <td><?=$aluno['telefone2']?></td>
                <td><?=$aluno['datanasc']?></td>
                <td><?=$aluno['endereco']?></td> -->
                
                <td>
                    
                    <a href="<?php echo BASE_URL;?>listAluno/editar/<?=$aluno['matricula']?>" class="btn btn-success btn-sm" >Editar</a>
                    <a href="<?php echo BASE_URL;?>listAluno/excluir/<?=$aluno['matricula']?>" class="btn btn-danger btn-sm ">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>