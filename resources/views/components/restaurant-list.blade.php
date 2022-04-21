<div>
    <h3>{{ $title ??= 'Título não informado' }}</h3>

    <p>{{ $slot ??= 'Não informado' }}</p> {{-- o conteúdo que não é nomeado vai para a variável $slot por default --}}

    @dump($restaurant->all())
</div>