<?php

namespace App\Http\Controllers\Admin\User;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = UserRole::cases();
        return view('admin.user.create', compact('roles'));
    }
}
