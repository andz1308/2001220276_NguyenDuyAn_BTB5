@props(['variant' => 'primary'])

@php
    $color = $variant === 'danger' ? 'background:red;color:white;' : 'background:blue;color:white;';
@endphp

<button style="{{ $color }} padding:6px 12px; border:none; border-radius:4px;">
    {{ $slot }}
</button>
