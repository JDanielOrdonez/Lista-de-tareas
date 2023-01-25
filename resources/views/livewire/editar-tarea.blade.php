<div>    
    {{-- <x-modal wire:model="show" name="editar-tarea" focusable>
        <form action="">
            <textarea class="bg-pink-100 rounded-lg p-4 
            border-none resize-none min-h-max w-full" style="min-height: 15rem">{{$tarea->tarea}}</textarea>
        </form>
    </x-modal> --}}

    <x-jet-dialog-modal wire:model="show">        
        <x-slot name="title">
            Editar 
            {{-- {{$tarea->tarea}} --}}
        </x-slot>
        <x-slot name="content">
            <textarea wire:model="tarea.tarea" class="bg-pink-100 rounded-lg p-4 
            border-none resize-none min-h-max w-full" style="min-height: 15rem"></textarea>
        </x-slot>
        <x-slot name="footer">
            <x-primary-button wire:click="editarTarea">
                Guardar
            </x-primary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>