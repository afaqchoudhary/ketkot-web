<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'account_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'account_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_live',
        'account_membership',
        'account_status',
        'account_gems',
        'account_gifts',
        'account_gift_earnings',
        'account_show_age',
        'account_show_contact_me',
        'account_follow_alert',
        'account_chat_alert',
        'account_followers_count',
        'account_following_count',
        'account_streams',
        'account_name',
        'account_birthday',
        'account_gender',
        'account_photo_name',
        'account_photo_path',
        'account_facebook_id',
        'account_sync',
        'account_mail',
        'account_referral_code',
        'account_membership_till',
        'account_platform',
        'account_chat_snap_name',
        'account_chat_snap_path',
        'account_last_active',
        'account_country'
    ];
}
