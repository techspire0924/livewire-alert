<?php

namespace App\Http\Livewire;

use Livewire\Component; // Ensure Livewire is installed and the Component class exists

class Alert extends Component
{
    public $type = 'info';   // Default type
    public $message = '';    // Default message
    public $visible = false; // Default visibility (hidden initially)

    protected $listeners = ['showAlert' => 'display'];

    // Method to emit the event
    public function triggerAlert($type, $message)
    {
        // Emit the 'showAlert' event with the type and message
        $this->emit('showAlert', $type, $message);
    }

    // Display the alert with type and message
    public function display($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
        $this->visible = true;

        // Auto-hide after 5 seconds
        $this->dispatchBrowserEvent('hide-alert', ['timeout' => 5000]);
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