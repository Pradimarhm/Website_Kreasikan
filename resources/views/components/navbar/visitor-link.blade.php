<a {{ $attributes }}
    class="{{ $active ? ' text-primary-800' : 'text-yellow-300 hover:text-primary-400 transition duration-150 ease-in-out' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
