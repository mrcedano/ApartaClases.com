<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('cedano', function() {
    $this->comment("Hello, Cedano, are you okay?");
})->purpose('Display a message to Cedano');
