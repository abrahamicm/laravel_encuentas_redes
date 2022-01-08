<div class="table-responsive">
    <table class="table" id="ages-table">
        <thead>
            <tr>
                <th>Age Range</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ages as $age)
            <tr>
                <td>{{ $age->age_range }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ages.destroy', $age->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ages.show', [$age->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ages.edit', [$age->id]) }}" class='btn btn-default btn-xs'>
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
