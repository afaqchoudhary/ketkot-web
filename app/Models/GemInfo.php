<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GemInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gems_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'gem_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gem_title',
        'gem_count',
        'gem_price',
        'platform',
        'gem_icon_name',
        'gem_icon_path'
    ];
}
