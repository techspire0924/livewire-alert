<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlertDemo extends Component
{
    public function showSuccessAlert()
    {
        $this->dispatch('showAlert', [
            'type' => 'success',
            'message' => 'Operation completed successfully!'
        ]);
    }

    public function showErrorAlert()
    {
        $this->dispatch('showAlert', [
            'type' => 'error',
            'message' => 'Something went wrong!'
        ]);
    }

    public function render()
    {
        return view('livewire.alert-demo');
    }
}
