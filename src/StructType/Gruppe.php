<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gruppe StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Gruppe extends AbstractStructBase
{
    /**
     * The Gruppennummer
     */
    public ?string $Gruppennummer = null;

    /**
     * The Gruppenname
     */
    public ?string $Gruppenname = null;

    /**
     * The Obergruppennummer
     */
    public ?string $Obergruppennummer = null;

    /**
     * Constructor method for Gruppe
     *
     * @uses Gruppe::setGruppennummer()
     * @uses Gruppe::setGruppenname()
     * @uses Gruppe::setObergruppennummer()
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
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }

    /**
     * Set Gruppennummer value
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;

        return $this;
    }

    /**
     * Get Gruppenname value
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }

    /**
     * Set Gruppenname value
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;

        return $this;
    }

    /**
     * Get Obergruppennummer value
     */
    public function getObergruppennummer(): ?string
    {
        return $this->Obergruppennummer;
    }

    /**
     * Set Obergruppennummer value
     */
    public function setObergruppennummer(?string $obergruppennummer = null): self
    {
        $this->Obergruppennummer = $obergruppennummer;

        return $this;
    }
}
