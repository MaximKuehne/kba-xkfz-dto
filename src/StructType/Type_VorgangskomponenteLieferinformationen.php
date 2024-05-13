<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteLieferinformationen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteLieferinformationen extends AbstractStructBase
{
    /**
     * The zeitpunktDerBestellung
     * @var string|null
     */
    public ?string $zeitpunktDerBestellung = null;
    /**
     * The lieferung
     * @var \THAG\XKfz\StructType\Type_Lieferung|null
     */
    public ?\THAG\XKfz\StructType\Type_Lieferung $lieferung = null;
    /**
     * The unterlagen
     * @var \THAG\XKfz\StructType\Type_Unterlagen|null
     */
    public ?\THAG\XKfz\StructType\Type_Unterlagen $unterlagen = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * Constructor method for Type.VorgangskomponenteLieferinformationen
     * @uses Type_VorgangskomponenteLieferinformationen::setZeitpunktDerBestellung()
     * @uses Type_VorgangskomponenteLieferinformationen::setLieferung()
     * @uses Type_VorgangskomponenteLieferinformationen::setUnterlagen()
     * @uses Type_VorgangskomponenteLieferinformationen::setBemerkung()
     * @param string $zeitpunktDerBestellung
     * @param \THAG\XKfz\StructType\Type_Lieferung $lieferung
     * @param \THAG\XKfz\StructType\Type_Unterlagen $unterlagen
     * @param string $bemerkung
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
     * @return string|null
     */
    public function getZeitpunktDerBestellung(): ?string
    {
        return $this->zeitpunktDerBestellung;
    }
    /**
     * Set zeitpunktDerBestellung value
     * @param string $zeitpunktDerBestellung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
     */
    public function setZeitpunktDerBestellung(?string $zeitpunktDerBestellung = null): self
    {
        $this->zeitpunktDerBestellung = $zeitpunktDerBestellung;
        
        return $this;
    }
    /**
     * Get lieferung value
     * @return \THAG\XKfz\StructType\Type_Lieferung|null
     */
    public function getLieferung(): ?\THAG\XKfz\StructType\Type_Lieferung
    {
        return $this->lieferung;
    }
    /**
     * Set lieferung value
     * @param \THAG\XKfz\StructType\Type_Lieferung $lieferung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
     */
    public function setLieferung(?\THAG\XKfz\StructType\Type_Lieferung $lieferung = null): self
    {
        $this->lieferung = $lieferung;
        
        return $this;
    }
    /**
     * Get unterlagen value
     * @return \THAG\XKfz\StructType\Type_Unterlagen|null
     */
    public function getUnterlagen(): ?\THAG\XKfz\StructType\Type_Unterlagen
    {
        return $this->unterlagen;
    }
    /**
     * Set unterlagen value
     * @param \THAG\XKfz\StructType\Type_Unterlagen $unterlagen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
     */
    public function setUnterlagen(?\THAG\XKfz\StructType\Type_Unterlagen $unterlagen = null): self
    {
        $this->unterlagen = $unterlagen;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
}
