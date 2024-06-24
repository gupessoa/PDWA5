<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="processar_formulario.php" method="POST">
                        <div class="mt-4"><!--  Marca -->
                            <x-input-label for="marca" :value="__('Marca')" />
                            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" maxlength="20" required autofocus autocomplete="marca" />
                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                        </div>
                        <div class="mt-4"><!--  Modelo -->
                            <x-input-label for="modelo" :value="__('Modelo')" />
                            <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo')" required autofocus autocomplete="modelo" />
                            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                        </div>
                        <div class="mt-4"><!--  Ano Lançamento -->
                            <x-input-label for="ano" :value="__('Ano Lançamento')" />
                            <x-text-input id="ano" class="block mt-1 w-full" type="date" name="ano" :value="old('ano')" required autofocus autocomplete="ano" />
                            <x-input-error :messages="$errors->get('ano')" class="mt-2" />
                        </div>
                        <div class="mt-4"><!--  Tamanho de tela -->
                            <x-input-label for="tamanho" :value="__('Tamanho de Tela')" />
                            <x-text-input id="tamanho" class="block mt-1 w-full" type="number" name="tamanho" :value="old('tamanho')" required autofocus autocomplete="tamanho" />
                            <x-input-error :messages="$errors->get('tamanho')" class="mt-2" />
                        </div>
                        <div class="mt-4"><!--  Processador -->
                            <x-input-label for="processador" :value="__('Processador')" />
                            <x-text-input id="processador" class="block mt-1 w-full" type="text" name="processador" :value="old('processador')" maxlength="50" required autofocus autocomplete="processador" />
                            <x-input-error :messages="$errors->get('processador')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4"><!--  Processador -->
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar')}}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
