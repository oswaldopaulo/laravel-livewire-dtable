<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    public $search;
    public $link = "contacts";
    protected $queryString = ['search'];
    public $paginas=15;
    public function render()
    {

        $t = DB::table('contacts')->whereNull('deleted_at');

        //if (Request::input('search') && strlen(Request::input('search')) >= 3) {

        if ($this->search) {

            $t->where(function ($q) {
                $q->Orwhere('itens.nome', 'like', '%' . $this->search . '%');
                $q->Orwhere('itens.descricao', 'like', '%' . $this->search . '%');
                $q->Orwhere('itens.marca', 'like', '%' . $this->search . '%');
                $q->Orwhere('itens.modelo', 'like', '%' . $this->search . '%');
            });

        }

        $t = $t->paginate($this->paginas);
        return view('livewire.contact.index')->with(['t' => $t]);
    }
}
