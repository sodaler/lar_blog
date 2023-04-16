<?php declare(strict_types=1);

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'Админ';
    case Reader = 'Читатель';
}
