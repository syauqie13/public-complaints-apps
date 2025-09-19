<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required', message: 'Id Pengenal harus di isi')]
    public $idUser = '';

    #[Validate('required', message: 'Password Harus Di Isi')]
    #[Validate('min:6', message: 'Password Minimal 6 Karakter')]
    public $password = '';

    public $remember = false;

    public function login()
    {
        $this->validate();

        $user = User::where('email', $this->idUser)
            ->orWhere('username', $this->idUser)
            ->orWhere('whatsapp', $this->idUser)
            ->first();

        if (!$user) {
            $this->addError('idUser', 'Akun Tidak Di Temukan');
            return;
        }

        if (Auth::attempt(
            [$this->getLoginField($user) => $this->idUser, 'password' => $this->password],
            $this->remember
        )) {
            session()->regenerate();
            return $this->redirectIntended(route('admin.dashboard'), navigate: true);
        }

        $this->addError('password', 'Password salah');
    }

    private function getLoginField(User $user): string
    {
        return match (true) {
            $user->email === $this->idUser => 'email',
            $user->username === $this->idUser => 'username',
            $user->whatsapp === $this->idUser => 'whatsapp',
            default => 'email',
        };
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
