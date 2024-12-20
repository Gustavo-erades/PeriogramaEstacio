<?php
class Atendimento extends AppModel
{
    public $name = 'pacientequestodonto';

    public $validate = array(
        'questoes' => array(
            'rule' => 'notBlank'
        ),
        'implante' => array(
            'rule' => 'notBlank'
        ),
        'tempo' => array(
            'rule' => 'notBlank'
        )
    );
}
?>