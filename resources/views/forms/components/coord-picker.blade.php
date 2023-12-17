@php

    //$datalistOptions = $getDatalistOptions();
    //   $extraAlpineAttributes = $getExtraAlpineAttributes();
    $id = $getId();
    $isDisabled = $isDisabled();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $statePath = $getStatePath();

    $config = $getConfig();
    $attribs = [
        'disabled' => $isDisabled,
        'theme' => $getTheme() == 'default' ? 'default' : $getTheme(),
        'themeAsset' => $getThemeAsset(),
        'lightThemeAsset' => $getLightThemeAsset(),
        'darkThemeAsset' => $getDarkThemeAsset(),
    ];

@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <div
        wire:ignore
        ax-load
        ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('coord-picker', package: \Inalto\FilamentCoordPicker\FilamentCoordPicker::getPackageName()) }}"
        x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('leaflet', \Inalto\FilamentCoordPicker\FilamentCoordPicker::getPackageName()))]"
        x-data="coordPicker({
                state: $wire.{{ $applyStateBindingModifiers("entangle('{$getStatePath()}')") }}
                })" class="relative">
        <x-filament::input.wrapper :disabled="$isDisabled" :inline-prefix="$isPrefixInline" :inline-suffix="$isSuffixInline" :prefix="$prefixLabel"
            :prefix-actions="$prefixActions" :prefix-icon="$prefixIcon" :suffix="$suffixLabel" :suffix-actions="$suffixActions" :suffix-icon="$suffixIcon"
            :valid="!$errors->has($statePath)" {{--  :attributes="\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())" --}}>
            <div class="flex w-full" x-on:click="open=true; setTimeout(() => {refresh();},10);">
                <input type="text"
                    class="fi-input w-1/2 block border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-3 pe-3"
                    x-model="state.lat" />
                <input type="text"
                    class="fi-input w-1/2 block border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-3 pe-3"
                    x-model="state.lon" />
            </div>
       {{--     <div class="" x-text="state.lat+' '+state.lon"></div> --}}
            <input
                {{ $attributes->merge(
                        [
                            'id' => $getId(),
                            'type' => 'hidden',
                            $applyStateBindingModifiers('wire:model') => $getStatePath(),
                        ],
                        escape: false,
                    )->merge($getExtraAttributes(), escape: false)->class(['fi-fo-hidden']) }} />
            <div class="absolute z-20 top-8 w-full bg-gray-50 dark:bg-gray-900 shadow-lg rounded-md ring-1 transition duration-75 focus-within:ring-2 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500"
                x-show="open" x-cloak x-on:click.away="open = false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="flex items-center justify-between px-3 pt-2">
                    <p class="text-sm font-semibold text-gray-700 dark:text-white">{{ __('Pick a location:') }}</p>
                    <div x-on:click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2">
                    <div x-ref="map" class="w-full bg-slate-200" style="height: 400px"></div>
                </div>
            </div>
        </x-filament::input.wrapper>
    </div>
</x-dynamic-component>
