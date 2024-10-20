<?php

namespace App\Console\Commands;

use App\Mail\NewMoviePosted;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendNewMoviesEmail extends Command
{
    protected $signature = 'email:new-movies';
    protected $description = 'Send an email to users about newly posted movies';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Fetch movies posted in the last 24 hours
        $newMovies = Movie::where('created_at', '>=', Carbon::now()->subDay())->get();

        if ($newMovies->isEmpty()) {
            $this->info('No new movies to notify.');
            return;
        }

        // Fetch all users to send emails
        $users = User::all();

        // Send emails for each new movie
        foreach ($newMovies as $movie) {
            foreach ($users as $user) {
                Mail::to($user->email)->send(new NewMoviePosted($movie));
            }
        }

        $this->info('Emails sent successfully.');
    }
}
