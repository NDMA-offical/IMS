<td>
    
    @can('issue view')
        <a href="{{ route('issues.show', $model->id) }}" class="btn btn-outline-success btn-sm">
            <i class="fa fa-eye"></i>
        </a>
    @endcan

    @can('issue edit')
        <a href="{{ route('issues.edit', $model->id) }}" class="btn btn-outline-primary btn-sm">
            <i class="fa fa-pencil-alt"></i>
        </a>
    @endcan

    @can('issue delete')
        <form action="{{ route('issues.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Are you sure to delete this record?')">
            @csrf
            @method('delete')

            <button class="btn btn-outline-danger btn-sm">
                <i class="ace-icon fa fa-trash-alt"></i>
            </button>
        </form>
    @endcan
    @can('issue view')
    <a href="{{ route('issues.print', $model->id) }}" class="btn btn-outline-primary btn-sm">
            <i class="fa fa-download"></i>
        </a>
    @endcan
</td>
