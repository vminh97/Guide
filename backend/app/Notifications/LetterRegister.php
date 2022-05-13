<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class LetterRegister extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       $url = url('api/find/'.$this->token);
       return (new MailMessage)
           ->line('Hi.')
           ->action('Start Learning', url($url))
           ->line('Cám ơn bạn đã đăng ký học trên Minh. Hãy truy cập ngay vào Minh để khám phá những khóa học kỹ năng hữu ích, 
           hấp dẫn từ những giảng viên và doanh nhân hàng đầu Việt Nam. Dưới đây là các thông tin dành cho bạn khi học trên Minh:')
           ->line('Nếu bạn gặp khó khăn trong quá trình sử dụng, hãy liên hệ với chúng tôi để được hỗ trợ:
                  Điện thoại: 1900 6335 07 (08h30 - 22h00, 7 ngày trong tuần)');
   }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
