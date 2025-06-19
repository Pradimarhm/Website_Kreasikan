@props(['id', 'photo', 'name', 'date', 'content'])

@php
    $isLong = Str::length($content) > 200;
    $preview = Str::limit($content, 200, '');
@endphp

<article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900 ">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                <img class="mr-2 w-6 h-6 rounded-full" src="{{ $photo }}" alt="{{ $name }}">
                {{ $name }}
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                <time pubdate datetime="{{ $date }}"
                    title="{{ \Carbon\Carbon::parse($date)->translatedFormat('F j, Y') }}">
                    {{ \Carbon\Carbon::parse($date)->translatedFormat('M j, Y') }}
                </time>
            </p>
        </div>

        <button id="dropdownComment{{ $id }}Button" data-dropdown-toggle="dropdownComment{{ $id }}"
            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            type="button">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 3">
                <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
            <span class="sr-only">Comment settings</span>
        </button>

        <div id="dropdownComment{{ $id }}"
            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownMenuIconHorizontalButton">
                <li><a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                </li>
                <li><a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                </li>
                <li><a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                </li>
            </ul>
        </div>
    </footer>

    <p id="comment-preview-{{ $id }}">
        {{ $preview }}
        @if ($isLong)
            <span id="dots-{{ $id }}">...</span>
            <span id="more-{{ $id }}" class="hidden">{{ Str::substr($content, 200) }}</span>
            <button onclick="toggleReadMore({{ $id }}, this)"
                class="text-blue-600 hover:underline text-sm ml-1">Baca selengkapnya</button>
        @endif
    </p>

    <div class="flex items-center mt-4 space-x-4">
        <button type="button"
            class="flex items-center font-medium text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 18">
                <path
                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
            </svg>
            Reply
        </button>
    </div>
</article>

<script>
    function toggleReadMore(index, el) {
        const moreText = document.getElementById('more-' + index);
        const dots = document.getElementById('dots-' + index);

        if (moreText.classList.contains('hidden')) {
            moreText.classList.remove('hidden');
            dots.classList.add('hidden');
            el.textContent = 'Sembunyikan';
        } else {
            moreText.classList.add('hidden');
            dots.classList.remove('hidden');
            el.textContent = 'Baca selengkapnya';
        }
    }
</script>
