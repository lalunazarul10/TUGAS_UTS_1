

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Detail Buku</h2>

<div class="card">
    <div class="card-body">
        <h4><?php echo e($buku->judul); ?></h4>

        <p>
            <strong>Penulis :</strong>
            <?php echo e($buku->penulis); ?>

        </p>

        <p>
            <strong>Penerbit :</strong>
            <?php echo e($buku->penerbit); ?>

            </p>

        <p>
            <strong>Tahun Terbit :</strong>
            <?php echo e($buku->tahun_terbit); ?>

        </p>

        <a href="/buku" class="btn btn-primary">
            Kembali
        </a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\imamb\Herd\toko_buku\resources\views/buku/show.blade.php ENDPATH**/ ?>