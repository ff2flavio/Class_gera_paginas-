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
        echo '<ul class="ul_menu">';
        
    	while ( list($nome,$url) = each($this->buttons) ) {
            echo '<li>';
    		 $this->displayButton($nome,$url,!$this->IsURLCurrentPage($url));
            echo '</li>';
    	}
      
        echo '</ul>';
    }
    public function IsURLCurrentPage($url) {
        if (strpos($_SERVER["SCRIPT_NAME"], $url) == false) {
            return false;
        } else {
            return true;
        }
    }
    public function displayButton($nome,$url,$active = true) {
        if ($active) {
            echo '<a href="'.$url.'">'.$nome.'</a>';
        } else {
            echo '<a href="'.$url.'"><span class="menu_active">'.$nome.'</a></span>';
        }
    }

}





?>