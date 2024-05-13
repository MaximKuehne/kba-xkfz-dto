<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gruppe StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Gruppe extends AbstractStructBase
{
    /**
     * The Gruppennummer
     * @var string|null
     */
    public ?string $Gruppennummer = null;
    /**
     * The Gruppenname
     * @var string|null
     */
    public ?string $Gruppenname = null;
    /**
     * The Obergruppennummer
     * @var string|null
     */
    public ?string $Obergruppennummer = null;
    /**
     * Constructor method for Gruppe
     * @uses Gruppe::setGruppennummer()
     * @uses Gruppe::setGruppenname()
     * @uses Gruppe::setObergruppennummer()
     * @param string $gruppennummer
     * @param string $gruppenname
     * @param string $obergruppennummer
     */
    public function __construct(?string $gruppennummer = null, ?string $gruppenname = null, ?string $obergruppennummer = null)
    {
        $this
            ->setGruppennummer($gruppennummer)
            ->setGruppenname($gruppenname)
            ->setObergruppennummer($obergruppennummer);
    }
    /**
     * Get Gruppennummer value
     * @return string|null
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }
    /**
     * Set Gruppennummer value
     * @param string $gruppennummer
     * @return \THAG\XKfz\StructType\Gruppe
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;
        
        return $this;
    }
    /**
     * Get Gruppenname value
     * @return string|null
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }
    /**
     * Set Gruppenname value
     * @param string $gruppenname
     * @return \THAG\XKfz\StructType\Gruppe
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;
        
        return $this;
    }
    /**
     * Get Obergruppennummer value
     * @return string|null
     */
    public function getObergruppennummer(): ?string
    {
        return $this->Obergruppennummer;
    }
    /**
     * Set Obergruppennummer value
     * @param string $obergruppennummer
     * @return \THAG\XKfz\StructType\Gruppe
     */
    public function setObergruppennummer(?string $obergruppennummer = null): self
    {
        $this->Obergruppennummer = $obergruppennummer;
        
        return $this;
    }
}
