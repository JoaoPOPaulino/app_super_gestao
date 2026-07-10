<h3>Fornecedor</h3>

@php
    
@endphp

@add($forncedores)

@if (count($fornecedores) >0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'CNPJ não disponível' }}
    <br>
    DDD: {{ $fornecedores[0]['ddd'] ?? 'DDD não disponível' }}
    <br>
    Telefone: {{ $fornecedores[0]['telefone'] }}
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
            
    @endswitch
@endisset