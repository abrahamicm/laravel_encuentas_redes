<div class="table-responsive">
    <table class="table" id="averageTimes-table">
        <thead>
            <tr>
                <th>Time Range</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($averageTimes as $averageTime)
            <tr>
                <td>{{ $averageTime->time_range }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['averageTimes.destroy', $averageTime->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('averageTimes.show', [$averageTime->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('averageTimes.edit', [$averageTime->id]) }}" class='btn btn-default btn-xs'>
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
