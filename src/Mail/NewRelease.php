<?php

namespace Codedcell\RealeaseNotes\Mail;

use Codedcell\RealeaseNotes\Models\Readme;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRelease extends Mailable
{
    use Queueable, SerializesModels;

    public $readme;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Readme $readme)
    {
        $this->readme = $readme;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'New ' . env('APP_NAME') . ' Application Release (' . $this->readme->semver_version . ')';
        return $this->subject($subject)
            ->view('realease-notes::emails.release');
    }
}
