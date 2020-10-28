@section('content')
    <h1>Proyectos</h1>

    <ul>
        @forelse($projectdatos as $projectitems)
            <li> <a href="{{ route('projects.show',$projectitems) }} "> {{$projectitems->title}}</a>     {{$projectitems->created_at->diffForHumans() }}</li>


        @empty
            <li>No hay proyectos para mostrar</li>

        @endforelse

       <li> {{ $projectdatos->links() }} </li>


    </ul>

@endsection
