<?php

/**
 * This file is part of the Networking package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Entity\Admin;


use Networking\InitCmsBundle\Admin\Model\PageAdmin as ModelPageAdmin;
use Networking\InitCmsBundle\Entity\LayoutBlock;

/**
 *
 */
class PageAdmin extends ModelPageAdmin
{

    public function getPageByLayoutBlock(LayoutBlock $layoutBlock){

        return $layoutBlock->getPage();
    }
}
