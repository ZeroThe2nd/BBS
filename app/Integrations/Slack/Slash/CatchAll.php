<?php

namespace App\Integrations\Slack\Slash;

use Spatie\SlashCommand\{
    Attachment,
    AttachmentAction,
    Handlers\BaseHandler,
    Request,
    Response};

class CatchAll extends BaseHandler
{
    public function canHandle(
        Request $request
    ): bool {
        // Handle everything
        return true;
    }

    public function handle(
        Request $request
    ): Response {
        $user = $request->userName;

        return $this->respondToSlack("Hi {$user}, That command did not exist.")
            ->displayResponseToUserWhoTypedCommand();
    }
}
