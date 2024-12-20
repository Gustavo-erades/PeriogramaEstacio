<?php
class Atendimento extends AppModel
{
    public $name = 'pacientesaudegeral';

    public $validate = array(
        'questoes' => array(
            'rule' => 'notBlank'
        ),
        'doenca_contagiosa' => array(
            'rule' => 'notBlank'
        ),
        'alergia' => array(
            'rule' => 'notBlank'
        ),
        'bebida' => array(
            'rule' => 'notBlank'
        ),
        'drogas' => array(
            'rule' => 'notBlank'
        ),
        'medicamento' => array(
            'rule' =>'notBlank'
        ),
        'fumo' => array(
            'rule' => 'notBlank'
        )
    );
}
?>