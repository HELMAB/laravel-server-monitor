<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;

class CheckFailed extends \Spatie\ServerMonitor\Notifications\Notifications\CheckFailed
{
    /**
     * @param mixed $notifiable
     * @return string[]
     */
    public function via($notifiable): array
    {
        $channels = [];
        $options = config('server-monitor.notifications.notifications.' . static::class);
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
        $subject = $this->getSubject();
        $content = $this->getMessageText();

        return TelegramFile::create()
            ->to(config('services.telegram-bot-api.chat_id'))
            ->content("*Server Monitor - Check Failed*\n$subject\n$content")
            ->file(public_path('img/failed.png'), 'photo');
    }
}
