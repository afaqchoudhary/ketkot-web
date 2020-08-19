<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gifts_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'gift_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gift_title',
        'gift_gems_prime',
        'gift_gems',
        'gift_icon_name',
        'gift_icon_path'
    ];
}
