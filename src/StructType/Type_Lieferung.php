<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Lieferung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Lieferung extends AbstractStructBase
{
    /**
     * The lieferdienst
     */
    public ?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null;

    /**
     * The zeitpunktDerLieferungGewuenscht
     */
    public ?string $zeitpunktDerLieferungGewuenscht = null;

    /**
     * The zeitpunktDerLieferung
     */
    public ?string $zeitpunktDerLieferung = null;

    /**
     * The vorgangskomponentenIDLieferadresse
     */
    public ?string $vorgangskomponentenIDLieferadresse = null;

    /**
     * The sendung
     */
    public ?\THAG\XKfz\StructType\Type_Sendung $sendung = null;

    /**
     * Constructor method for Type.Lieferung
     *
     * @uses Type_Lieferung::setLieferdienst()
     * @uses Type_Lieferung::setZeitpunktDerLieferungGewuenscht()
     * @uses Type_Lieferung::setZeitpunktDerLieferung()
     * @uses Type_Lieferung::setVorgangskomponentenIDLieferadresse()
     * @uses Type_Lieferung::setSendung()
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
     */
    public function getLieferdienst(): ?\THAG\XKfz\StructType\Type_Lieferdienst
    {
        return $this->lieferdienst;
    }

    /**
     * Set lieferdienst value
     */
    public function setLieferdienst(?\THAG\XKfz\StructType\Type_Lieferdienst $lieferdienst = null): self
    {
        $this->lieferdienst = $lieferdienst;

        return $this;
    }

    /**
     * Get zeitpunktDerLieferungGewuenscht value
     */
    public function getZeitpunktDerLieferungGewuenscht(): ?string
    {
        return $this->zeitpunktDerLieferungGewuenscht;
    }

    /**
     * Set zeitpunktDerLieferungGewuenscht value
     */
    public function setZeitpunktDerLieferungGewuenscht(?string $zeitpunktDerLieferungGewuenscht = null): self
    {
        $this->zeitpunktDerLieferungGewuenscht = $zeitpunktDerLieferungGewuenscht;

        return $this;
    }

    /**
     * Get zeitpunktDerLieferung value
     */
    public function getZeitpunktDerLieferung(): ?string
    {
        return $this->zeitpunktDerLieferung;
    }

    /**
     * Set zeitpunktDerLieferung value
     */
    public function setZeitpunktDerLieferung(?string $zeitpunktDerLieferung = null): self
    {
        $this->zeitpunktDerLieferung = $zeitpunktDerLieferung;

        return $this;
    }

    /**
     * Get vorgangskomponentenIDLieferadresse value
     */
    public function getVorgangskomponentenIDLieferadresse(): ?string
    {
        return $this->vorgangskomponentenIDLieferadresse;
    }

    /**
     * Set vorgangskomponentenIDLieferadresse value
     */
    public function setVorgangskomponentenIDLieferadresse(?string $vorgangskomponentenIDLieferadresse = null): self
    {
        $this->vorgangskomponentenIDLieferadresse = $vorgangskomponentenIDLieferadresse;

        return $this;
    }

    /**
     * Get sendung value
     */
    public function getSendung(): ?\THAG\XKfz\StructType\Type_Sendung
    {
        return $this->sendung;
    }

    /**
     * Set sendung value
     */
    public function setSendung(?\THAG\XKfz\StructType\Type_Sendung $sendung = null): self
    {
        $this->sendung = $sendung;

        return $this;
    }
}
