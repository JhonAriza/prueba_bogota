<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Categoria;
use App\Models\Expertise;
use App\Models\Cultural_right;
use App\Models\Nac;
use Livewire\WithPagination;
class Categorias extends Component
{
    use WithPagination;
    public $categoria, $categoria_id,$nombre ,$actividad;
    public $expertise,$id_expertises, $SelectExpertise;
    public $cultural_right,$id_cultural_rights, $SelectCultural_right;
    public $nac,$id_nacs, $SelectNac;
    public $open_save = false;
    public $open_edit = false;


    protected $rules = [
        'nombre' => 'required',
        'actividad' => 'required',
        'SelectExpertise' => 'required',
        'SelectNac' => 'required',
        'SelectCultural_right' => 'required',
     ];
     protected $dates = [
        'mi_fecha'
    ];

    // Ejecutar Modal
    public function modal()
    {
        $this->open_save = true;
    }

    public function mount()
    {
        
        $this->expertise = Expertise::all();
        $this->cultural_right = Cultural_right::all();
        $this->nac = Nac::all();
    }
    //Crear el registro
    public function create()
    {
        //Validaciones

        //Crear el registro
       
        categoria::create([
            'nombre' => $this->nombre,
            'actividad' => $this->actividad,
            'id_expertises' => $this->SelectExpertise,
            'id_cultural_rights' => $this->SelectCultural_right,
            'id_nacs' => $this->SelectNac
            
        ]);
        // dd($this->SelectCultural_right);
        // dd($this->categoria);
        //Rectear las variables
        $this->reset(['open_save', 'nombre','id_expertises','id_cultural_rights','id_nacs']);
        $this->emitTo('categorias', 'render');


  
    }

    //Vistar principal
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.categorias', compact('categorias'));
    }

  


    // public function update()
    // {
    //     $this->validate();
    //     //Trayendo el registro y lo guardo una variable = $Proveedor
    //     $Categoria = Categoria::find($this->categoriaid);
    //     //Actualizao el registro anteorimente recibido


    //     if ($update = Categoria::where('id', $this->categoriaid)->first()) {
    //         $update->nombre = $this->nombre;
    //         $update->actividad = $this->actividad;
    //         $update->id_expertises = $this->SelectExpertise;
    //         $update->id_cultural_rights = $this->SelectCultural_right;
    //         $update->id_nacs = $this->SelectidNac;

    //         $update->save();
    //     }

    // }
 
 
   
}