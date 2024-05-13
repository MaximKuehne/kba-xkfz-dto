<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StornierungUntersuchungZFZR StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StornierungUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The identifizierungFahrzeug
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null;

    /**
     * The identifizierungUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null;

    /**
     * Constructor method for Type.StornierungUntersuchungZFZR
     *
     * @uses Type_StornierungUntersuchungZFZR::setIdentifizierungFahrzeug()
     * @uses Type_StornierungUntersuchungZFZR::setIdentifizierungUntersuchung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null, ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null)
    {
        $this
            ->setIdentifizierungFahrzeug($identifizierungFahrzeug)
            ->setIdentifizierungUntersuchung($identifizierungUntersuchung);
    }

    /**
     * Get identifizierungFahrzeug value
     */
    public function getIdentifizierungFahrzeug(): ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
    {
        return $this->identifizierungFahrzeug;
    }

    /**
     * Set identifizierungFahrzeug value
     */
    public function setIdentifizierungFahrzeug(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null): self
    {
        $this->identifizierungFahrzeug = $identifizierungFahrzeug;

        return $this;
    }

    /**
     * Get identifizierungUntersuchung value
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
    {
        return $this->identifizierungUntersuchung;
    }

    /**
     * Set identifizierungUntersuchung value
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;

        return $this;
    }
}
