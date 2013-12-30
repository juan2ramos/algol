<?php

class principaladminController extends Controller {

    private $_principalAdmin;

    function __construct() {
        parent::__construct();

        $this->_item = 'administracion';
        parent::__construct(); #llamado al constructor padre el cual tiene como  atributo vista.        
        //$this->_view->menuAdmin = $this->menu('menuAdmin'); // insert el menu correpondiente
        //$this->_principalAdmin = $this->loadModel('pricipalAdmin'); #carga el modelo.        
        $this->_view->titulo = 'Pagina principal';
        $this->autentificar('admin');
    }

    public function index() {
        $render = ($_POST['render'] == 'render') ? FALSE : TRUE;
        $this->render('principaladmin', 'admin', $render);//Vista arenderiazar, plantilla a utilizar, llamado 
    }

}
