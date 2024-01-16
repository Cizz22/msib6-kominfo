<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DetailModal extends ModalComponent
{
    public $individual;

    public function render()
    {
        return view('livewire.detail-modal');
    }

    public static function modalMaxWidth(): string
    {
        return '6xl';
    }

    public function mount($id)
    {
        $this->individual = \App\Models\Individual::find($id);
    }
}
