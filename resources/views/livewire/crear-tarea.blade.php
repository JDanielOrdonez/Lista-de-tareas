<form action="" wire:submit.prevent='crearTarea'>
    {{-- input --}}
    <x-text-input class="w-full p-4 hover:border-none" wire:model='tarea' placeholder="Escribe tu tarea" />
    @error('tarea')        
        <livewire:mostrar-alerta :message="$message" />
    @enderror    
</form>
