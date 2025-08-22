<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\On;

class ConfirmRemoveDialog extends Component
{
    public $show = false;

    protected $listeners = ['open-confirm-dialog' => 'showDialog'];

    #[On('toggle-dialog')]
    public function showDialog()
    {
        if ($this->show) {
            $this->show = false;
        } else {
            $this->show = true;
        }
    }

    public function render()
    {
        return view('livewire.posts.confirm-remove-dialog');
    }
}
