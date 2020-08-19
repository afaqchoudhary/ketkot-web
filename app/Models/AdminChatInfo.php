<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminChatInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_chat_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'mesg_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mesg_type',
        'mesg_from',
        'mesg_to',
        'mesg_data',
        'mesg_at'
    ];
}
