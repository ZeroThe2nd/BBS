<?php


namespace App\Integrations\Slack\Slash;

use Spatie\SlashCommand\{
    Handlers\SignatureHandler,
    Request,
    Response
};

class Signature extends SignatureHandler
{
    protected $signature = 'your-command email:send {to} {message} {--queue}';

    protected $description = 'A description of what your command does. This text will be displayed in the help command.';

    public function handle(
        Request $request
    ): Response {
        $to = $this->getArgument('to');

        $message = $this->getArgument('message');

        $queue = $this->getOption('queue') ?? 'default';
        //send email message...
    }
}
