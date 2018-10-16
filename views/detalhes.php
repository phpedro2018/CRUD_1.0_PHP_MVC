<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-1">
            <img src="<?php echo BASE_URL; ?>assets/images/ficha.png" alt="" class="img-fluid">
        </div>
    </div>

    <center>
        <h3>Ficha Cadastral do Aluno(a):</h3>
    </center>
  
  <div class="fundodiv1">
       <p><b>Nome do Aluno: </b>    <?php echo  $detalhes['nome'] ?></p>
       <p><b>Nº de Matrícula: </b>  <?php echo "#".$detalhes['matricula'] ?></p>
       <p><b>Email: </b>            <?php echo  $detalhes['email'] ?></p>
       <p><b>CPF: </b>              <?php echo  $detalhes['cpf'] ?></p>
       <p><b>Telefone #1: </b>      <?php echo  $detalhes['telefone1'] ?></p>
       <p><b>Telefone #2: </b>      <?php echo  $detalhes['telefone2'] ?></p>
       <p><b>Data de Nascimento: </b> <?php echo  date("d/m/Y", strtotime($detalhes['datanasc'])) ?></p>
       <p><b>Endereço: </b>            <?php echo  $detalhes['endereco'] ?></p>
    

    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo BASE_URL;?>listAluno/editar/<?=$detalhes['matricula']?>" title="" class="btn btn-success btn-sm"> Atualizar </a> 
            <a href="<?php echo BASE_URL;?>listAluno/excluir/<?=$detalhes['matricula']?>" title="" class="btn btn-danger btn-sm"> Excluir Cadastro </a>
        </div>
    </div>

  </div>
</div>