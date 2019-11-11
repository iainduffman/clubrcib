<?php

$el = $this->el('div');

?>

<?= $el($props, $attrs) ?>
    <?php dynamic_sidebar($props['content'] . ':grid' . ($props['layout'] === 'stack' ? '-stack' : '')) ?>
</div>
