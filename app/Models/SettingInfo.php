<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'setting_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'site_name',
        'title',
        'logo_name',
        'logo_path',
        'favicon_name',
        'favicon_path',
        'default_user_image_name',
        'default_user_image_path',
        'api_setting',
        'copyrights',
        'contact_mail_id',
        'social_links',
        'report_titles',
        'prime_desc',
        'signup_credits',
        'invite_credits',
        'calls_debits',
        'gem_icon_name',
        'gem_icon_path',
        'gift_icon_name',
        'gift_icon_path',
        'gem_reduction',
        'filter_options',
        'notification_key',
        'locations',
        'ads_credits',
        'timezone',
        'ads_enable',
        'ads_key',
        'welcome_message',
        'voip_key',
        'voip_certificate',
        'voip_passphrase',
        'page_title'
    ];
}
