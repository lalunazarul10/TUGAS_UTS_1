

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Edit Buku</h2>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('buku.update', $buku->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control"
        value="<?php echo e($buku->judul); ?>">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control"
        value="<?php echo e($buku->penulis); ?>">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control"
        value="<?php echo e($buku->penerbit); ?>">
    </div>

    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control"
        value="<?php echo e($buku->tahun_terbit); ?>">
    </div>

    <button type="submit" class="btn btn-success">
        Update
    </button>

    <a href="/buku" class="btn btn-secondary">
        Kembali
    </a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\imamb\Herd\toko_buku\resources\views/buku/edit.blade.php ENDPATH**/ ?>