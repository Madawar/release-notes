<?php

namespace Codedcell\RealeaseNotes\Http\Livewire;

use Codedcell\RealeaseNotes\Models\Readme;
use Livewire\Component;


class ReleaseNoteCreator extends Component
{
    public $readme;
    public $value;
    protected $rules = [
        'readme.semver_version' => '',
        'readme.release_date' => '',
        'readme.description' => '',
        'readme.release_notes' => '',
        'readme.notify' => '',
        'readme.notify_all' => '',

    ];

    public function mount($readme = null, $value = null)
    {
        $this->value = $value;
        $this->readme = $readme;
        if (is_null($this->readme)) {
            $this->readme = new Readme();
        }
    }

    public function saveReadMe()
    {
        $this->readme->notify = explode(',', $this->readme->notify);
        $this->readme->save();
    }

    public function render()
    {
        return view('realease-notes::livewire.release-note-creator')->extends('realease-notes::master_layout');
    }
}
