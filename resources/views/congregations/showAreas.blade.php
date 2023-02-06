<x-app-layout>
    @slot('header')
        Listagem de Congregações
    @endslot
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach ($areas as $area)
                            @if (count($area->congregations)>0)
                                {{ $area->name }}
                            
                                @foreach ($area->congregations as $congregation)
                                <li>{{ $congregation->name }} 
                                        | <a href="{{ route('congregations.show', $congregation->id) }}">Detalhes</a>
                                    </li>
                                @endforeach                        
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    </x-app-layout>