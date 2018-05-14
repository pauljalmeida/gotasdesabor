<?php

/**
 * Descricao de Artigo.class
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Produto {

    public $Titulo;
    public $Conteudo;
    public $Dados;

    const Entity = 'produtos';

    public function CreateProdutos(array $Dados) {
        $this->Dados = $Dados;
        $this->Dados['imagem'] = $this->Dados['imagem']['name'];

        $create = new Create();
        $create->ExeCreate(self::Entity, $this->Dados);
        if ($create->getResult()):
            $this->Result = $create->getResult();
            $this->Msg = "SUCESSO: O produto {$this->Dados['titulo']} foi cadastrado com sucesso";
        else:
            $this->Result = $create->getResult();
            $this->Msg = "ERRO: O produto {$this->Dados['titulo']} não foi cadastrado com sucesso";
        endif;
    }
    
    public function getResult() {
        return $this->Result;
    }
    
    public function getMsg() {
        return $this->Msg;
    }

}
