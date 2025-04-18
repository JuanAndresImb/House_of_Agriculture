<li data-id="<?php echo e($book->id); ?>"
     data-name="<?php echo e($book->name); ?>"
     data-created="<?php echo e($book->created_at->timestamp); ?>"
     data-updated="<?php echo e($book->updated_at->timestamp); ?>"
     class="scroll-box-item">
    <div class="handle px-s"><?php echo (new \BookStack\Util\SvgIcon('grip'))->toHtml(); ?></div>
    <div class="text-book"><?php echo (new \BookStack\Util\SvgIcon('book'))->toHtml(); ?><?php echo e($book->name); ?></div>
    <div class="buttons flex-container-row items-center ml-auto px-xxs py-xs">
        <button type="button" data-action="move_up" class="icon-button p-xxs"
                title="<?php echo e(trans('entities.books_sort_move_up')); ?>"><?php echo (new \BookStack\Util\SvgIcon('chevron-up'))->toHtml(); ?></button>
        <button type="button" data-action="move_down" class="icon-button p-xxs"
                title="<?php echo e(trans('entities.books_sort_move_down')); ?>"><?php echo (new \BookStack\Util\SvgIcon('chevron-down'))->toHtml(); ?></button>
        <button type="button" data-action="remove" class="icon-button p-xxs"
                title="<?php echo e(trans('common.remove')); ?>"><?php echo (new \BookStack\Util\SvgIcon('remove'))->toHtml(); ?></button>
        <button type="button" data-action="add" class="icon-button p-xxs"
                title="<?php echo e(trans('common.add')); ?>"><?php echo (new \BookStack\Util\SvgIcon('add-small'))->toHtml(); ?></button>
    </div>
</li><?php /**PATH /app/www/resources/views/shelves/parts/shelf-sort-book-item.blade.php ENDPATH**/ ?>