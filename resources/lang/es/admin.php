<?php

return [
    'admin-user' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'Nuevo usuario',
            'edit' => 'Editar :name',
            'edit_profile' => 'Editar Perfil',
            'edit_password' => 'Editar Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Última sesión',
            'first_name' => 'Nombre',
            'last_name' => 'Apellido',
            'email' => 'Correo',
            'password' => 'Contraseña',
            'password_repeat' => 'Confirmar contraseña',
            'activated' => 'Activado',
            'forbidden' => 'Permitido',
            'language' => 'Lenguaje',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],

    'user' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'Nuevo usuario',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'email' => 'Correo',
            'email_verified_at' => 'Correo verificado en',
            'password' => 'Contraseña',

        ],
    ],

    'option' => [
        'title' => 'Opciones',

        'actions' => [
            'index' => 'Opciones',
            'create' => 'Nueva opción',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'value' => 'Valor',
            'fields' => 'Campos',
        ],
    ],

    'rule' => [
        'title' => 'Reglas',

        'actions' => [
            'index' => 'Reglas',
            'create' => 'Nueva regla',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'validation_string' => 'Regla laravel',

        ],
    ],

    'field' => [
        'title' => 'Campos',

        'actions' => [
            'index' => 'Campos',
            'create' => 'Nuevo campo',
            'edit' => 'Editar campo :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'field_type_id' => 'Tipo de campo',
            'description' => 'Descripción',
            'options' => 'opciones del campo'

        ],
    ],

    'field-type' => [
        'title' => 'Tipo de campos',

        'actions' => [
            'index' => 'Tipo de campos',
            'create' => 'Nuevo tipo de campos',
            'edit' => 'Editar campo :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre interno',
            'description' => 'Descripción',

        ],
    ],

    'campaign' => [
        'title' => 'Campañas',

        'actions' => [
            'index' => 'Campañas',
            'create' => 'Nueva campaña',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'status' => 'Estado',
            'fields' => 'Campos',

        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',

        ],
    ],

    'permission' => [
        'title' => 'Permisos',

        'actions' => [
            'index' => 'Permisos',
            'create' => 'Nuevo permiso',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'guard_name' => 'Nombre de guardia',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
