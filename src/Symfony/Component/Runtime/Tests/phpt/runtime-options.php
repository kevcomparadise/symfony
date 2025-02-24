<?php

$_SERVER['APP_RUNTIME_OPTIONS'] = [
    'env_var_name' => 'ENV_MODE',
    'debug_var_name' => 'DEBUG_MODE',
];
require __DIR__.'/autoload.php';

return function (array $context): void {
    if (isset($context['APP_ENV']) || isset($context['APP_DEBUG'])) {
        echo 'An error occurred on the variable name options.';
    } else {
        echo 'Env mode ', $context['ENV_MODE'], ', debug mode ', $context['DEBUG_MODE'];
    }
};
