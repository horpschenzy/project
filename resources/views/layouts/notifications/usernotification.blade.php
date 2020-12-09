<span class="user-name">{{ $notification->data['name'] }} </span> {{ $notification->data['comment'] }}
</div>
<span class="date">{{ $notification->created_at->diffForHumans() }}</span>