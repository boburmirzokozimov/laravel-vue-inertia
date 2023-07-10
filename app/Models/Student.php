<?php

namespace App\Models;

use App\Models\Interfaces\UserInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model implements UserInterface
{
    use HasFactory;
}
