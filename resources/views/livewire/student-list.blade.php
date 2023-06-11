<div>
    @if($check==true)
    <h1>Student Lists</h1>
    <table>
        <tr>
            <th>Student Id</th>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->roll_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <button wire:click="deleteStudent({{ $student->id }})">Delete</button>
                <button wire:click="updateStudent({{ $student->id }})">Edit</button>
            </td>
        </tr>
        @endforeach
    </table>

    @else

    <livewire:update-student :s_id="$s_id" :name="$name" :rollNo="$rollNo" :email="$email"/>
    @endif
</div>
