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
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($project->project_id); ?> </td>
                    <td>
                        <a href="/api/projects/<?php echo e($project->project_id); ?>">Data</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</tbody>
	</table>
</div>