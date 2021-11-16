<?php

namespace Codedcell\RealeaseNotes;


use Codedcell\RealeaseNotes\Models\Readme;

class RealeaseNotes
{
    // Build your next great package.
    private $readmes;

    public function __construct()
    {
        $this->readmes = new Readme();
    }

    public function version($version)
    {
        $this->readmes = $this->readmes->where('semver_version', $version);
        return $this;
    }

    public function get()
    {
        return $this->readmes->get();
    }
}
