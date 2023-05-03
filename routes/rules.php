<?php

return [
    '/api/users/create' => [
        \App\Rules\Users\UsersNameRule::class,
        \App\Rules\Users\UsersLastnameRule::class,
        \App\Rules\Users\UsersAdressRule::class,
        \App\Rules\Users\UsersEmailRule::class,
        \App\Rules\Users\UsersPasswordRule::class,
        \App\Rules\Users\UsersDocumentRule::class,
        \App\Rules\Users\UsersDocumentTypesRule::class,
        \App\Rules\Users\UsersPhoneRule::class,
        \App\Rules\Users\IdrolesRule::class
    ],

    '/api/users/update' => [
        \App\Rules\Users\UsersNameRule::class,
        \App\Rules\Users\UsersLastnameRule::class,
        \App\Rules\Users\UsersAdressRule::class,
        \App\Rules\Users\UsersEmailRule::class,
        \App\Rules\Users\UsersDocumentRule::class,
        \App\Rules\Users\UsersDocumentTypesRule::class,
        \App\Rules\Users\UsersPhoneRule::class,
        \App\Rules\Users\IdrolesRule::class
    ],

    '/api/auth/login' => [
        \App\Rules\Login\LoginUsersEmail::class,
        \App\Rules\Login\LoginUsersPassword::class
    ]

];
