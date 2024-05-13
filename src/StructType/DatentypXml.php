<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypXml StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypXml extends AbstractStructBase
{
    /**
     * The DatentypXmlSchema
     * @var string|null
     */
    public ?string $DatentypXmlSchema = null;
    /**
     * Constructor method for DatentypXml
     * @uses DatentypXml::setDatentypXmlSchema()
     * @param string $datentypXmlSchema
     */
    public function __construct(?string $datentypXmlSchema = null)
    {
        $this
            ->setDatentypXmlSchema($datentypXmlSchema);
    }
    /**
     * Get DatentypXmlSchema value
     * @return string|null
     */
    public function getDatentypXmlSchema(): ?string
    {
        return $this->DatentypXmlSchema;
    }
    /**
     * Set DatentypXmlSchema value
     * @param string $datentypXmlSchema
     * @return \THAG\XKfz\StructType\DatentypXml
     */
    public function setDatentypXmlSchema(?string $datentypXmlSchema = null): self
    {
        $this->DatentypXmlSchema = $datentypXmlSchema;
        
        return $this;
    }
}
