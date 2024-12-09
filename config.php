<?php 
return array (
  'security' => 
  array (
    'mode' => 'strict',
    'force_https' => false,
    'session_lifespan' => 7200,
    'perform_session_fingerprinting' => true,
    'debug_fingerprint' => false,
  ),
  'debug_and_monitoring' => 
  array (
    'debug' => false,
    'log_stacktrace' => true,
    'stacktrace_length' => 25,
    'report_errors' => false,
  ),
  'info' => 
  array (
    'salt' => '37e6f3182f8052a6b7719d510fbc8862',
    'instance_id' => 'd382989a-cb53-4ee3-abb7-c6ff18e8bd40',
  ),
  'url' => 'http://localhost/',
  'admin_area_prefix' => '/admin',
  'update_branch' => 'release',
  'maintenance_mode' => 
  array (
    'enabled' => false,
    'allowed_urls' => 
    array (
    ),
    'allowed_ips' => 
    array (
    ),
  ),
  'disable_auto_cron' => false,
  'i18n' => 
  array (
    'locale' => 'en_US',
    'timezone' => 'UTC',
    'date_format' => 'medium',
    'time_format' => 'short',
    'datetime_pattern' => '',
  ),
  'path_data' => 'C:\\xampp\\htdocs\\data',
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'name' => 'fossbilling_second',
    'user' => 'fossbilling',
    'password' => 'bGW-SMXlgKV.i-tB',
  ),
  'twig' => 
  array (
    'debug' => false,
    'auto_reload' => true,
    'cache' => 'C:\\xampp\\htdocs\\data\\cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
    'throttle_delay' => 2,
    'rate_span_login' => 60,
    'rate_limit_login' => 20,
    'CSRFPrevention' => true,
    'rate_limit_whitelist' => 
    array (
    ),
  ),
);