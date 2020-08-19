<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoChatInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_chat_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'video_chat_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'partner_id',
        'chat_recent_on',
        'chat_init_on'
    ];
}
