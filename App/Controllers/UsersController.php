<?php

namespace App\Controllers;

use Core\Controller;

class UsersController extends Controller
{
    public function index()
    {
        echo 'Index';
    }

    public function show()
    {
        echo 'Show';
    }

    public function edit()
    {
        echo 'Edit';
    }

    public function before(string $action, array $params = []): bool
    {
        return parent::before($action, $params);
    }
}