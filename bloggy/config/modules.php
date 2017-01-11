<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Blog\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    )
));
