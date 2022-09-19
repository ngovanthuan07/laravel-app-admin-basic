<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContracts;

class Admin extends Model implements AuthenticatableContracts
{
    use HasFactory;
    use Authenticatable;
}
