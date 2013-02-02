<ul>

<?php

echo '<li>';
echo $this->Html->link(__('Show all Users'),

array(
'controller' => 'users',
'action' => 'index'
));

echo '</li>';
echo '<li>';
echo $this->Html->link(__('Show all Books'),

array(
'controller' => 'books',
'action' => 'index'
));
echo '</li>';
echo '<li>';
echo $this->Html->link(__('Show all Categories'),

array(
'controller' => 'categories',
'action' => 'index'
));
echo '</li>';
echo '<li>';
echo $this->Html->link(__('Show all Loans'),

array(
'controller' => 'loans',
'action' => 'index'
));

echo '</li>';





?>




</ul>