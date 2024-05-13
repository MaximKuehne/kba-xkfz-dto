<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bonitaetsmerkmal StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bonitaetsmerkmal extends AbstractStructBase
{
    /**
     * The BonitaetsmerkmalCode
     * @var string|null
     */
    public ?string $BonitaetsmerkmalCode = null;
    /**
     * The BonitaetsmerkmalName
     * @var string|null
     */
    public ?string $BonitaetsmerkmalName = null;
    /**
     * The BonitaetsmerkmalDaten
     * @var string|null
     */
    public ?string $BonitaetsmerkmalDaten = null;
    /**
     * Constructor method for Bonitaetsmerkmal
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalCode()
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalName()
     * @uses Bonitaetsmerkmal::setBonitaetsmerkmalDaten()
     * @param string $bonitaetsmerkmalCode
     * @param string $bonitaetsmerkmalName
     * @param string $bonitaetsmerkmalDaten
     */
    public function __construct(?string $bonitaetsmerkmalCode = null, ?string $bonitaetsmerkmalName = null, ?string $bonitaetsmerkmalDaten = null)
    {
        $this
            ->setBonitaetsmerkmalCode($bonitaetsmerkmalCode)
            ->setBonitaetsmerkmalName($bonitaetsmerkmalName)
            ->setBonitaetsmerkmalDaten($bonitaetsmerkmalDaten);
    }
    /**
     * Get BonitaetsmerkmalCode value
     * @return string|null
     */
    public function getBonitaetsmerkmalCode(): ?string
    {
        return $this->BonitaetsmerkmalCode;
    }
    /**
     * Set BonitaetsmerkmalCode value
     * @param string $bonitaetsmerkmalCode
     * @return \THAG\XKfz\StructType\Bonitaetsmerkmal
     */
    public function setBonitaetsmerkmalCode(?string $bonitaetsmerkmalCode = null): self
    {
        $this->BonitaetsmerkmalCode = $bonitaetsmerkmalCode;
        
        return $this;
    }
    /**
     * Get BonitaetsmerkmalName value
     * @return string|null
     */
    public function getBonitaetsmerkmalName(): ?string
    {
        return $this->BonitaetsmerkmalName;
    }
    /**
     * Set BonitaetsmerkmalName value
     * @param string $bonitaetsmerkmalName
     * @return \THAG\XKfz\StructType\Bonitaetsmerkmal
     */
    public function setBonitaetsmerkmalName(?string $bonitaetsmerkmalName = null): self
    {
        $this->BonitaetsmerkmalName = $bonitaetsmerkmalName;
        
        return $this;
    }
    /**
     * Get BonitaetsmerkmalDaten value
     * @return string|null
     */
    public function getBonitaetsmerkmalDaten(): ?string
    {
        return $this->BonitaetsmerkmalDaten;
    }
    /**
     * Set BonitaetsmerkmalDaten value
     * @param string $bonitaetsmerkmalDaten
     * @return \THAG\XKfz\StructType\Bonitaetsmerkmal
     */
    public function setBonitaetsmerkmalDaten(?string $bonitaetsmerkmalDaten = null): self
    {
        $this->BonitaetsmerkmalDaten = $bonitaetsmerkmalDaten;
        
        return $this;
    }
}
