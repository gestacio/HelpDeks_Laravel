{{-- @if ($ticket->priority->id == 1)
    @php $priority_button_color = 'bg-green-500'; @endphp
@elseif($ticket->priority->id == 2)
    @php $priority_button_color = 'bg-yellow-500'; @endphp
@elseif($ticket->priority->id == 3)
    @php $priority_button_color = 'bg-red-500'; @endphp
@endif --}}


{{-- @php
    if ($ticket->priority->id == 1) {
       $priority_button_color = 'bg-green-500'; 
    }
    if ($ticket->priority->id == 1) {
       $priority_button_color = 'bg-yellow-500'; 
    }
    if ($ticket->priority->id == 1) {
       $priority_button_color = 'bg-red-500'; 
    }
@endphp --}}



{{-- if ($ticket->priority->id == 1) {
    echo 'bg-green-500';
}
if ($ticket->priority->id == 1) {
    $priority_button_color = 'bg-yellow-500';
}
if ($ticket->priority->id == 1) {
    $priority_button_color = 'bg-red-500';
} --}}


@if ($ticket->priority->name == 'Normal')
    bg-green-500
@elseif ($ticket->priority->name == 'Prioritario')
    bg-yellow-500
@elseif ($ticket->priority->name == 'Urgente')
    bg-red-500
@endif
