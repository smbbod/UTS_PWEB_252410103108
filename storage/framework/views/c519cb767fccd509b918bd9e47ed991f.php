

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full bg-[#FDFBF7] text-zinc-900 p-8 md:p-10 rounded-2xl shadow-2xl border border-amber-200/40 text-center md:text-left">
    <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-widest text-zinc-950 bg-amber-400 rounded-full mb-4 shadow-sm">
        Area Klien
    </span>
    <h2 class="text-3xl font-black text-zinc-900 mb-3">Selamat Datang, <?php echo e($clientName); ?>! 👋</h2>
    
    <p class="text-zinc-600 mb-8 text-base leading-relaxed">
        Terima kasih telah mempercayakan momen berharga Anda kepada <strong class="text-zinc-900">JeeSign Studio</strong>. Draf foto eksklusif Anda telah siap untuk ditinjau.
    </p>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
        <a href="<?php echo e(route('pengelolaan')); ?>" class="bg-amber-400 text-zinc-950 px-6 py-3.5 rounded-xl font-bold hover:bg-amber-300 transition duration-200 shadow-md">
            Lihat Galeri Foto &rarr;
        </a>
        <a href="<?php echo e(route('profile')); ?>" class="bg-zinc-200 text-zinc-800 px-6 py-3.5 rounded-xl font-semibold hover:bg-zinc-300 transition duration-200">
            Cek Profil Studio
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\APLIKASI\laragon\www\UTS\resources\views/dashboard.blade.php ENDPATH**/ ?>