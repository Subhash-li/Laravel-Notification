<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostCreatedNotification extends Notification
{
    use Queueable;

    protected $post;
    public function __construct($post)
    {
        $this->post = $post;
    }

    public function via(object $notifiable)
    {
        return ['database', 'mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Post Created')
            ->greeting('Hello!')
            ->line('A new post was created.')
            ->line('Post Title: ' . $this->post->title)
            ->action('View Posts', url('/posts'))
            ->line('Thank you for using Laravel Forum!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'A new post has been created: ' . $this->post->title,
            'post_id' => $this->post->id
        ];
    }

}
