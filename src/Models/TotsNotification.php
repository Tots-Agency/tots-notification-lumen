<?php

namespace Tots\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Tots\Auth\Models\TotsUser;

/**
 *
 * @author matiascamiletti
 */
class TotsNotification extends Model
{
    protected $table = 'tots_notification';
    
    protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(TotsUser::class, 'creator_id');
    } 
}