<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form id="formulario" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="nif" value="{{ __('NIF') }}" />
                <x-jet-input id="nif" class="block mt-1 w-full" type="text" name="nif" :value="old('nif')" required autofocus autocomplete="nif"  />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="username" value="{{ __('Nombre de usuario') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>





            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estás registrado?') }}
                </a>

                <x-jet-button class="ml-4" id="btn-enviar" type="submit">
                    {{ __('Registrarse') }}
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
    if (form.name.value != "" && form.username.value != "" && form.nif.value != "" && form.email.value != "" && form.password.value != "" && form.password_confirmation.value != "") {
        ready = true;
    } else {
        ready = false;
        form.prepend(div);
        div.textContent = "Revise los campos, algunos estan vacios";
        setTimeout(() => div.remove(), 3000);

    }

    if (ready) {
        var numero,
            letraDelDNI, letraParaComprobar;
        var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
        dni = form.nif.value.toUpperCase();

        if (expresion_regular_dni.test(dni) === true) {
            numero = dni.substr(0, dni.length - 1);
            letraDelDNI = dni.substr(dni.length - 1, 1);
            numero = numero % 23;
            letraParaComprobar = 'TRWAGMYFPDXBNJZSQVHLCKET';
            letraParaComprobar = letraParaComprobar.substring(numero, numero + 1);
            if (letraParaComprobar != letraDelDNI) {
                ready = false;
                form.prepend(div);
                div.textContent = 'NIF erroneo, la letra no se corresponde';
                setTimeout(() => div.remove(), 3000);
            } else {
                ready = true;
            }

        } else {
            ready = false;
            form.prepend(div);
            div.textContent = 'NIF erroneo, formato no válido';
            setTimeout(() => div.remove(), 3000);
        }
    }

    if (ready) {
        if (validarEmail(form.email.value)) {
            if (form.password.value == form.password_confirmation.value) {
                ready = true;
            } else {
                ready = false;
                form.prepend(div);
                div.textContent = "El password y la confirmacion no coinciden";
                setTimeout(() => div.remove(), 3000);
                form.password.focus();
            }
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
