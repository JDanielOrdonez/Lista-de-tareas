<div>
    <div class="flex flex-wrap">
        @forelse ($tareas as $tarea)        
            <div class="flex flex-col flex-wrap justify-between max-w-xs text-clip {{$color}} mx-auto sm:px-3 lg:px-3 mt-5 cursor-pointer p-3 border rounded-lg">
                <div class="flex flex-row justify-between">
                    <textarea class="bg-pink-100 rounded-lg p-4 border-none resize-none min-h-max" style="min-height: 15rem">{{$tarea->tarea}}</textarea>
                    <div class="flex flex-col mr-3 gap-3 text-sm">                        
                        <x-primary-button wire:click="$emit('editarTarea', {{ $tarea->id }})" class="bg-amber-300 hover:bg-amber-200 focus:bg-amber-200">
                            <i class="fa-solid fa-floppy-disk"></i>
                        </x-primary-button>
                        <x-primary-button wire:click="$emit('eliminarTarea', {{ $tarea->id }})" class="">
                            <i class="fa-solid fa-trash"></i>
                        </x-primary-button>
                    </div>
                </div>
                <p class="text-xs text-gray-500 font-bold">{{$tarea->created_at->diffForHumans()}}</p>
            </div>
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
