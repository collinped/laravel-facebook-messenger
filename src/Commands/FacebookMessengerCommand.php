<?php

namespace Collinped\FacebookMessenger\Commands;

use Illuminate\Console\Command;

class FacebookMessengerCommand extends Command
{
    public $signature = 'laravel-facebook-messenger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
