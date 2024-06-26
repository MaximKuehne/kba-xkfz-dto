<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeTechnischeAbsenderinformationen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeTechnischeAbsenderinformationen extends AbstractStructBase
{
    /**
     * The TechnischeAbsenderinformation
     */
    public ?\THAG\XKfz\StructType\TechnischeAbsenderinformation $TechnischeAbsenderinformation = null;

    /**
     * Constructor method for ListeTechnischeAbsenderinformationen
     *
     * @uses ListeTechnischeAbsenderinformationen::setTechnischeAbsenderinformation()
     */
    public function __construct(?\THAG\XKfz\StructType\TechnischeAbsenderinformation $technischeAbsenderinformation = null)
    {
        $this
            ->setTechnischeAbsenderinformation($technischeAbsenderinformation);
    }

    /**
     * Get TechnischeAbsenderinformation value
     */
    public function getTechnischeAbsenderinformation(): ?\THAG\XKfz\StructType\TechnischeAbsenderinformation
    {
        return $this->TechnischeAbsenderinformation;
    }

    /**
     * Set TechnischeAbsenderinformation value
     */
    public function setTechnischeAbsenderinformation(?\THAG\XKfz\StructType\TechnischeAbsenderinformation $technischeAbsenderinformation = null): self
    {
        $this->TechnischeAbsenderinformation = $technischeAbsenderinformation;

        return $this;
    }
}
