<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Participant extends Model
{
    use HasFactory, Sortable;
    protected $table = 'participants';
    protected $primaryKey = 'id';
    protected $fillable = [
           
            'startupname',
            'problem',
            'solution',
            'target',
            'documents',
            'events_id',
            'user_id',
            'cert',
        ];
    public $sortable = ['events_id', 'startupname',];   
}
