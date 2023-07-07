<?php

namespace App\Models;

enum OrderStatus: string
{
    case NEW = 'new';
    case PROGRESS = 'in progress';
    case BRANCH = 'in branch';
    case GIVEN = 'given';
    case FINISHED = 'finished';
}
