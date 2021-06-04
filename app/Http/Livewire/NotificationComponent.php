<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{
    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('livewire.notification-component', compact('notifications'));
    }

    public function markAsRead($id)
    {
        auth()->user()
            ->unreadNotifications
            ->where('id', $id)
            ->markAsRead();

        $this->emit('render');
    }

    public function markAll()
    {
        auth()->user()->unreadNotifications->markAsRead();

        $this->emit('render');
    }
}
