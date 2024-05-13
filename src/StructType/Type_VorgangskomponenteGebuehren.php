<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteGebuehren StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteGebuehren extends AbstractStructBase
{
    /**
     * The typ
     * @var \THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ = null;
    /**
     * The listePositionen
     * @var \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen = null;
    /**
     * The summePositionenGesamt
     * @var \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * The artDerZahlung
     * @var \THAG\XKfz\StructType\Code_ArtDerZahlung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung = null;
    /**
     * Constructor method for Type.VorgangskomponenteGebuehren
     * @uses Type_VorgangskomponenteGebuehren::setTyp()
     * @uses Type_VorgangskomponenteGebuehren::setListePositionen()
     * @uses Type_VorgangskomponenteGebuehren::setSummePositionenGesamt()
     * @uses Type_VorgangskomponenteGebuehren::setBemerkung()
     * @uses Type_VorgangskomponenteGebuehren::setArtDerZahlung()
     * @param \THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt
     * @param string $bemerkung
     * @param \THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung
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
     * @return \THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung|null
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param \THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDerGebuehrenaufstellung $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get listePositionen value
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public function getListePositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->listePositionen;
    }
    /**
     * Set listePositionen value
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
     */
    public function setListePositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listePositionen = null): self
    {
        $this->listePositionen = $listePositionen;
        
        return $this;
    }
    /**
     * Get summePositionenGesamt value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public function getSummePositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionenGesamt;
    }
    /**
     * Set summePositionenGesamt value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
     */
    public function setSummePositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;
        
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
    /**
     * Get artDerZahlung value
     * @return \THAG\XKfz\StructType\Code_ArtDerZahlung|null
     */
    public function getArtDerZahlung(): ?\THAG\XKfz\StructType\Code_ArtDerZahlung
    {
        return $this->artDerZahlung;
    }
    /**
     * Set artDerZahlung value
     * @param \THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
     */
    public function setArtDerZahlung(?\THAG\XKfz\StructType\Code_ArtDerZahlung $artDerZahlung = null): self
    {
        $this->artDerZahlung = $artDerZahlung;
        
        return $this;
    }
}
