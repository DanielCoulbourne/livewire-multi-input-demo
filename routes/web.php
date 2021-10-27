<?php

use App\Http\Livewire\Message;
use Illuminate\Support\Facades\Route;

Route::get('messages', fn () => view('messages.index'))->name('messages.index');

Route::get('messages/new', Message::class)->name('messages.create');
Route::get('messages/{message}', Message::class)->name('messages.edit');
