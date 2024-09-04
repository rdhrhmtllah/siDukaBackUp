@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'relative inline-block text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-[#E6B9A6]' : 'inline-block text-black hover:text-gray-600 ' }} "
    href="/" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
