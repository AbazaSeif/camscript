<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'performer_id', 'textmessages', 'created_at', 'updated_at',
    ];

    public function performer() {
        return $this->belongsTo('App\Performer');
    }
}
