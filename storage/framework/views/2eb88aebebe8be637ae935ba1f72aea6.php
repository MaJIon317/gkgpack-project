<div>
    <div
        x-data="{
          open: <?php if ((object) ('showDropdown') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showDropdown'->value()); ?>')<?php echo e('showDropdown'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showDropdown'); ?>')<?php endif; ?>,
          search: <?php if ((object) ('search') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('search'->value()); ?>')<?php echo e('search'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('search'); ?>')<?php endif; ?>,
          selected: <?php if ((object) ('selected') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'->value()); ?>')<?php echo e('selected'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'); ?>')<?php endif; ?>,
          highlightedIndex: 0,
          highlightPrevious() {
            if (this.highlightedIndex > 0) {
              this.highlightedIndex = this.highlightedIndex - 1;
              this.scrollIntoView();
            }
          },
          highlightNext() {
            if (this.highlightedIndex < this.$refs.results.children.length - 1) {
              this.highlightedIndex = this.highlightedIndex + 1;
              this.scrollIntoView();
            }
          },
          scrollIntoView() {
            this.$refs.results.children[this.highlightedIndex].scrollIntoView({
              block: 'nearest',
              behavior: 'smooth'
            });
          },
          updateSelected(id, name) {
            this.selected = id;
            this.search = name;
            this.open = false;
            this.highlightedIndex = 0;
          },
      }">
        <div x-on:value-selected="updateSelected($event.detail.id, $event.detail.name)">
            <span>
              <div>
                <input
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-bluishCyan-500 dark:focus:border-bluishCyan-600 focus:ring-bluishCyan-500 dark:focus:ring-bluishCyan-600 rounded-md shadow-sm mt-1 block w-full"
                    wire:model.live.debounce.300ms="search"
                    x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                    x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                    x-on:keydown.enter.stop.prevent="$dispatch('value-selected', {
                    id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                    name: $refs.results.children[highlightedIndex].getAttribute('data-result-name')
                  })">
              </div>
            </span>
            <div
                x-show="open"
                x-on:click.away="open = false"
                class="bg-gray-300 dark:bg-black dark:text-gray-300"
            >
                <ul x-ref="results">
                    <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li
                            wire:key="<?php echo e($index); ?>"
                            x-on:click.stop="$dispatch('value-selected', {
                id: <?php echo e($result->id); ?>,
                name: '<?php echo e($result->{$this->label}); ?>'
              })"
                            :class="{
                'bg-bluishCyan-400': <?php echo e($index); ?> === highlightedIndex,
                'text-gray-700 dark:text-gray-700': <?php echo e($index); ?> === highlightedIndex
              }"
                            data-result-id="<?php echo e($result->id); ?>"
                            data-result-name="<?php echo e($result->{$this->label}); ?>">
                <span>
                  <?php echo e($result->{$this->label}); ?>

                </span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li>No results found</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/fields/autocomplete.blade.php ENDPATH**/ ?>