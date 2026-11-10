

<?php $__env->startSection('title', 'Login Klien'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-full max-w-md bg-[#FDFBF7] text-zinc-900 p-8 rounded-2xl shadow-2xl border border-amber-200/40">
    <div class="text-center mb-8">
        <!-- 10% Aksen Badge Kuning -->
        <span class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-widest text-zinc-950 bg-amber-400 rounded-full mb-3 shadow-sm">
            Portal Klien
        </span>
        <h2 class="text-2xl font-extrabold text-zinc-900">Selamat Datang</h2>
        <p class="text-zinc-600 mt-1 text-sm">Masukkan nama Anda untuk mengakses hasil pemotretan.</p>
    </div>

    <form action="<?php echo e(route('login.submit')); ?>" method="POST" class="space-y-5">
        <?php echo csrf_field(); ?>
        
        <div>
            <label for="client_name" class="block text-xs font-bold text-zinc-700 uppercase tracking-wider mb-2">Nama Klien</label>
            <input type="text" name="client_name" id="client_name" required
                class="w-full px-4 py-3 bg-white border border-zinc-300 rounded-xl text-zinc-900 placeholder-zinc-400 focus:ring-2 focus:ring-amber-400 focus:border-amber-400 outline-none transition shadow-sm"
                placeholder="Contoh: Rara atau Keluarga Bapak Budi">
            
            <?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-600 text-xs mt-1.5 block font-medium"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- 10% Tombol Utama Aksen Kuning -->
        <button type="submit" class="w-full bg-amber-400 text-zinc-950 font-bold py-3.5 px-4 rounded-xl hover:bg-amber-300 active:bg-amber-500 transition duration-200 shadow-md">
            Masuk ke Galeri &rarr;
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\APLIKASI\laragon\www\UTS\resources\views/login.blade.php ENDPATH**/ ?>