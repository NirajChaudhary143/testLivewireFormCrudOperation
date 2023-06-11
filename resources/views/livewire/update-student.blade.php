<div>
    @if($check==true)
    <h1>Update Student</h1>
    <form wire:submit.prevent="studentUpdate">
        <input type="text" placeholder="Name" wire:model="name">
        @error('name') {{$message}} @enderror
        <br><br>
        
        <input type="number" placeholder="Roll Number" wire:model="rollNo">@error('rollNo') {{$message}} @enderror<br><br>
        <input type="email" placeholder="Enter Email" wire:model="email">@error('email') {{$message}} @enderror<br><br>
        <button>Update</button>
    </form>
    @else
        <livewire:student-list />
    @endif
</div>
