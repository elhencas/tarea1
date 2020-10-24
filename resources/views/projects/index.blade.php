@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse($projectdatos as $projectitem)
            <li> <a href="{{ route('portfolio.show',$projectitem) }} "> {{$projectitem->title}}</a>     {{$projectitem->created_at->diffForHumans() }}</li>


        @empty
            <li>No hay proyectos para mostrar</li>

        @endforelse

       <li> {{ $projectdatos->links() }} </li>


    </ul>

@endsection
