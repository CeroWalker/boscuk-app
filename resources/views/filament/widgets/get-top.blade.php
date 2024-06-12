<x-filament-widgets::widget>
    <x-filament::section>
        <@php
            $output = shell_exec('top');
            echo "<pre style:'width:300px'>$output</pre>";
        @endphp
    </x-filament::section>
</x-filament-widgets::widget>
