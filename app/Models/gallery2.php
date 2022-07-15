<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class gallery2 extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table="gallery2";
    protected $fillable=['Name','photo'];

}
