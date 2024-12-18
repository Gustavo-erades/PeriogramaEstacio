<?php
App::uses('AppModel/Model','Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $useTable='users';
    public $validate = array(
        'nome' => array(
            'required'=>array(
                'rule' => 'notBlank',
            )
        ),
        'senha' => array(
            'required'=>array(
                'rule' => 'notBlank',
            )
        )
    );

    public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['senha'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['senha'] = $passwordHasher->hash(
                    $this->data[$this->alias]['senha']
                );
            }
            return true;
        }
}

?>