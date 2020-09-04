<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'slider_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'slider_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slider_title',
        'slider_image_name',
        'slider_image_path',
    ];
}