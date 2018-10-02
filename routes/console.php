<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('setup', function () {
    $name = $this->comment('Hi Welcome on the SkillSeed project we will see if you have been good setup');
    
    //$language = $this->choice('Which language do you program in?', [
    //    'PHP',
    //    'Ruby',
    //    'Python',
    //]);
    
    $this->line("let's go !");
});


Artisan::command('question', function () {
    $name = $this->ask('What is your name?');
    
    $language = $this->choice('Which language do you program in?', [
        'PHP',
        'Ruby',
        'Python',
    ]);
    
    $this->line('Your name is '.$name.' and you program in '.$language.'.');
});
