@props([
    'color' => null,
    'textColor' => null,
    'size' => null,
    'border' => null,
])

<div @class([
    'inline-block align[-0.125em] rounded-full animate-spin',
    $color ? $color : 'bg-white',
    $textColor ? $textColor : 'text-blue-500',
    $size ? $size : 'h-8 w-8',
    $border ? $border : 'border-4 border-current  border-r-white',
    $attributes->get('class'),
]) {{ $attributes->merge() }}>
</div>
