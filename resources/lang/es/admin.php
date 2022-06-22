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
            'password_repeat' => 'Repite Contraseña',
            'owner_locations' => 'Propietario/ubicación',

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

    'campaign-owner' => [
        'title' => 'Propietarios',

        'actions' => [
            'index' => 'Propietarios',
            'create' => 'Nuevo propietario',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'status' => 'Estado',

        ],
    ],

    'country' => [
        'title' => 'Países',

        'actions' => [
            'index' => 'Países',
            'create' => 'Nuevo País',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',

        ],
    ],

    'departament' => [
        'title' => 'Departamentos',

        'actions' => [
            'index' => 'Departamentos',
            'create' => 'Nuevo departamento',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'country_id' => 'País',

        ],
    ],

    'city' => [
        'title' => 'Ciudades',

        'actions' => [
            'index' => 'Ciudades',
            'create' => 'Nueva ciudad',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'departament_id' => 'Departamento',

        ],
    ],

    'owner-location' => [
        'title' => 'Ubicaciones',

        'actions' => [
            'index' => 'Ubicaciones ',
            'create' => 'Nueva ubicación',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'campaign_owner_id' => 'Propietario',
            'city_id' => 'Ciudad',
            'status' => 'Estado',

        ],
    ],

    'user-attribute' => [
        'title' => 'Atributos de usuario',

        'actions' => [
            'index' => 'Atributos de usuario',
            'create' => 'Nuevo atributo de usuario',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'islist' => '¿Es Lista?',
            'unique' => '¿Es Unico?',
            'required' => '¿Es Requerido?',
            'status' => 'Estado',

        ],
    ],

    'user-attribute-option' => [
        'title' => 'Opciones de atributo de usuario',

        'actions' => [
            'index' => 'Opciones de atributo de usuario',
            'create' => 'Nueva opción de atributo de usuario',
            'edit' => 'Editar :name',
        ],

        'columns' => [
            'id' => 'ID',
            'value' => 'Valor',
            'user_attribute_id' => 'Atributo de usuario',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
