<h1>Projects</h1>

<div class="table-responsive">
	<table class="table table-sm table-transparent table-hover"
		<thead>
		</thead>
		<tbody>
            @foreach($projects as $project)
                <tr>
                    <td> {{ $project->id }} </td>
                    @if($project->data)
                        <td> {{ $project->data }}</td>
                    @endif
                </tr>
            @endforeach
		</tbody>
	</table>
</div>
