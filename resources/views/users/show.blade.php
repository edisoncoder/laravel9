<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Dados do usuário $user->name") }}
        </h2>


    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div>Editar usuário</div>
                <form action="" method="GET">
                    <button type="submit">Enviar</button>
                    <div>Informações pessoais</div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <div><label for="txtEmail">Usuário</label></div>
                            <div>
                                <div><input type="email" name="email" id="txtEmail" value="{{ $user->email }}"
                                        required></div>
                                @error('txtEmail')
                                    <div class="alert alert-danger">{{ 'Digite um email' }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div><label for="txtName">Nome completo</label></div>
                            <div><input type="text" name="nome" id="txtName" value="{{ $user->name }}" required>
                                @error('txtName')
                                    <div class="alert alert-danger">{{ 'Digite o nome do usuário' }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('users.index') }}">Listar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
