<?php include 'base.php' ?>

<?php startblock('title') ?>
Listagem de Turmas
<?php endblock('title') ?>          

<?php startblock('article') ?>
    <h1>Listagem de Turmas</h1>
    <table class="ui compact celled definition table" id="tabela">
        <thead>
            <tr>
                <th></th>
                <th>Turma</th>
                <th>Curso</th>
            </tr>
        </thead>
            
        <tbody>
            <?php
                include_once '../model/turma.class.php';
                $turma = new turma;
                $turma->getTurmas();
            ?>
        </tbody>
    </table>

<?php endblock('article') ?>
                                   

        

