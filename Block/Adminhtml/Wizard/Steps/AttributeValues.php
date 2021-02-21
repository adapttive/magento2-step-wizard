<?php
namespace Adapttive\Wizard\Block\Adminhtml\Wizard\Steps;

/**
 * Adminhtml block for fieldset of configurable product
 * Reference: \Magento\ConfigurableProduct\Block\Adminhtml\Product\Steps\AttributeValues
 * @api
 * @since 100.0.2
 */
class AttributeValues extends \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Attribute Values');
    }
}
