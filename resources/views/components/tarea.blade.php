<div class="flex flex-col flex-wrap justify-between max-w-xs text-clip bg-white mx-auto sm:px-3 lg:px-3 mt-5 cursor-pointer p-3 border rounded-lg">
    <div class="flex flex-row justify-between">
        <textarea wire:model='ho' class="bg-pink-100 rounded-lg p-4 border-none resize-none min-h-max" style="min-height: 15rem"></textarea>
        <div class="flex flex-col mr-3 gap-3 text-sm">                        
            <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'editar-tarea')"  class="bg-amber-300 hover:bg-amber-200 focus:bg-amber-200">
                <i class="fa-solid fa-floppy-disk"></i>
            </x-primary-button>
            <livewire:editar-tarea :tarea="$tarea"/> 
            
            <x-primary-button wire:click="emit('eliminarTarea', {{ $tarea->id }})" class="">
                <i class="fa-solid fa-trash"></i>
            </x-primary-button>
        </div>
    </div>   
    
    <p class="text-xs text-gray-500 font-bold">{{$tarea->created_at->diffForHumans()}}</p>
</div>