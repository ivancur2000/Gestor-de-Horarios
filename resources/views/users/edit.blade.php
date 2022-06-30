<x-app-layout>

    <div class="p-20">

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('users.update', $user->id) }}" novalidate>
            @method('PUT')
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" value="{{ $user->name }}" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required value="{{ $user->email }}"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="code" value="{{ __('Codigo') }}" />
                <x-jet-input id="code" class="block mt-1 w-full" type="email" name="code" :value="old('code')"
                    required value="{{ $user->code }}" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Editar') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-app-layout>
