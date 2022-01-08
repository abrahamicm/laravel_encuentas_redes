<div class="table-responsive">
    <table class="table" id="quizzes-table">
        <thead>
            <tr>
                <th>Email</th>
        <th>Age Id</th>
        <th>Gender</th>
        <th>Social Network Id</th>
        <th>Average Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->email }}</td>
            <td>{{ $quiz->age_id }}</td>
            <td>{{ $quiz->gender }}</td>
            <td>{{ $quiz->social_network_id }}</td>
            <td>{{ $quiz->average_time }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['quizzes.destroy', $quiz->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('quizzes.show', [$quiz->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('quizzes.edit', [$quiz->id]) }}" class='btn btn-default btn-xs'>
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
