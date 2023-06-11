<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\testStudent;

class Registration extends Component
{
    public $name,$rollNo,$email;
    public function render()
    {
        return view('livewire.registration');
    }
    public function updated($field){
        $this->validateOnly($field,[
            'name'=>['required','not_regex:/^[0-9]+$/'],
            'email'=>'required|email',
            'rollNo'=>'required|numeric|min:1'
        ]);
    }

    public function registerStudent(){
        $student = new testStudent();
        $student->name = $this->name;
        $student->roll_no = $this->rollNo;
        $student->email = $this->email;
        $student->save();
        $this->fieldReset();

    }
    public function fieldReset(){
        $this->reset(['name','email','rollNo']);
    }
}
