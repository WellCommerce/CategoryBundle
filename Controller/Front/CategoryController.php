<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CategoryBundle\Controller\Front;

use Symfony\Component\HttpFoundation\Response;
use WellCommerce\Bundle\CategoryBundle\Entity\CategoryInterface;
use WellCommerce\Bundle\CategoryBundle\Storage\CategoryStorageInterface;
use WellCommerce\Bundle\CoreBundle\Controller\Front\AbstractFrontController;
use WellCommerce\Bundle\CoreBundle\Service\Breadcrumb\BreadcrumbItem;

/**
 * Class CategoryController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class CategoryController extends AbstractFrontController
{
    public function indexAction(CategoryInterface $category) : Response
    {
        $this->addBreadCrumbItem(new BreadcrumbItem([
            'name' => $category->translate()->getName(),
        ]));

        $this->getCategoryStorage()->setCurrentCategory($category);

        return $this->displayTemplate('index', [
            'category' => $category,
        ]);
    }
}
