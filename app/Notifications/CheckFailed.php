<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Spatie\ServerMonitor\Models\Enums\CheckStatus;
use Spatie\ServerMonitor\Notifications\BaseNotification;

class CheckFailed extends BaseNotification
{
    /**
     * @var \Spatie\ServerMonitor\Events\CheckFailed
     */
    public $event;

    /**
     * @param mixed $notifiable
     * @return string[]
     */
    public function via($notifiable): array
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->error()
            ->subject($this->getSubject())
            ->line($this->getMessageText());
    }

    /**
     * @param $notifiable
     * @return TelegramMessage
     */
    public function toTelegram($notifiable): TelegramMessage
    {
        $subject = $this->getSubject();
        $content = $this->getMessageText();
        return TelegramMessage::create()
            ->to(config('services.telegram-bot-api.chat_id'))
            ->content("# $subject\n$content");
    }

    public function setEvent(\Spatie\ServerMonitor\Events\CheckFailed $event): CheckFailed
    {
        $this->event = $event;
        return $this;
    }

    public function shouldSend(): bool
    {
        if (!$this->getCheck()->hasStatus(CheckStatus::FAILED)) {
            return false;
        }

        return !$this->getCheck()->isThrottlingFailedNotifications();
    }
}
