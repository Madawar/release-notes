<?php

use App\Models\User;
use Codedcell\RealeaseNotes\Mail\NewRelease;
use Codedcell\RealeaseNotes\Models\Readme;
use Illuminate\Support\Facades\Route;
use Codedcell\RealeaseNotes\Http\Livewire\ReleaseNoteCreator;
use Illuminate\Support\Facades\Mail;

Route::middleware(['web'])
    ->group(
        function () {
            Route::get('release', ReleaseNoteCreator::class)->name('release.index');


            Route::get('releases', function () {
                $readmes = Readme::all();
                return view('realease-notes::readme')->with(compact('readmes'));
            });
            Route::get('release/{id}/notify', function ($id) {
                $readme = Readme::find($id);

                if ($readme->notify_all) {
                    $users = User::all();
                    foreach ($users as $user) {
                        Mail::to($user)->send(new NewRelease($readme));
                    }
                } else {
                    foreach ($readme->notify as $notify) {
                        Mail::to($notify)->send(new NewRelease($readme));
                    }
                }
                return view('realease-notes::readme')->with(compact('readmes'));
            })->name('release.notify');
        }
    );
