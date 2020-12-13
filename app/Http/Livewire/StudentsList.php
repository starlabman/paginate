<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentsList extends Component
{
	use WithPagination;

	public $query;

	public $perPage = 5;

	public function updatingQuery()
	{
		$this->resetPage();
	}

    public function render()
    {
        return view('livewire.students-list', [
        	'students' => Students::paginate(10),
        	'students' => Students::where('name', 'like', '%'. $this->query . '%')->paginate($this->perPage),
        ]);
    }
}
