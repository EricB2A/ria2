<h1>Projects</h1>

<div class="table-responsive">
	<table class="table table-sm table-transparent table-hover"
		<thead>
		</thead>
		<tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($project->id); ?> </td>
                    <?php if($project->data): ?>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
