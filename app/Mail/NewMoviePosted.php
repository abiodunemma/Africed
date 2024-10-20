<?php



namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMoviePosted extends Mailable
{
    use Queueable, SerializesModels;

    public $movie;

    /**
     * Create a new message instance.
     *
     * @param $movie
     */
    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A New Movie Has Been Posted!')
                    ->markdown('emails.new_movie_posted');
    }
}
