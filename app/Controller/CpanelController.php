<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mjohnson
 * Date: 8/29/12
 * Time: 10:46 AM
 * To change this template use File | Settings | File Templates.
 */

class CPanelController extends AppController {
    public $name = 'CPanel';

    //No model
    public $uses = array();

    public function beforeFilter() {
        $this->Auth->deny('*');
        parent::beforeFilter();
    }

    public function index() {

    }
}