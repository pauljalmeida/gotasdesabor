<?php

class Upload {

    private $Arquivo;
    private $Nome;
    private $Result;
    private $Msg;
    private static $Diretorio;
    private $Imagem;
    private $Folder;

    function __construct($Diretorio = null) {
        self::$Diretorio = ( (string) $Diretorio ? $Diretorio : 'arquivos/');
        if (!file_exists(self::$Diretorio) && !is_dir(self::$Diretorio)):
            mkdir(self::$Diretorio, 0777);
        endif;
    }

    public function Imagem(array $Imagem, $Folder) {
        $this->Arquivo = $Imagem;
        $this->Folder = ((string) $Folder ? $Folder : $Folder . '/');
        if(!file_exists($this->Folder) && !is_dir($this->Folder)):
            mkdir(self::$Diretorio . $this->Folder, 0777);
            self::$Diretorio = self::$Diretorio . $this->Folder;
        endif;
        $this->Nome = $Imagem['name'];
        $this->UploadImagem();
    }

    public function UploadImagem() {
        switch ($this->Arquivo['type']):
            case 'image/jpeg':
            case 'image/pjpeg':
                $this->Imagem = imagecreatefromjpeg($this->Arquivo['tmp_name']);
                break;
            case 'image/png':
            case 'image/x-png':
                $this->Imagem = imagecreatefrompng($this->Arquivo['tmp_name']);
                break;
        endswitch;

        if (!$this->Imagem):
            $this->Result = false;
            $this->Msg = 'Tipo de arquivo inválido, envie imagens PNG ou JPG.';
        else:
            $this->MoveArquivo();
            imagedestroy($this->Imagem);
        endif;
    }

    //Faz upload do arquivo
    public function MoveArquivo() {
        if (move_uploaded_file($this->Arquivo['tmp_name'], self::$Diretorio . $this->Nome)):
            $this->Result = $this->Nome;
            $this->Msg = 'Upload realizado com sucesso';
        else:
            $this->Result = false;
            $this->Msg = 'Upload não foi realizado com sucesso';
        endif;
    }

    function getResult() {
        return $this->Result;
    }

    function getMsg() {
        return $this->Msg;
    }

}
