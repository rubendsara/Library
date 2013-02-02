<div class="loans view">
<h2><?php  echo __('Loan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loan['User']['name'], array('controller' => 'users', 'action' => 'view', $loan['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loan['Book']['name'], array('controller' => 'books', 'action' => 'view', $loan['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loan'), array('action' => 'edit', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan'), array('action' => 'delete', $loan['Loan']['id']), null, __('Are you sure you want to delete # %s?', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
