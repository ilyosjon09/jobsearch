<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class VacanyList extends Component
{
    public array $vacancies;

    public $selectedVacancyId;
    public string $vacancyDetails;
    public function mount()
    {
        $this->vacancies = Vacancy::query()
            ->select('id', 'title', 'company_name', 'salary_min', 'salary_max')
            ->get()
            ->toArray();
    }

    #[Layout('layouts.main')]
    public function render()
    {
        return view('livewire.vacany-list');
    }

    public function show($id): void
    {
        $this->selectedVacancyId=$id;
        $this->vacancyDetails = Vacancy::find($this->selectedVacancyId)->description;
    }
}
