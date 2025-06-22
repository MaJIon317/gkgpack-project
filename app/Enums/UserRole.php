<?php

namespace App\Enums;

enum UserRole: string
{
    case USER = 'user';

    case IMPORTER = 'importer';

    case ADMIN = 'admin';
}
