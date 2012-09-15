<?=$this->Form->create('User',array('action'=>'login'))?>
<?=$this->Form->input('username', array('between' => '<br />'))?>
<?=$this->Form->input('password', array('between' => '<br />'))?>
<?=$this->Form->end('Login');?>