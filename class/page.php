<?php
/////////////////////////////////////////////////////////////
// Class que representa uma simples página...
/////////////////////////////////////////////////////////////
class Page {

    protected $title = "Páginas com PHP";
	protected $keyWords = "Orientação a objetos com php";
	protected $styleAll = "css/style.css";
	protected $utf = "UTF-8";
	protected $buttons = array( 'Inicio'   => 'index.php',
		                        'Serviços' => 'servicos.php',
		                        'Contatos' => 'contatos.php'
                              ); 

	public function __set($attr,$valor) {
		$this->$attr = $valor;
	}
	public function __get($attr) {
		return $this->$attr;
    }

    public function showPaginaHead() {
        echo '<!doctype html>';
        echo '<head>';
    	echo '<link rel="stylesheet" href="'.$this->styleAll.'" type="text/css"/>';
    	echo '<title>'.$this->title.'</title>';
    	echo '<meta name="keywords" content="'.$this->keyWords.'">';
    	echo '<meta charset="'.$this->utf.'">';
        echo '</head>';
    }

    public function tituloPagina($tituloPagina) {
       return $tituloPagina;
    }
    public function subTituloPagina($subTitulo) {
        return $subTitulo;
    }
    

    public function showMenu() {
        
    	while ( list($nome,$url) = each($this->buttons) ) {
    		$this->displayButton($nome,$url,!$this->IsURLCurrentPage($url));
    	}
      
    }
    public function IsURLCurrentPage($url) {
        if (strpos($GLOBALS["SCRIPT_NAME"], $url) == false) {
            return false;
        } else {
            return true;
        }
    }
    public function displayButton($nome,$url,$active = true) {
        if ($active) {
            echo '<ul class="ul_menu">';
                    echo '<li><a href="'.$url.'"><span class="menu_active">'.$nome.'</span></a></li>';
            echo '</ul>';
        } else {
            echo '<span class="menu_active">'.$nome.'</span>';
        }
    }

}





?>