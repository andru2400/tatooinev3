<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            
        ],
    ],

    'option' => [
        'title' => 'Options',

        'actions' => [
            'index' => 'Options',
            'create' => 'New Option',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'value' => 'Value',
            
        ],
    ],

    'rule' => [
        'title' => 'Rules',

        'actions' => [
            'index' => 'Rules',
            'create' => 'New Rule',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'validation_string' => 'Validation string',
            
        ],
    ],

    'field' => [
        'title' => 'Fields',

        'actions' => [
            'index' => 'Fields',
            'create' => 'New Field',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'field_type_id' => 'Field type',
            'description' => 'Description',
            
        ],
    ],

    'field-type' => [
        'title' => 'Field Types',

        'actions' => [
            'index' => 'Field Types',
            'create' => 'New Field Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            
        ],
    ],

    'campaign' => [
        'title' => 'Campaigns',

        'actions' => [
            'index' => 'Campaigns',
            'create' => 'New Campaign',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            
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
        'title' => 'Permissions',

        'actions' => [
            'index' => 'Permissions',
            'create' => 'New Permission',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    'campaign-owner' => [
        'title' => 'Campaign Owners',

        'actions' => [
            'index' => 'Campaign Owners',
            'create' => 'New Campaign Owner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            
        ],
    ],

    'country' => [
        'title' => 'Countries',

        'actions' => [
            'index' => 'Countries',
            'create' => 'New Country',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'departament' => [
        'title' => 'Departaments',

        'actions' => [
            'index' => 'Departaments',
            'create' => 'New Departament',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'country_id' => 'Country',
            
        ],
    ],

    'city' => [
        'title' => 'Cities',

        'actions' => [
            'index' => 'Cities',
            'create' => 'New City',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'departament_id' => 'Departament',
            
        ],
    ],

    'owner-location' => [
        'title' => 'Owner Locations',

        'actions' => [
            'index' => 'Owner Locations',
            'create' => 'New Owner Location',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'campaign_owner_id' => 'Campaign owner',
            'city_id' => 'City',
            'status' => 'Status',
            
        ],
    ],

    'user-attribute' => [
        'title' => 'User Attributes',

        'actions' => [
            'index' => 'User Attributes',
            'create' => 'New User Attribute',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'islist' => 'Islist',
            'unique' => 'Unique',
            'required' => 'Required',
            'status' => 'Status',
            
        ],
    ],

    'user-attribute-option' => [
        'title' => 'User Attribute Options',

        'actions' => [
            'index' => 'User Attribute Options',
            'create' => 'New User Attribute Option',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'value' => 'Value',
            'user_attribute_id' => 'User attribute',
            
        ],
    ],

    'campaign-attribute' => [
        'title' => 'Campaign Attributes',

        'actions' => [
            'index' => 'Campaign Attributes',
            'create' => 'New Campaign Attribute',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'islist' => 'Islist',
            'unique' => 'Unique',
            'required' => 'Required',
            'status' => 'Status',
            
        ],
    ],

    'campaign-attribute-option' => [
        'title' => 'Campaign Attribute Options',

        'actions' => [
            'index' => 'Campaign Attribute Options',
            'create' => 'New Campaign Attribute Option',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'value' => 'Value',
            'campaign_attribute_id' => 'Campaign attribute',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];