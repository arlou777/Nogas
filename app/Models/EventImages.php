<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImages extends Model
{
    
    protected $table = 'event_images';
    protected $primaryKey = 'id';
    protected $fillable = [
            'hashname',
            'document',
            'event_id',
           
        ];
}
