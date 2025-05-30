<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlertDemo extends Component
{
<<<<<<< HEAD
=======
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

>>>>>>> 9946eb4ba701a6dfd595d9d1a4d13eaac2cca296
    public function render()
    {
        return view('livewire.alert-demo');
    }
}
