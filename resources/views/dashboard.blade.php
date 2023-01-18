<x-app-layout>
    <x-slot name="header">
        <ol class="font-semibold text-sm text-gray-800 leading-tight sm:ml-0">
            <li>- Introduzca texto en el campo de entrada para añadir elementos a su lista.</li>
            <li>- Haga clic sobre <i class="fa-solid fa-trash"></i> para eliminar el elemento de la lista.</li>
            <li>- Haga clic sobre <i class="fa-solid fa-floppy-disk"></i> para guardar los cambios.</li>
        </ol>       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex">                        
            <livewire:crear-tarea />
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex">                        
            <livewire:mostrar-tarea />                                   
        </div>                       
    </div>    
</x-app-layout>
