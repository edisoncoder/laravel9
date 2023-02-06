<x-app-layout>
    @slot('header')
        Listagem de Congregações
    @endslot
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="sm:px-6">
                        <h1>{{ $congregation->name }} - {{ 'R$ ' . number_format($soma, 2, ',', '.') }}</h1>
                        <hr>
                        <ul>
                            @foreach ($totals as $total)
                                <li>{{ $total->qtStatus }} - 
                                    <a href="{{ route('launches.show', ['congregationId'=>$congregation->id,'statusId'=> $total->status]) }}">{{ $total->statues }}</a>:
                                    {{ 'R$ ' . number_format($total->soma, 2, ',', '.') }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="">
                        <form action="{{ route('launches.store', $congregation->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="congregation_id" value="{{ $congregation->id }}">
                            <label for="launchType">Tipo de Lançamento</label>
                            <select name="launch_type_id" id="launchType" class="@error('launchType') is-invalid @enderror">
                                <option selected>Selecione</option>
                                <option value="1">Oferta</option>
                                <option value="2">Dízimo</option>
                                <option value="3">Voto</option>
                            </select>
                            <label for="inputType">Tipo de Entrada</label>
                            <select name="input_type_id" id="inputType" class="@error('inputType') is-invalid @enderror">
                                <option selected>Selecione</option>
                                <option value="1">Pix</option>
                                <option value="2">Dinheiro</option>
                                <option value="3">Débito</option>
                            </select>
                            <label for="amount">Valor</label>
                            <input type="number" id="amount" class="@error('amount') is-invalid @enderror"
                                name="amount">
                            @error('type')
                                <div class="alert alert-danger">Escola um tipo válido</div>
                            @enderror

                            <button type="submit" value="Enviar">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
