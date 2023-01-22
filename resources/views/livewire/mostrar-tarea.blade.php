<div>
    <div class="flex flex-wrap">
        @forelse ($tareas as $tarea)                     
            <x-tarea :tarea="$tarea" />            
        @empty
            <p class="p-3 text-center text-sm text-gray-600">
                Aún no hay tareas
                <i class="fa-solid fa-face-sad-tear"></i>
            </p>
        @endforelse
        
    </div>
    {{-- Paginacion --}}
    <div class="mt-10 w-full">
        {{  $tareas->withQueryString()->links() }}
    </div>
     
</div>
