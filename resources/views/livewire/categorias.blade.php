<div>
    <div class='max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12'>
        <table>
            <div  >
                <button class="bg-white" wire:click="modal">
                    crear Nuevo
                </button>
            </div>
            <thead >
               
 

                <tr>
                  <th class="px-6">id Tabla</th>
                  <th class="px-6">CONSECUTIVO</th>
                  <th class="px-6">Monitor</th>
                  <th class="px-6">DERECHO CULTURAL</th>
                  <th class="px-6">NAC</th>
                  <th class="px-6">FECHA</th>
                  <th class="px-6">HORA INICIO</th>
                  <th class="px-6">HORA FINAL</th>
                  <th class="px-6"> EXPERTICIA</th>
                  <th class="px-6">FECHA CARGA db</th>
                </tr>
              </thead>
            <tbody class=" bg-white  text-center divide-gray-200">
                @foreach ($categorias as $item)
                    <tr>
                        <td class=" py-2 w-full">
                            <div class="text-sm text-gray-900">{{ $item->id }} </div>
                        </td>
                        <td class="px-4 py-2 w-full">
                            <div class="text-sm text-gray-900">FP{{ $item->id }}  </div>
                        </td>
                        <td class="px-4 py-2 w-full">
                            <div class="text-sm text-gray-900">{{ $item->nombre }}</div>
                        </td>
                         <td class="px-4 py-2 w-full">
                            @if ($item->id_cultural_rights == null)
                                N/A
                            @else
                                <div class="text-sm text-gray-900">
                                    {{ $item->cultural_right->name }}
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-2 w-full">
                            @if ($item->id_nacs == null)
                                N/A
                            @else
                                <div class="text-sm text-gray-900">
                                    {{ $item->nac->name }}
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-2 w-full">
                            <div class="text-sm text-gray-900"> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</div>
                        </td>



                        <td class="px-4 py-2 w-full">
                            <div class="text-sm text-gray-900">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('h:i:s A') }}</div>
                        </td>


                        <td class="px-4 py2 w-full">
                            <div class="text-sm text-gray-900">
                              
                                {{ \Carbon\Carbon::parse($item->created_at)->format('h:i:s A') }}
                            
                            </div>
                        </td>
                        <td class="px-4 py-2 w-full">
                            @if ($item->id_expertises == null)
                                N/A
                            @else
                                <div class="text-sm text-gray-900">
                                    {{ $item->expertise->name }}
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-2 w-full">
                            <div class="text-sm text-gray-900"> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y h:i:s A') }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


 
    <!-- donde se crear -->
    <x-jet-dialog-modal wire:model="open_save">
    
        <x-slot name='title'>
 <h1>FORMULARIO</h1>        </x-slot>

        <x-slot name='content'>
            <div class='mb4'>
                <x-jet-label value='actividad' />
                <x-jet-input type="text" class='w-full' wire:model='actividad' />
                <x-jet-input-error for='actividad' />
            </div>
            <div class='mb4'>
                <x-jet-label value='nombre' />
                <x-jet-input type="text" class='w-full' wire:model='nombre' />
                <x-jet-input-error for='nombre' />
            </div>
          
 <div class='mb4'>
    <x-jet-label value="Selelecionar Expertise" />
    <select class="form-control" wire:model="SelectExpertise">
        <option value="">Selelecionar SelectExpertise</option>
        @foreach ($expertise as $item)
            <option value="{{ $item->id }}">
                {{ $item->name}}
            </option>
        @endforeach
    </select>
</div>


  <!-- SE CREA SELECT PARA LA LLAVE FORANEA -->
  <div class='mb4'>
    <x-jet-label value="Selelecionar cultural_rights" />
    <select class="form-control" wire:model="SelectCultural_right">
        <option value="">Selelecionar cultural_rights</option>
        @foreach ($cultural_right as $item)
            <option value="{{ $item->id }}">
                {{ $item->name}}
            </option>
        @endforeach
    </select>
</div>
<!-- SE CREA SELECT PARA LA LLAVE FORANEA de Proveeedor -->
<div class='mb4'>
    <x-jet-label value="Selelecionar Nac" />
    <select class="form-control" wire:model="SelectNac">
        <option value="">Selelecionar nac</option>
        @foreach ($nac as $item)
            <option value="{{ $item->id }}">
                {{ $item->name}}
            </option>
        @endforeach
    </select>
</div>

        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open_save',false)">
                cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="create" wire:loading.remove wire:target='create'>
                crear  
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
