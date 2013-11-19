<?php

$config = array(
    'share' => array( // we can also write it as 'pages/create' then in controller run() no parametres
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ),
        array(
            'field' => 'text',
            'label' => 'Description',
            'rules' => 'required'
        )
    )
);
?>
