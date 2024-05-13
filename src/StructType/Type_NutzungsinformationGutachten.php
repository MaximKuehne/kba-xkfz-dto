<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NutzungsinformationGutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NutzungsinformationGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Code_StatusGutachten $status = null;

    /**
     * The zeitpunktStatus
     */
    public ?string $zeitpunktStatus = null;

    /**
     * The verwendendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;

    /**
     * Constructor method for Type.NutzungsinformationGutachten
     *
     * @uses Type_NutzungsinformationGutachten::setGutachtennummer()
     * @uses Type_NutzungsinformationGutachten::setStatus()
     * @uses Type_NutzungsinformationGutachten::setZeitpunktStatus()
     * @uses Type_NutzungsinformationGutachten::setVerwendendeBehoerde()
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
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get status value
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusGutachten
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusGutachten $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get zeitpunktStatus value
     */
    public function getZeitpunktStatus(): ?string
    {
        return $this->zeitpunktStatus;
    }

    /**
     * Set zeitpunktStatus value
     */
    public function setZeitpunktStatus(?string $zeitpunktStatus = null): self
    {
        $this->zeitpunktStatus = $zeitpunktStatus;

        return $this;
    }

    /**
     * Get verwendendeBehoerde value
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }

    /**
     * Set verwendendeBehoerde value
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;

        return $this;
    }
}
