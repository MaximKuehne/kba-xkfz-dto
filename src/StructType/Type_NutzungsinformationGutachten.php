<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NutzungsinformationGutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NutzungsinformationGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The status
     * @var \THAG\XKfz\StructType\Code_StatusGutachten|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null;
    /**
     * The zeitpunktStatus
     * @var string|null
     */
    public ?string $zeitpunktStatus = null;
    /**
     * The verwendendeBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;
    /**
     * Constructor method for Type.NutzungsinformationGutachten
     * @uses Type_NutzungsinformationGutachten::setGutachtennummer()
     * @uses Type_NutzungsinformationGutachten::setStatus()
     * @uses Type_NutzungsinformationGutachten::setZeitpunktStatus()
     * @uses Type_NutzungsinformationGutachten::setVerwendendeBehoerde()
     * @param string $gutachtennummer
     * @param \THAG\XKfz\StructType\Code_StatusGutachten $status
     * @param string $zeitpunktStatus
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null, ?string $zeitpunktStatus = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setStatus($status)
            ->setZeitpunktStatus($zeitpunktStatus)
            ->setVerwendendeBehoerde($verwendendeBehoerde);
    }
    /**
     * Get gutachtennummer value
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_NutzungsinformationGutachten
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Code_StatusGutachten|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusGutachten
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Code_StatusGutachten $status
     * @return \THAG\XKfz\StructType\Type_NutzungsinformationGutachten
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusGutachten $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get zeitpunktStatus value
     * @return string|null
     */
    public function getZeitpunktStatus(): ?string
    {
        return $this->zeitpunktStatus;
    }
    /**
     * Set zeitpunktStatus value
     * @param string $zeitpunktStatus
     * @return \THAG\XKfz\StructType\Type_NutzungsinformationGutachten
     */
    public function setZeitpunktStatus(?string $zeitpunktStatus = null): self
    {
        $this->zeitpunktStatus = $zeitpunktStatus;
        
        return $this;
    }
    /**
     * Get verwendendeBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }
    /**
     * Set verwendendeBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     * @return \THAG\XKfz\StructType\Type_NutzungsinformationGutachten
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;
        
        return $this;
    }
}
