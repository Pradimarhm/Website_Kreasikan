@props([
    'active' => false,
    'href' => '#',
    'icon' => '', // SVG string
    'label' => 'Link',
    'badge' => null, // Optional badge
])

<a href="{{ $href }}"
    class=" {{ $active ? ' text-primary-500' : 'text-yellow-400 ' }} flex items-center p-2  rounded-lg group hover:bg-gray-100 dark:hover:bg-gray-700">
    {!! $icon !!}
    <span class="flex-1 ms-3 whitespace-nowrap">{{ $label }}</span>
    @if ($badge)
        <span
            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-primary-800 bg-primary-100 rounded-full dark:bg-primary-900 dark:text-primary-300">
            {{ $badge }}
        </span>
    @endif
</a>
