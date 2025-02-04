@props(['align' => 'right', 'width' => '48', 'contentClasses' => ''])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'dropdown-menu-start';
        break;
    case 'top':
        $alignmentClasses = 'dropup';
        break;
    case 'right':
    default:
        $alignmentClasses = 'dropdown-menu-end';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            class="dropdown-menu {{ $alignmentClasses }} {{ $width }} {{ $contentClasses }}"
            style="display: none;"
            @click="open = false">
        {{ $content }}
    </div>
</div>