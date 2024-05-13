<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteGebuehren StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteGebuehren extends AbstractStructBase
{
    /**
     * The typ
     */
    public ?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ = null;

    /**
     * The listePositionen
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen = null;

    /**
     * The summePositionenGesamt
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * The artDerZahlung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung = null;

    /**
     * Constructor method for Type.VorgangskomponenteGebuehren
     *
     * @uses Type_VorgangskomponenteGebuehren::setTyp()
     * @uses Type_VorgangskomponenteGebuehren::setListePositionen()
     * @uses Type_VorgangskomponenteGebuehren::setSummePositionenGesamt()
     * @uses Type_VorgangskomponenteGebuehren::setBemerkung()
     * @uses Type_VorgangskomponenteGebuehren::setArtDerZahlung()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ = null, ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen = null, ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null, ?string $bemerkung = null, ?\THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung = null)
    {
        $this
            ->setTyp($typ)
            ->setListePositionen($listePositionen)
            ->setSummePositionenGesamt($summePositionenGesamt)
            ->setBemerkung($bemerkung)
            ->setArtDerZahlung($artDerZahlung);
    }

    /**
     * Get typ value
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung
    {
        return $this->typ;
    }

    /**
     * Set typ value
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ = null): self
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get listePositionen value
     */
    public function getListePositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->listePositionen;
    }

    /**
     * Set listePositionen value
     */
    public function setListePositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen = null): self
    {
        $this->listePositionen = $listePositionen;

        return $this;
    }

    /**
     * Get summePositionenGesamt value
     */
    public function getSummePositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionenGesamt;
    }

    /**
     * Set summePositionenGesamt value
     */
    public function setSummePositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;

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

    /**
     * Get artDerZahlung value
     */
    public function getArtDerZahlung(): ?\THAG\XKfz\StructType\Code_ArtDerZahlung
    {
        return $this->artDerZahlung;
    }

    /**
     * Set artDerZahlung value
     */
    public function setArtDerZahlung(?\THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung = null): self
    {
        $this->artDerZahlung = $artDerZahlung;

        return $this;
    }
}
