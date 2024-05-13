<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteLieferinformationen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteLieferinformationen extends AbstractStructBase
{
    /**
     * The zeitpunktDerBestellung
     */
    public ?string $zeitpunktDerBestellung = null;

    /**
     * The lieferung
     */
    public ?\THAG\XKfz\StructType\Type_Lieferung $lieferung = null;

    /**
     * The unterlagen
     */
    public ?\THAG\XKfz\StructType\Type_Unterlagen $unterlagen = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * Constructor method for Type.VorgangskomponenteLieferinformationen
     *
     * @uses Type_VorgangskomponenteLieferinformationen::setZeitpunktDerBestellung()
     * @uses Type_VorgangskomponenteLieferinformationen::setLieferung()
     * @uses Type_VorgangskomponenteLieferinformationen::setUnterlagen()
     * @uses Type_VorgangskomponenteLieferinformationen::setBemerkung()
     */
    public function __construct(?string $zeitpunktDerBestellung = null, ?\THAG\XKfz\StructType\Type_Lieferung $lieferung = null, ?\THAG\XKfz\StructType\Type_Unterlagen $unterlagen = null, ?string $bemerkung = null)
    {
        $this
            ->setZeitpunktDerBestellung($zeitpunktDerBestellung)
            ->setLieferung($lieferung)
            ->setUnterlagen($unterlagen)
            ->setBemerkung($bemerkung);
    }

    /**
     * Get zeitpunktDerBestellung value
     */
    public function getZeitpunktDerBestellung(): ?string
    {
        return $this->zeitpunktDerBestellung;
    }

    /**
     * Set zeitpunktDerBestellung value
     */
    public function setZeitpunktDerBestellung(?string $zeitpunktDerBestellung = null): self
    {
        $this->zeitpunktDerBestellung = $zeitpunktDerBestellung;

        return $this;
    }

    /**
     * Get lieferung value
     */
    public function getLieferung(): ?\THAG\XKfz\StructType\Type_Lieferung
    {
        return $this->lieferung;
    }

    /**
     * Set lieferung value
     */
    public function setLieferung(?\THAG\XKfz\StructType\Type_Lieferung $lieferung = null): self
    {
        $this->lieferung = $lieferung;

        return $this;
    }

    /**
     * Get unterlagen value
     */
    public function getUnterlagen(): ?\THAG\XKfz\StructType\Type_Unterlagen
    {
        return $this->unterlagen;
    }

    /**
     * Set unterlagen value
     */
    public function setUnterlagen(?\THAG\XKfz\StructType\Type_Unterlagen $unterlagen = null): self
    {
        $this->unterlagen = $unterlagen;

        return $this;
    }

    /**
     * Get bemerkung value
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * Set bemerkung value
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }
}
