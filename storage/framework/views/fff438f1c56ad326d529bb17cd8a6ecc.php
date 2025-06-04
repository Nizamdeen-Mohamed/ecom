<div <?php echo e($attributes->merge(['class' => 'bg-white rounded-lg overflow-hidden'])); ?>>
    <img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?> Image" class="w-full h-48 object-cover">
    <div class="p-4 text-left">
        <p class="text-sm text-gray-500"><?php echo e($brand); ?></p>
        <h3 class="text-base font-semibold text-gray-900 mt-1"><?php echo e($name); ?></h3>
        
        
        <p class="text-gray-900 font-bold mt-2">from Rs <?php echo e($price); ?><sup>00</sup></p>
        
        
    </div>
</div>
<?php /**PATH C:\projects\nneenen\beautica\resources\views/components/product-card.blade.php ENDPATH**/ ?>