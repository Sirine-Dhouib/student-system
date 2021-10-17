<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
               
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date Enregistered</th>
        <th>User Id</th>
        <th>Class Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admissions)
            <tr>
            <td>{{ $admissions->first_name }}</td>
            <td>{{ $admissions->last_name }}</td>
            <td>{{ $admissions->gender }}</td>
            <td>{{ $admissions->email }}</td>
            <td>{{ $admissions->phone }}</td>
            <td>{{ $admissions->date_enregistered }}</td>
            <td>{{ $admissions->user_id }}</td>
            <td>{{ $admissions->class_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admissions.destroy', $admissions->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admissions->student_id]) }}" class='btn btn-warning btn-xs'>
                            View
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admissions.edit', [$admissions->student_id]) }}" class='btn btn-info btn-xs'>
                            Edit
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
