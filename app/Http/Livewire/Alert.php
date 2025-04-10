<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Alert extends Component
{
    public $type = 'info';   // Default type
    public $message = '';    // Default message
    public $visible = false; // Default visibility (hidden initially)

    // Listen for the showAlert event
    #[On('showAlert')]
    public function showAlert($data)
    {
        $this->type = $data['type'];
        $this->message = $data['message'];
        $this->visible = true;

        // Auto-hide after 5 seconds
        $this->dispatch('hide-alert', ['timeout' => 5000]);
    }

    // Method to trigger the alert
    public function triggerAlert($type, $message)
    {
        // Dispatch the 'showAlert' event with the type and message
        $this->dispatch('showAlert', [
            'type' => $type,
            'message' => $message
        ]);
    }

    // Hide the alert manually
    public function hide()
    {
        $this->visible = false;
    }

    // Render the alert component
    public function render()
    {
        return view('livewire.alert');
    }
}
