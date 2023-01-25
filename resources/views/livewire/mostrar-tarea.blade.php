<div>
    <div class="flex flex-wrap">        
        @forelse ($tareas as $tarea)              
            <x-tarea :tarea="$tarea" />
            {{-- <x-tarea :tarea="$tarea" index="{{$index}}" :textTarea="$textTarea" /> --}}
            {{-- <livewire:editar-tarea :tarea="$tarea" index="{{$index}}" :textTarea="$textTarea" /> --}}
        @empty
            <p class="p-3 text-center text-sm text-gray-600">
                Aún no hay tareas
                <i class="fa-solid fa-face-sad-tear"></i>
            </p>            
        @endforelse
        <livewire:editar-tarea :tarea="$tarea"/>
        
        
    </div>
    {{-- paginacion --}}
    <div class="mt-10 w-full">
        {{  $tareas->withQueryString()->links() }}
    </div>
     
</div>
