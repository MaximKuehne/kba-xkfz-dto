<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypXml StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypXml extends AbstractStructBase
{
    /**
     * The DatentypXmlSchema
     */
    public ?string $DatentypXmlSchema = null;

    /**
     * Constructor method for DatentypXml
     *
     * @uses DatentypXml::setDatentypXmlSchema()
     */
    public function __construct(?string $datentypXmlSchema = null)
    {
        $this
            ->setDatentypXmlSchema($datentypXmlSchema);
    }

    /**
     * Get DatentypXmlSchema value
     */
    public function getDatentypXmlSchema(): ?string
    {
        return $this->DatentypXmlSchema;
    }

    /**
     * Set DatentypXmlSchema value
     */
    public function setDatentypXmlSchema(?string $datentypXmlSchema = null): self
    {
        $this->DatentypXmlSchema = $datentypXmlSchema;

        return $this;
    }
}
