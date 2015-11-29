<?php
class professor{
    
/*------------------VAR------------------------*/
	private $nome;
	private $cpf;
    private $email;
	private $matricula;
	private $senha;
    
/*------------------GET------------------------*/
	function getNome(){
		return $this->nome;	
	}
	function getCpf(){
		return $this->cpf;	
	}
    function getEmail(){
		return $this->email;	
	}
    function getMatricula(){
        return $this->matricula;
    }    
    function getSenha(){
        return $this->senha;
    }    
    
/*------------------SET------------------------*/
	function setNome($nome){
		return $this->nome = $nome;	
	}    
	function setCpf($cpf){
		return $this->cpf = $cpf;	
	}
    function setEmail($email){
		return $this->email = $email;	
	}
    function setMatricula($matricula){
        return $this->matricula = $matricula;
    }
    function setSenha($senha){
        return $this->senha = $senha;
    }

/*------------------DEMAIS FUNÇÕES------------------------*/
        function insertProfessor(){
            include '../mongo/conexao.php';

            $senha=  password_hash($this->senha, PASSWORD_BCRYPT);
            $query = array(
                'tipo' => 'professor',
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'matricula' => $this->matricula,
                'senha' => $senha);
            $colecao->insert($query);
            echo('Dados inseridos com sucesso!');

            /*$filtro = ['nome' => ['$exists' => true], 'email' => $this->email];
            $projecao = ['email' => 1, '_id' => 0];
            $cursor = $colecao->findOne($filtro, $projecao);
            
            if($this->email == $cursor['email']){
                echo('
                        <div class="ui red message">E-mail já cadastrado!</div>
                    ');
            }  elseif($this->email !== $cursor['email']) {            
                $senha=  password_hash($this->senha, PASSWORD_BCRYPT);
                $query = array(
                    'tipo' => 'professor',
                    'nome' => $this->nome,
                    'cpf' => $this->cpf,
                    'email' => $this->email,
                    'matricula' => $this->matricula,
                    'senha' => $senha);
                $colecao->insert($query);
                echo('Dados inseridos com sucesso!');
            }*/
        }
        
        function updateProfessor(){
            include '../mongo/conexao.php';
            
            $filtro = ['tipo' => 'professor','nome'=>$this->nome,'email'=>$this->email];
            $update = ['$set'=> ['cpf'=>$this->cpf,'matricula'=>$this->matricula]];
            $query = [$filtro, $update];
            $colecao->update($query);
            echo('Dados alterados com sucesso!');
            
        }
        
        function listaProfessores() {
            include '../mongo/conexao.php'; //insere o arquivo de conexão
            $filter = array('tipo'=>'professor'); //filtra os dados com o tipo: curso
            $proje = array('nome' => 1, 'email'=>1,'cpf'=>1, 'matricula'=>1);//apresenta os dados desejados
            $cursor = $colecao->find($filter,$proje);//executa a consulta    
            
            echo'<table class="tabela1">
                <thead>
                    <tr><th colspan="4">Lista Professores</th></tr>
                </thead>
                <tfoot>
                    <tr><td colspan="4">Base exemplo</td></tr>
                </tfoot>
                <tbody>
                <tr>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>CPF</td>
                        <td>Matrícula</td>
                    </tr>';    
            foreach ($cursor as $campo) {
                echo'        
                
                    <tr>
                        <td>'.$campo['nome'].'</td>
                        <td>'.$campo['email'].'</td>
                        <td>'.$campo['cpf'].'</td>
                        <td>'.$campo['matricula'].'</td>
                    </tr>';
            }
            echo '
                </tbody>
                </table>';        
        }


        //apresentação dos dados na tela
        function apresentaDados(){
            echo('
                <div class="field" style="padding: 0px 0px 10px 0px;">
                    <div class="ui label">Nome</div>
                    <div class="ui fluid icon input">                            
                        <input type="text" name="nome" value="'.$this->nome.'" readonly>
                    </div>
                </div>

                <div class="field" style="padding: 0px 0px 10px 0px;">
                    <div class="ui label">CPF</div>
                    <div class="ui fluid icon input">                            
                        <input type="text" name="cpf" value="'.$this->cpf.'" readonly>
                    </div>
                </div>
                
                <div class="field" style="padding: 0px 0px 10px 0px;">
                    <div class="ui label">E-mail</div>
                    <div class="ui fluid icon input">                            
                        <input type="text" name="email" value="'.$this->email.'" readonly>
                    </div>
                </div>
                
                <div class="field" style="padding: 0px 0px 10px 0px;">
                    <div class="ui label">Matrícula</div>
                    <div class="ui fluid icon input">                            
                        <input type="text" name="matricula" value="'.$this->matricula.'" readonly>
                    </div>
                </div>
            ');
        }
	
	
	}
?>
