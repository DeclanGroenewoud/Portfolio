@props(['standard' => false])

<p {{ $attributes->merge(['class' => 'px-3 py-2 ' . ($standard ? 'bg-blue-100 text-red' : 'bg-gray-300 '), 'style' => 'transition: font-size 1s;', 'onmouseover' => "this.style.fontSize = '110%'", 'onmouseout' => "this.style.fontSize = '100%'"]) }}>
    {{ $slot }}
</p>