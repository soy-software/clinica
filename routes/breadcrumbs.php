<?php

// Inicio
Breadcrumbs::for('inicio', function ($trail) {
    $trail->push('Inicio', url('/'));
});

// Bienvenido
Breadcrumbs::for('home', function ($trail) {
    $trail->parent('inicio');
    $trail->push('Bienvenido', route('home'));
});
// login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('inicio');
    $trail->push('Ingresar', url('/login'));
});
// reset pasword
Breadcrumbs::for('resetPassword', function ($trail) {
    $trail->parent('login');
    $trail->push('Restablecer contraseña', url('/password/reset'));
});