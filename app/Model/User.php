<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

    public $belongsTo = array('Group');

    public $actsAs = array('Acl' => array('type'=>'requester'));

    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!$data['User']['group_id']) {
            return null;
        } else {
            return array('Group' => array('id' => $data['User']['group_id']));
        }
    }
}
