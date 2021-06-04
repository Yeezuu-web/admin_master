<li class="c-header-nav-item dropdown">
    <a class="c-header-nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="c-icon fa fa-bell" style="width: 1.3rem !important;height: 1.3rem !important;font-size: 1.3rem !important;"></i>
        <span class="badge badge-danger navbar-badge text-white">{{$notifications->count() ?? '0'}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        @if ($notifications->count() > 0)
            <span class="col-8 text-muted text-sm">{{$notifications->count() ?? ''}} Notifications</span>
            <div class="dropdown-divider"></div>
        @endif

        @forelse($notifications as $notification)
            <button type="button" class="dropdown-item col-12" wire:click="markAsRead('{{$notification['id']}}')">
                <span class="text-muted text-sm col-8"><i class="fas fa-users mr-2"></i> File {{ $notification->data['file_id'] }} ({{ $notification->data['remark'] }})</span>
                <span class="text-muted text-sm col-4">{{$notification->created_at->diffForHumans()}}</span>
            </button>

            @if($loop->last)
                <button type="button" class="dropdown-item  dropdown-footer col-12" wire:click="markAll()">
                    Mark as Read 
                </button>
            @endif
        @empty
            <a href="#" class="dropdown-item">
                No Notification
            </a>
        @endforelse
    </div>
</li>