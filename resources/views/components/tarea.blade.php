<div class="flex flex-col flex-wrap justify-between max-w-xs text-clip bg-white mx-auto sm:px-3 lg:px-3 mt-5 cursor-pointer p-3 border rounded-lg">
    <div class="flex flex-row justify-between">
        <textarea class="bg-pink-100 rounded-lg p-4 border-none resize-none min-h-max disabled:cursor-not-allowed" readonly style="min-height: 15rem">{{$tarea->tarea}}</textarea>
        <div class="flex flex-col mr-3 gap-3 text-sm">      
            {{-- Boton Editar --}}
            <x-primary-button wire:click="$emit('openModal', {{$tarea}})" class="bg-amber-300 hover:bg-amber-200 focus:bg-amber-200">
                <i class="fa-solid fa-floppy-disk"></i>
            </x-primary-button>          
                           
            {{-- Boton Eliminar --}}
            <x-primary-button wire:click="$emit('eliminarTarea', {{ $tarea->id }})" class="">
                <i class="fa-solid fa-trash"></i>
            </x-primary-button>
        </div>
    </div>   
    
    <p class="text-xs text-gray-500 font-bold">{{$tarea->created_at->diffForHumans()}}</p>
</div>