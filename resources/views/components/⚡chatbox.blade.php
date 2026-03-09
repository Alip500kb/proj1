<?php

use Livewire\Component;
use \App\Models\community;
use \App\Models\Pemain;

new class extends Component
{
    public function autoload()
    {
        return $chats = community::all()->map(fn($chats) => [
        'id' => Hash::make($chats->id),
        'username' => (Pemain::where('id', $chats['user_id'])->first())['username'], //ingat harus menggunakan first untuk mencari
        'text' => $chats->text
    ]);
    }
};
?>

