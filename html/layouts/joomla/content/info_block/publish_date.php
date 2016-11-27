<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
?>
			<div class="categ-date">
				<time datetime="<?php echo JHtml::_('date', $displayData['item']->publish_up, 'c'); ?>" itemprop="datePublished">
					<?php echo JHtml::_('date', $displayData['item']->publish_up, JText::_('')); ?>
				</time>
			</div>