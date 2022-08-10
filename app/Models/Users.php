<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users as Authenticatable;

class Users extends Model
{
    protected $fillable = ['username', 'password'];
    use HasFactory;
}
