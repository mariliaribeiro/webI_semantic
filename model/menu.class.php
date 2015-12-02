<?php
class menu {
    function exibeMenu($tipo){
        switch ($tipo) {
            case 'professor':
                echo('
                 <div class="row">
                    <nav class="ui inverted menu">
                        <a href="http://localhost/web1/projeto/template/home.php" class="item active">Home</a>
                        <div class="ui dropdown item">
                            Cadastros
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="http://localhost/web1/projeto/template/cadastro_aluno.php"><div class="item">Aluno</div></a>
                                <a href="http://localhost/web1/projeto/template/cadastro_professor.php"><div class="item">Professor</div></a>
                                <a href="http://localhost/web1/projeto/template/cadastro_curso.php"><div class="item">Curso</div></a>
                                <a href="http://localhost/web1/projeto/template/cadastro_disciplina.php"><div class="item">Disciplina</div></a>
                                <a href="http://localhost/web1/projeto/template/cadastro_turma.php"><div class="item">Turma</div></a>
                            </div>
                        </div>
                        <div class="ui dropdown item">
                            Listagem
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="http://localhost/web1/projeto/template/lista_alunos.php"><div class="item">Alunos</div></a>
                                <a href="http://localhost/web1/projeto/template/lista_professores.php"><div class="item">Professores</div></a>
                                <a href="http://localhost/web1/projeto/template/lista_cursos.php"><div class="item">Cursos</div></a>
                                <a href="http://localhost/web1/projeto/template/lista_disciplinas.php"><div class="item">Disciplinas</div></a>
                                <a href="http://localhost/web1/projeto/template/lista_turmas.php"><div class="item">Turmas</div></a>
                            </div>
                        </div>
                        <a class="item" href="http://localhost/web1/projeto/template/cadastro_ocorrencia.php">Ocorrência</a>
                        <div class="ui right dropdown item">'.$_SESSION['nome'].'
                                    <i class="dropdown icon"></i>
                                    <div class="menu">
                                        <div class="item">Perfil</div>
                                        <a href="http://localhost/web1/projeto/template/login.php"><div class="item">Sair</div></a>
                                    </div>
                        </div>
                    </nav>
                </div>
                ');
                break;
            case 'aluno':
                echo('
                    <div class="row">
                        <nav class="ui inverted menu">
                            <a href="http://localhost/web1/projeto/template/home.php" class="item active">Home</a>
                            <a class="item" href="http://localhost/web1/projeto/template/visualiza_ocorrencia.php">Visualizar Ocorrências</a>
                            <div class="ui right dropdown item">'.$_SESSION['nome'].'
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item">Perfil</div>
                                            <a href="http://localhost/web1/projeto/template/login.php"><div class="item">Sair</div></a>
                                        </div>
                            </div>
                        </nav>
                    </div>
                '); 
                break;
            default:
                echo('');
        }
    }
}
