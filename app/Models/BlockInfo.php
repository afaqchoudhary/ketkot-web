<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blocks_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'block_info_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'blocked_user_id',
        'blocked_at'
    ];
}
