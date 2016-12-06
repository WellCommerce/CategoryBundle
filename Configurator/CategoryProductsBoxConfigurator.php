<?php
/**
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CategoryBundle\Configurator;

use WellCommerce\Bundle\LayoutBundle\Configurator\AbstractLayoutBoxConfigurator;
use WellCommerce\Component\Form\Elements\FormInterface;
use WellCommerce\Component\Form\FormBuilderInterface;

/**
 * Class CategoryProductsBoxConfigurator
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class CategoryProductsBoxConfigurator extends AbstractLayoutBoxConfigurator
{
    /**
     * {@inheritdoc}
     */
    public function addFormFields(FormBuilderInterface $builder, FormInterface $form, $defaults)
    {
        $fieldset = $this->getFieldset($builder, $form);
        
        $fieldset->addChild($builder->getElement('text_field', [
            'name'  => 'per_page',
            'label' => $this->trans('layout_box.category_products.per_page'),
        ]));
    }
}
