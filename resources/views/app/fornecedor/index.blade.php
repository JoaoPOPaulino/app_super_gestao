<h3>Fornecedor</h3>

@php
    
@endphp

@isset($fornecedores)

    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não disponível' }}
        <br>
        DDD: {{ $fornecedores[$i]['ddd'] ?? 'DDD não disponível' }}
        <br>
        Telefone: {{ $fornecedores[$i]['telefone'] ?? 'Telefone não disponível' }}
        <hr>
    @endfor
@endisset