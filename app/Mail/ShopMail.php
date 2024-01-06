<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class ShopMail extends Mailable
{
    use Queueable, SerializesModels;
    private $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'リクルートサイトから応募がありました',
            from: new Address('system@csauto.jp', 'CSオートディーラー')
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            text: 'mails.shop',
            with: [
              'request' => $this->request,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments(): array
    {
        $list = [];
        if(!empty($this->request['rirekisho'])){
          $rirekisho = Attachment::fromPath($this->request['rirekisho'])->as('履歴書.pdf')->withMime('application/pdf');
          array_push($list, $rirekisho);
        }
        if(!empty($this->request['shokumukeirekisho'])){
          $shokumukeirekisho = Attachment::fromPath($this->request['shokumukeirekisho'])->as('職務経歴書.pdf')->withMime('application/pdf');
          array_push($list, $shokumukeirekisho);
        }

        return $list;
    }
}
