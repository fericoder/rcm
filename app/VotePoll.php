<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VotePoll extends Model
{
    protected $table = 'votes_polls';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function vote()
    {
        return $this->belongsTo('App\Vote');
    }

    public function option()
    {
        return $this->belongsTo('App\VoteOption');
    }


}
