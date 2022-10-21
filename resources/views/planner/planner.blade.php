<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Planner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-form-section submit="addTarget">
                <x-slot name="title">
                    {{ __('Add a Target') }}
                </x-slot>
            
                <x-slot name="description">
                    {{ __('Add a smart target') }}
                </x-slot>
            
                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="target" value="{{ __('Target') }}" />
                        <x-jet-input id="target" type="text" class="mt-1 block w-full" autofocus />
                        <x-jet-input-error for="target" class="mt-2" />
                    </div>
                </x-slot>
            
                <x-slot name="actions">
                    <x-jet-button>
                        {{ __('Add') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>
</x-app-layout>
