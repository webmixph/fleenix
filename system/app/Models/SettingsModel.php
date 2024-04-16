<?php
namespace App\Models;

class SettingsModel extends BaseModel
{
    protected $table = 'settings';
    protected $primaryKey = 'id_settings';
    protected $allowedFields = [
        'title',
        'activate_frontend',
        'logo',
        'icon',
        'default_language',
        'default_role',
        'default_date_format',
        'default_hour_format',
        'default_currency',
        'default_currency_position',
        'default_currency_separation',
        'default_country',
        'default_theme',
        'default_theme_front',
        'default_timezone',
        'seo_description',
        'seo_keywords',
        'email_gateway',
        'email_name',
        'email_address',
        'email_smtp',
        'email_port',
        'email_pass',
        'email_cert',
        'email_account_id',
        'email_auth_token',
        'email_info_add',
        'sms_gateway',
        'sms_account_id',
        'sms_auth_token',
        'sms_info_add',
        'captcha_gateway',
        'captcha_site_key',
        'captcha_secret_key',
        'captcha_register',
        'captcha_login',
        'captcha_recovery',
        'registration',
        'terms_conditions',
        'terms_conditions_text',
        'email_confirmation',
        'sms_confirmation',
        'send_user_register',
        'send_email_register',
        'send_sms_register',
        'send_notification_register',
        'send_email_welcome',
        'send_sms_welcome',
        'remember_me',
        'forgot_password',
        'two_factor_auth',
        'throttle_auth',
        'throttle_auth_max_attempts',
        'throttle_auth_lockour_time',
        'jwt_token_lifetime',
        'jwt_private_key',
        'group_api',
        'block_external_api',
        'ip_allowed_api',
        'enable_api',
        'remove_log',
        'remove_log_time',
        'remove_log_latest',
        'storage_gateway',
        'aws_endpoint',
        'aws_key',
        'aws_secret',
        'aws_region',
        'aws_bucket',
        'backup_storage',
        'backup_table',
        'backup_email',
        'backup_notification_email',
        'backup_automatic',
        'backup_time',
        'backup_latest',
        'pusher_appId',
        'pusher_key',
        'pusher_secret',
        'pusher_cluster',
        'pusher_useTLS',
        'pusher_scheme',
        'pusher_enable',
        'module_enable',
        'layout_enable',
        'purchase_code'
    ];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';
}