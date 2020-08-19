<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AdminInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'admin_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
        'remember_token'
    ];
}
