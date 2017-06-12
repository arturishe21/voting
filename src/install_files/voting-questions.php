<?php

return array(
    'db' => array(
        'table' => 'voting_questions',
        'pagination' => array(
            'per_page' => 20,
            'uri' => '/admin/voting_questions',
        ),
    ),
    'cache' => array(
        'tags' => array('voting_questions'),
    ),
    'options' => array(
        'caption' => 'Вопросы',
        'ident' => 'news',
        'form_ident' => 'voting_questions-form',
        'form_width' => '920px',
        'table_ident' => 'voting_questions-table',
        'action_url' => '/admin/handle/voting-questions',
        'not_found' => 'пусто',
        'model' => 'Vis\Voting\VotingQuestions',
        'handler'    => 'Vis\Voting\VotingQuestionsHandler',
    ),
    'position' => array(
        'tabs' => array(
            'Общая' => array(
                'id',
                'title',
                'picture',
                'description',
                'is_active',
                'date_start',
                'date_finish',
                'created_at',
                'updated_at',
            ),
            'Ответы' => array(
                'answers'
            ),
        )
    ),
    'fields' => array(
        'id' => array(
            'caption' => '#',
            'type' => 'readonly',
            'class' => 'col-id',
            'width' => '1%',
            'hide' => true,
            'is_sorting' => false
        ),

        'title' => array(
            'caption' => 'Название',
            'type' => 'text',
            'filter' => 'text',
            'is_sorting' => true,
            'field' => 'string',
        ),

        'picture' => array(
            'caption' => 'Изображение',
            'type' => 'image',
            'storage_type' => 'image', // image|tag|gallery
            'img_height' => '50px',
            'is_upload' => true,
            'is_null' => true,
            'is_remote' => false,
            'field' => 'string',
            'is_multiple' => false,
        ),

        'description' => array(
            'caption' => 'Описание',
            'type'    => 'wysiwyg',
            'hide_list' => true,
            'field' => 'text',
        ),
        'date_start' => array(
            'caption' => 'Дата начала голосование',
            'type' => 'datetime',
            'is_sorting' => true,
            'months' => 2,
            'field' => 'datetime',
            'filter' => 'datetime',
        ),

        'date_finish' => array(
            'caption' => 'Дата окончания голосование',
            'type' => 'datetime',
            'is_sorting' => true,
            'months' => 2,
            'field' => 'datetime',
            'filter' => 'datetime',
        ),

        'created_at' => array(
            'caption' => 'Дата создания',
            'type' => 'datetime',
            'is_sorting' => false,
            'months' => 2,
            'field' => 'timestamp',
            'filter' => 'text',
            'hide'        => true,
            'hide_list' => true,
        ),
        'updated_at' => array(
            'caption' => 'Дата обновления',
            'type' => 'readonly',
            'hide_list' => true,
            'is_sorting' => true,
            'hide'        => true,
            'field' => 'timestamp',
        ),
        'is_active' => array(
            'caption' => 'Статус',
            'type' => 'checkbox',
            'options' => array(
                1 => 'Отображать',
                0 => 'He отображать',
            ),
            'field' => 'tinyInteger',
        ),

        'answers' => array(
            'caption' => 'Ответы',
            'type'    => 'wysiwyg',
            'hide_list' => true,
            'field' => 'text',
        ),


    ),
    'filters' => array(
    ),
    'actions' => array(
        /* 'search' => array(
             'caption' => 'Поиск',
         ),*/
        'insert' => array(
            'caption' => 'Добавить',
            'check' => function() {
                return true;
            }
        ),
        'clone' => array(
            'caption' => 'Клонировать',
            'check' => function() {
                return true;
            }
        ),
        'update' => array(
            'caption' => 'Редактировать',
            'check' => function() {
                return true;
            }
        ),
        'delete' => array(
            'caption' => 'Удалить',
            'check' => function() {
                return true;
            }
        ),
    ),

);