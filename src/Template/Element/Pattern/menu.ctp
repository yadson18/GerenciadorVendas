<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */ 

    
?>
<?php if (isset($class) && is_string($class)): ?>
    <ul class='<?= $class ?>'>
        <?php if (isset($links) && is_array($links)): ?>
            <?php foreach ($links as $title => $link): ?>
                <?php if (is_string($title) && array_key_exists('url', $link)): ?>
                    <li>
                        <?php if (array_key_exists('options', $link)): ?>
                            <?= $this->Html->link($title, $link['url'], $link['options']) ?>
                        <?php else: ?>
                            <?= $this->Html->link($title, $link['url']) ?>
                        <?php endif ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
<?php endif ?>