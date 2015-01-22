<?php

return array(
        'name'          => 'Category',
        'table'         => 'page_categories',
        'model'         => 'Lavalite\Page\Models\Category',
        'permissions'   => ['admin' => ['view', 'create', 'edit', 'delete', 'image']],
        'image'         =>
            [
            'xs'        => ['width' =>'60',     'height' =>'45'],
            'sm'        => ['width' =>'100',    'height' =>'75'],
            'md'        => ['width' =>'460',    'height' =>'345'],
            'lg'        => ['width' =>'800',    'height' =>'600'],
            'xl'        => ['width' =>'1000',   'height' =>'750'],
            ],

);
