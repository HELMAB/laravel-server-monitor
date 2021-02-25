<?php

namespace App\Notifications\UptimeMonitor;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;

class UptimeCheckRecovered extends \Spatie\UptimeMonitor\Notifications\Notifications\UptimeCheckRecovered
{
    /**
     * @param mixed $notifiable
     * @return string[]
     */
    public function via($notifiable): array
    {
        $channels = [];
        $options = config('uptime-monitor.notifications.notifications.' . static::class);
        if (is_array($options) && count($options) > 0) {
            foreach ($options as $channel) {
                if ($channel == 'telegram') {
                    array_push($channels, TelegramChannel::class);
                } else {
                    array_push($channels, $channel);
                }
            }
        }

        return $channels;
    }

    /**
     * @param $notifiable
     * @return TelegramFile
     */
    public function toTelegram($notifiable): TelegramFile
    {
        $message = $this->getMessageText();

        return TelegramFile::create()
            ->to(config('services.telegram-bot-api.chat_id'))
            ->content("*Server Monitor - Check Recovered*\n$message")
            ->file(public_path('img/warning.png'), 'photo');
    }
}
