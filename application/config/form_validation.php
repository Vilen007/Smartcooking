<?php
    $config = [
        'Recipe'=>[
            [
                'field' => 'name',
                'label' => 'Recipe Name',
                'rules' => 'required|min_length[4]'
            ],
            [
                'field' => 'remedi',
                'label' => 'Recipe Remedy',
                'rules' => 'required|min_length[25]'
            ],
            // [
            //     'field' => 'ingredient[]',
            //     'label' => 'Ingredients',
            //     'rules' => 'required|min_length[4]'
            // ]
        ],
    ];

?>