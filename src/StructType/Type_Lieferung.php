<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Lieferung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Lieferung extends AbstractStructBase
{
    /**
     * The lieferdienst
     * @var \THAG\XKfz\StructType\Type_Lieferdienst|null
     */
    public ?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null;
    /**
     * The zeitpunktDerLieferungGewuenscht
     * @var string|null
     */
    public ?string $zeitpunktDerLieferungGewuenscht = null;
    /**
     * The zeitpunktDerLieferung
     * @var string|null
     */
    public ?string $zeitpunktDerLieferung = null;
    /**
     * The vorgangskomponentenIDLieferadresse
     * @var string|null
     */
    public ?string $vorgangskomponentenIDLieferadresse = null;
    /**
     * The sendung
     * @var \THAG\XKfz\StructType\Type_Sendung|null
     */
    public ?\THAG\XKfz\StructType\Type_Sendung $sendung = null;
    /**
     * Constructor method for Type.Lieferung
     * @uses Type_Lieferung::setLieferdienst()
     * @uses Type_Lieferung::setZeitpunktDerLieferungGewuenscht()
     * @uses Type_Lieferung::setZeitpunktDerLieferung()
     * @uses Type_Lieferung::setVorgangskomponentenIDLieferadresse()
     * @uses Type_Lieferung::setSendung()
     * @param \THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst
     * @param string $zeitpunktDerLieferungGewuenscht
     * @param string $zeitpunktDerLieferung
     * @param string $vorgangskomponentenIDLieferadresse
     * @param \THAG\XKfz\StructType\Type_Sendung $sendung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null, ?string $zeitpunktDerLieferungGewuenscht = null, ?string $zeitpunktDerLieferung = null, ?string $vorgangskomponentenIDLieferadresse = null, ?\THAG\XKfz\StructType\Type_Sendung $sendung = null)
    {
        $this
            ->setLieferdienst($lieferdienst)
            ->setZeitpunktDerLieferungGewuenscht($zeitpunktDerLieferungGewuenscht)
            ->setZeitpunktDerLieferung($zeitpunktDerLieferung)
            ->setVorgangskomponentenIDLieferadresse($vorgangskomponentenIDLieferadresse)
            ->setSendung($sendung);
    }
    /**
     * Get lieferdienst value
     * @return \THAG\XKfz\StructType\Type_Lieferdienst|null
     */
    public function getLieferdienst(): ?\THAG\XKfz\StructType\Type_Lieferdienst
    {
        return $this->lieferdienst;
    }
    /**
     * Set lieferdienst value
     * @param \THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst
     * @return \THAG\XKfz\StructType\Type_Lieferung
     */
    public function setLieferdienst(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null): self
    {
        $this->lieferdienst = $lieferdienst;
        
        return $this;
    }
    /**
     * Get zeitpunktDerLieferungGewuenscht value
     * @return string|null
     */
    public function getZeitpunktDerLieferungGewuenscht(): ?string
    {
        return $this->zeitpunktDerLieferungGewuenscht;
    }
    /**
     * Set zeitpunktDerLieferungGewuenscht value
     * @param string $zeitpunktDerLieferungGewuenscht
     * @return \THAG\XKfz\StructType\Type_Lieferung
     */
    public function setZeitpunktDerLieferungGewuenscht(?string $zeitpunktDerLieferungGewuenscht = null): self
    {
        $this->zeitpunktDerLieferungGewuenscht = $zeitpunktDerLieferungGewuenscht;
        
        return $this;
    }
    /**
     * Get zeitpunktDerLieferung value
     * @return string|null
     */
    public function getZeitpunktDerLieferung(): ?string
    {
        return $this->zeitpunktDerLieferung;
    }
    /**
     * Set zeitpunktDerLieferung value
     * @param string $zeitpunktDerLieferung
     * @return \THAG\XKfz\StructType\Type_Lieferung
     */
    public function setZeitpunktDerLieferung(?string $zeitpunktDerLieferung = null): self
    {
        $this->zeitpunktDerLieferung = $zeitpunktDerLieferung;
        
        return $this;
    }
    /**
     * Get vorgangskomponentenIDLieferadresse value
     * @return string|null
     */
    public function getVorgangskomponentenIDLieferadresse(): ?string
    {
        return $this->vorgangskomponentenIDLieferadresse;
    }
    /**
     * Set vorgangskomponentenIDLieferadresse value
     * @param string $vorgangskomponentenIDLieferadresse
     * @return \THAG\XKfz\StructType\Type_Lieferung
     */
    public function setVorgangskomponentenIDLieferadresse(?string $vorgangskomponentenIDLieferadresse = null): self
    {
        $this->vorgangskomponentenIDLieferadresse = $vorgangskomponentenIDLieferadresse;
        
        return $this;
    }
    /**
     * Get sendung value
     * @return \THAG\XKfz\StructType\Type_Sendung|null
     */
    public function getSendung(): ?\THAG\XKfz\StructType\Type_Sendung
    {
        return $this->sendung;
    }
    /**
     * Set sendung value
     * @param \THAG\XKfz\StructType\Type_Sendung $sendung
     * @return \THAG\XKfz\StructType\Type_Lieferung
     */
    public function setSendung(?\THAG\XKfz\StructType\Type_Sendung $sendung = null): self
    {
        $this->sendung = $sendung;
        
        return $this;
    }
}
