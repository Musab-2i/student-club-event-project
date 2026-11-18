@props(['active' => false])

<a {{ $attributes->merge(['class' => $active ? 'active-link' : 'nav-link']) }}>
    {{ $slot }}
</a>