<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach( $registros as $item)
        <item>
            <marca>{{ $item->marca }}</marca>
            <modelo>{{ $item->modelo }}</modelo>
            <ano_lancamento>{{ $item->ano_lancamento }}</ano_lancamento>
            <tamanho_tela>{{ $item->tamanho_tela }}</tamanho_tela>
            <processador>{{ $item->Processador }}</processador>
        </item>
    @endforeach
</data>