<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\testStudent;

class UpdateStudent extends Component
{
    public $s_id,$name,$email,$rollNo,$check=true;
    public function render()
    {
        return view('livewire.update-student');
    }

    public function studentUpdate(){
        $student = testStudent::find($this->s_id);
        $student->name=$this->name;
        $student->email=$this->email;
        $student->roll_no=$this->rollNo;
        $student->save();
        $this->check=false;
    }
}
