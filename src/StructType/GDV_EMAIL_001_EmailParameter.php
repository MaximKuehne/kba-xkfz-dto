<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_EMAIL_001.EmailParameter StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_EMAIL_001_EmailParameter extends AbstractStructBase
{
    /**
     * The Name
     */
    public ?string $Name = null;

    /**
     * The Wert
     */
    public ?string $Wert = null;

    /**
     * Constructor method for GDV_EMAIL_001.EmailParameter
     *
     * @uses GDV_EMAIL_001_EmailParameter::setName()
     * @uses GDV_EMAIL_001_EmailParameter::setWert()
     */
    public function __construct(?string $name = null, ?string $wert = null)
    {
        $this
            ->setName($name)
            ->setWert($wert);
    }

    /**
     * Get Name value
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Wert value
     */
    public function getWert(): ?string
    {
        return $this->Wert;
    }

    /**
     * Set Wert value
     */
    public function setWert(?string $wert = null): self
    {
        $this->Wert = $wert;

        return $this;
    }
}
