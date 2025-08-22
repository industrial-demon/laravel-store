<?php

namespace App\Livewire\Posts;

use Livewire\View;
use Livewire\Component;

class CreatePost extends Component
{

    public function delete()
    {
        $this->dispatch('open-confirm-dialog');
    }

    public function toggle(): void
    {
        $this->dispatch('toggle-dialog');
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
