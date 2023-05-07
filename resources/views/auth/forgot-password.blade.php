<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>
        <br><br><br><br><br><br><br><br><br><br><br>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600" style="text-align:center">
                {{ session('status') }}
            </div>
        @endif
        <br>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block" style="text-align:center">
                <x-jet-label for="email" value="{{ __('E-Mail:') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <br>
            <div class="mb-4 text-sm text-gray-600" style="text-align:center">
            {{ __('Lütfen E-mail adresinizi giriniz.') }}
        </div>
        <br>
            <div class="flex items-center justify-end mt-4" style="text-align:center">
                <x-jet-button>
                    {{ __('Gönder') }}
                </x-jet-button>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
