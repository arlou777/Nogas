<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Event extends Model
{
    use HasFactory, Sortable;

    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [
            
            'eventtype',
            'title',
            'description',
            'date',
            'session',
            'host',
            'partner',
            'speaker',
            'evaluator',
            'budget',
            'document',
            'toDate',
            'admin_id',
        ];

        public $incrementing = true; // Set to true for auto-incrementing 'id'
        protected $keyType = 'int'; // Set the key type to integer
        public $sortable = ['id', 'title', 'description', 'date'];
}



