<?php
class Atendimento extends AppModel
{
    public $name = 'pacienteInformacao';

    public $validate = array(
        'queixa' => array(
            'rule' => 'notBlank'
        ),
        'doenca_atual' => array(
            'rule' => 'notBlank'
        ),
        'medica_pre' => array(
            'rule' => 'notBlank'
        ),
        'medicacao' => array(
            'rule' => 'notBlank'
        ),
        'alcool' => array(
            'rule' => 'notBlank'
        ),
        'fumo' => array(
            'rule' => 'notBlank'
        ),
        'pressao_arterial' => array(
            'rule' => 'notBlank'
        ),
        'exame_fisico' => array(
            'rule' => 'notBlank'
        ),
        'intra_oral' => array(
            'rule' => 'notBlank'
        ),
        'extra_oral' => array(
            'rule' => 'notBlank'
        ),
        'paciente_id' => array(
            'rule' => 'notBlank'
        )
    );
}
?>