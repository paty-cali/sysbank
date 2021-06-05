<?php
run(
    // Update libraries
    onchange(['composer.lock'], 'composer install --ignore-platform-reqs;') .
    // Update front end
    onchange(['resources/js','resources/css'], 'npm run prod;') .
    // Rebuild database
    onchange(['database/migrations'], 'composer dumpautoload;php artisan migrate --seed;')
);
