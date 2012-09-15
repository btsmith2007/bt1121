<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mjohnson
 * Date: 8/28/12
 * Time: 10:40 AM
 * To change this template use File | Settings | File Templates.
 */

class HomeController extends AppController {

    public $name = 'Home';

    public $components = array('Acl');

    public function beforeFilter() {
        $this->Auth->allow('*');
    }

    //This controller does not use a Model
    public $uses = array();

    public function index() {
    }

    public function services() {

    }

    public function about() {

    }

    public function contact() {

    }

    public function makeAcl() {
        $aro = $this->Acl->Aro;

        $groups = array(
            0 => array(
                'alias'=>'mathUsers'
            ),
            1 => array(
                'alias'=>'administrators'
            )
        );

        foreach ($groups as $data) {
            $aro->create();

            $aro->save($data);
        }

    }

}