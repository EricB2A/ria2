<h1>Projects</h1>

<div class="table-responsive">
	<table class="table table-sm table-transparent table-hover"
		<thead>
            <tr>
                <td> project id </td>
                <td> data </td>
            </tr>
		</thead>
		<tbody>
            @foreach($projects as $project)
                <tr>
                    <td> {{ $project->project_id }} </td>
                    <td>
                        <a href="/api/projects/{{$project->project_id}}">Data</a>
                    </td>
                </tr>
            @endforeach

		</tbody>
	</table>
</div>