<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_EMAIL_001.EmailParameter StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_EMAIL_001_EmailParameter extends AbstractStructBase
{
    /**
     * The Name
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Wert
     * @var string|null
     */
    public ?string $Wert = null;
    /**
     * Constructor method for GDV_EMAIL_001.EmailParameter
     * @uses GDV_EMAIL_001_EmailParameter::setName()
     * @uses GDV_EMAIL_001_EmailParameter::setWert()
     * @param string $name
     * @param string $wert
     */
    public function __construct(?string $name = null, ?string $wert = null)
    {
        $this
            ->setName($name)
            ->setWert($wert);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Wert value
     * @return string|null
     */
    public function getWert(): ?string
    {
        return $this->Wert;
    }
    /**
     * Set Wert value
     * @param string $wert
     * @return \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter
     */
    public function setWert(?string $wert = null): self
    {
        $this->Wert = $wert;
        
        return $this;
    }
}
