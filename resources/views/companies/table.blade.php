<table class="table table-responsive" id="companies-table">
    <thead>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Database Name</th>
        <th>Razon Social</th>
        <th>Contacto</th>
        <!--<th>Telefono</th>
        <th>Ruc</th>-->
        <th>Url</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->nombre !!}</td>
            <td>{!! $company->usuario !!}</td>
            <td>{!! $company->database_name !!}</td>
            <td>{!! $company->razon_social !!}</td>
            <td>{!! $company->contacto !!}</td>
            {{--<td>{!! $company->telefono !!}</td>--}}
                {{--<td>{!! $company->ruc !!}</td>--}}
            <td> <a target="_blank" href="{!! $company->url !!}">{!! $company->url !!}</a> </td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>