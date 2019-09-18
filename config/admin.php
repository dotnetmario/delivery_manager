<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Packages Pagination
    |--------------------------------------------------------------------------
    |
    | This value is the default number of packges to show for each page
    | in AdminController function packages
    |
    */
    'packages-paginate' => 20,
    'users-paginate' => 20,
    'deliverers-paginate' => 20,

    'captcha-key' => env('CAPTCHA_SITE_KEY', '6Lf-NLEUAAAAAI0BfhiKWwzVQArDTQpYClEuCqPC'),
    'captcha-secret' => env('CAPTCHA_SECRET_KEY', '6Lf-NLEUAAAAAKqZNUkQGgVMXtNIrll-DArwD1do'),
];