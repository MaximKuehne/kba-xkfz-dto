<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StornierungUntersuchungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StornierungUntersuchungZS extends AbstractStructBase
{
    /**
     * The identifizierungUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS $identifizierungUntersuchung = null;

    /**
     * Constructor method for Type.StornierungUntersuchungZS
     *
     * @uses Type_StornierungUntersuchungZS::setIdentifizierungUntersuchung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS $identifizierungUntersuchung = null)
    {
        $this
            ->setIdentifizierungUntersuchung($identifizierungUntersuchung);
    }

    /**
     * Get identifizierungUntersuchung value
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS
    {
        return $this->identifizierungUntersuchung;
    }

    /**
     * Set identifizierungUntersuchung value
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;

        return $this;
    }
}
