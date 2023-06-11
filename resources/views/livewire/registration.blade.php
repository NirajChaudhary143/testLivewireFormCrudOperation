<div>
    <h1>Registration</h1>
    <form wire:submit.prevent="registerStudent">
        <input type="text" placeholder="Name" wire:model="name">
        @error('name') {{$message}} @enderror
        <br><br>
        
        <input type="number" placeholder="Roll Number" wire:model="rollNo">@error('rollNo') {{$message}} @enderror<br><br>
        <input type="email" placeholder="Enter Email" wire:model="email">@error('email') {{$message}} @enderror<br><br>
        <button>Register</button>
    </form>
</div>
