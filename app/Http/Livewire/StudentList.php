<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\testStudent;

class StudentList extends Component
{
    public $students,$name,$rollNo,$email,$s_id,$check=true;
    public function render()
    {
        return view('livewire.student-list');
    }
    public function mount(){
        $this->students =testStudent::all();
    }
    public function deleteStudent($id){
        testStudent::find($id)->delete();
        $this->mount();
    }
    
    public function updateStudent($id){
        $this->s_id=$id;
        $student = testStudent::find($id);
        $this->name=$student->name;
        $this->email=$student->email;
        $this->rollNo =$student->roll_no;
        $this->check=false;
    }
}
