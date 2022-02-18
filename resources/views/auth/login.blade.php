<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo Juanadona">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}"  id="formulario">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4" id="btn-enviar">
                    {{ __('Conectarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script>

const btnEnviar = document.querySelector('#btn-enviar');
const form = document.querySelector('#formulario');
let div = document.createElement('div');
div.classList.add('error');
let botonCSS = {
    width: '100%',
    height: '20%',
    backgroundColor: '#ffd1d1',
    color: 'black',
    border: '1px solid red',
    marginBottom: '5px',
}
Object.assign(div.style, botonCSS);

function validarEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

async function comprobarFormulario(e) {
    let ready = false;
    if (form.email.value != "" && form.password.value != "") {
        ready = true;
    } else {
        ready = false;
        form.prepend(div);
        div.textContent = "Revise los campos, algunos estan vacios";
        setTimeout(() => div.remove(), 3000);

    }


    if (ready) {
        if (validarEmail(form.email.value)) {

        } else {
            form.prepend(div);
            div.textContent = "El email no tiene un formato valido!";
            setTimeout(() => div.remove(), 3000);
            form.email.focus();
        }
    }

}
btnEnviar.addEventListener("click", comprobarFormulario);
</script>
