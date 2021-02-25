<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', url('/'));
});

// News
Breadcrumbs::for('articles', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Articles', url('articles'));
});

Breadcrumbs::for('add-articles', function ($trail) {
    $trail->parent('articles');
    $trail->push('Add', url('articles/create'));
});

Breadcrumbs::for('edit-articles', function ($trail, $id) {
    $trail->parent('articles');
    $trail->push('Edit', url('articles/'. $id .'edit'));
});