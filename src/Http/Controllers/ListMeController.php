<?php

namespace Tots\Notification\Http\Controllers;

use Illuminate\Http\Request;
use Tots\Notification\Models\TotsNotification;

class ListMeController extends \Laravel\Lumen\Routing\Controller
{
    public function handle(Request $request)
    {
        // Create query
        $elofilter = \Tots\EloFilter\Query::run(TotsNotification::class, $request);
        // Custom filters
        $elofilter->getQueryRequest()->addWhere('user_id', $request->user()->id);
        // Execute query
        return $elofilter->execute();
    }
}