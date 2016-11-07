<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comment->pid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comment form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Edit Comment') ?></legend>
        <?php
            echo $this->Form->input('s_no');
            echo $this->Form->input('u_name');
            echo $this->Form->input('c_title');
            echo $this->Form->input('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
