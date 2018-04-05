<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Log\Logger;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // Send errors to slack channel
      $monolog = Log::getMonolog();
      if (!env('local')) {
        $slackHandler = new SlackWebhookHandler(env('https://hooks.slack.com/services/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'), '#erros', 'App Alerts', false, 'warning', true, true, Logger::ERROR);
      } else {
        // $slackHandler = new SlackWebhookHandler(env('https://hooks.slack.com/services/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'), '@wes', 'App Alerts', false, 'warning', true, true, Logger::ERROR);
      }
        $monolog->pushHandler($slackHandler);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
