<?php
class Atendimento extends AppModel
{
    public $name = 'sequenciatratamento';

    public $validate = array(
        'data_tratamento' => array(
            'rule' => 'notBlank'
        ),
        'dente' => array(
            'rule' => 'notBlank'
        ),
        'procedimento' => array(
            'rule' => 'notBlank'
        )
    );
}
?>