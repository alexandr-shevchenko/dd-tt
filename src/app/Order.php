<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'created_at', 'updated_at', 'status', 'amount'];
}
