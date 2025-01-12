<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpPluralMixedCanBeReplacedWithArrayInspection */
/** @noinspection PhpUnused */

declare(strict_types=1);

namespace AcidUnit\WysiwygEditor\Model;

use AcidUnit\Admin\Model\ConfigProviderInterface;
use Magento\Cms\Model\Wysiwyg\Config as VendorConfig;

class WysiwygEditorConfigProvider implements ConfigProviderInterface
{
    /**
     * @param Config $config
     * @param VendorConfig $vendorConfig
     */
    public function __construct(
        private readonly Config       $config,
        private readonly VendorConfig $vendorConfig
    ) {
    }

    /**
     * Get Config
     *
     * @return array<mixed>
     */
    public function getConfig(): array
    {
        return [
            'wysiwyg_editor' => [
                'enabled' => $this->vendorConfig->isEnabled(),
                'enabled_for_pagebuilder_html_element' => $this->config->isWysiwygForPageBuilderHtmlElementEnabled()
            ]
        ];
    }
}
