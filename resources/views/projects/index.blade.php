@section('content')
    <h1>Proyectos</h1>

    <ul>
        @forelse($project as $projectitem)
            <li> <a href="{{ route('projects.show',$projectitem) }} "> {{$projectitem->title}}</a>     {{$projectitem->created_at->diffForHumans() }}</li>


        @empty
            <li>No hay proyectos para mostrar</li>

        @endforelse

       <li> {{ $project->links() }} </li>


    </ul>

@endsection
