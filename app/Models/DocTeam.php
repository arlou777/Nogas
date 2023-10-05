<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocTeam extends Model
{
    protected $table = 'docteam';
    protected $primaryKey = 'id';
    protected $fillable = [
            'hashname',
            'tdocument',
            'teams_id',
           
        ];
}