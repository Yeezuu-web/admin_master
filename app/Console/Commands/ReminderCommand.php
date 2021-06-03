<?php

namespace App\Console\Commands;

use App\Models\File;
use Illuminate\Console\Command;
use App\Notifications\ReminderNotification;
use Illuminate\Support\Facades\Notification;

class ReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:alert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alert reminder to admin.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $times = [now(), now()->addHour()];
        $reminders = File::with('user')->where('user_id', 1)->whereNotNull('start_time')->whereBetween('start_time', $times)->get();

        foreach ($reminders as $reminder)
        {
            Notification::send($reminder->user, new ReminderNotification($reminder));
        }
        $this->info("Reminder of " . $reminders->count() . " reminders has been notified successfull");
    }
}
