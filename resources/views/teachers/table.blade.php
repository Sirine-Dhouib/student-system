<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
         <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date Enregistered</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teachers)
            <tr>
            <td>{{ $teachers->first_name }}</td>
            <td>{{ $teachers->last_name }}</td>
            <td>{{ $teachers->gender }}</td>
            <td>{{ $teachers->email }}</td>
            <td>{{ $teachers->phone }}</td>
            <td>{{ $teachers->date_enregistered }}</td>
            <td>{{ $teachers->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->teacher_id]) }}" class='btn btn-warning btn-xs'>
                            View
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teachers->teacher_id]) }}" class='btn btn-info btn-xs'>
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
