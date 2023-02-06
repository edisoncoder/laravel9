
<x-app-layout>

    @slot('header')
        {{ $congregation->name }}
    @endslot
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div>Editar congregação</div>
                <form action="" method="GET">
                    <button type="submit">Enviar</button>
                    <div>Informações gerais</div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <div><label for="txtEmail">congregação</label></div>
                            <div>
                                <div><input type="email" name="email" id="txtEmail" value="{{ $congregation->name }}"
                                        required></div>
                                @error('txtEmail')
                                    <div class="alert alert-danger">{{ 'Digite um email' }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div><label for="txtName">Nome</label></div>
                            <div><input type="text" name="nome" id="txtName" value="{{ $congregation->name }}" required>
                                @error('txtName')
                                    <div class="alert alert-danger">{{ 'Digite o nome da congregação' }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('congregations.index') }}">Listar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>