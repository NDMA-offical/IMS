<td>
    @can('employee view')
        <a href="{{ route('employees.show', $model->id) }}" class="btn btn-outline-success btn-sm">
            <i class="fa fa-eye"></i>
        </a>
    @endcan

    @can('employee edit')
        <a href="{{ route('employees.edit', $model->id) }}" class="btn btn-outline-primary btn-sm">
            <i class="fa fa-pencil-alt"></i>
        </a>
    @endcan

    @can('employee delete')
        <form action="{{ route('employees.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Are you sure to delete this record?')">
            @csrf
            @method('delete')

            <button class="btn btn-outline-danger btn-sm">
                <i class="ace-icon fa fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</td>
