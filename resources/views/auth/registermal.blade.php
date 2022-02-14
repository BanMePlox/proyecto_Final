<link rel="stylesheet" href="{{URL::asset('css/styleform.css')}}">

        <x-jet-validation-errors class="mb-4" />

        <form class="formulario" method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Registrate</h1>
            <div class="contenedor">
            <div class="input__contenedor">

                <x-jet-label for="nif" value="{{ __('NIF') }}" />
                <x-jet-input id="nif" type="text" name="nif" :value="old('nif')" required autofocus autocomplete="nif"  />
            </div>

            <div class="input__contenedor">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="input__contenedor">
                <x-jet-label for="username" value="{{ __('Nombre de usuario') }}" />
                <x-jet-input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="input__contenedor">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="input__contenedor">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="input__contenedor">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estás registrado?') }}
                </a>

                <x-jet-button class="boton" id="btn-enviar" type="submit">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
