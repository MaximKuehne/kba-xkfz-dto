<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenbescheidAntrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenbescheidAntrag extends AbstractStructBase
{
    /**
     * The listeReferenzAntrag
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null;
    /**
     * The datumAntrag
     * @var string|null
     */
    public ?string $datumAntrag = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The listeGebuehrenpositionen
     * @var \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen = null;
    /**
     * The summeGebuehrenpositionenGesamt
     * @var \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt = null;
    /**
     * The artDesGeschaeftsvorfalls
     * @var \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;
    /**
     * The halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $halter = null;
    /**
     * Constructor method for Type.GebuehrenbescheidAntrag
     * @uses Type_GebuehrenbescheidAntrag::setListeReferenzAntrag()
     * @uses Type_GebuehrenbescheidAntrag::setDatumAntrag()
     * @uses Type_GebuehrenbescheidAntrag::setKennzeichen()
     * @uses Type_GebuehrenbescheidAntrag::setListeGebuehrenpositionen()
     * @uses Type_GebuehrenbescheidAntrag::setSummeGebuehrenpositionenGesamt()
     * @uses Type_GebuehrenbescheidAntrag::setArtDesGeschaeftsvorfalls()
     * @uses Type_GebuehrenbescheidAntrag::setHalter()
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag
     * @param string $datumAntrag
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null, ?string $datumAntrag = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen = null, ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt = null, ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null, ?\THAG\XKfz\StructType\HalterZCTyp $halter = null)
    {
        $this
            ->setListeReferenzAntrag($listeReferenzAntrag)
            ->setDatumAntrag($datumAntrag)
            ->setKennzeichen($kennzeichen)
            ->setListeGebuehrenpositionen($listeGebuehrenpositionen)
            ->setSummeGebuehrenpositionenGesamt($summeGebuehrenpositionenGesamt)
            ->setArtDesGeschaeftsvorfalls($artDesGeschaeftsvorfalls)
            ->setHalter($halter);
    }
    /**
     * Get listeReferenzAntrag value
     * @return \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public function getListeReferenzAntrag(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenzAntrag;
    }
    /**
     * Set listeReferenzAntrag value
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setListeReferenzAntrag(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null): self
    {
        $this->listeReferenzAntrag = $listeReferenzAntrag;
        
        return $this;
    }
    /**
     * Get datumAntrag value
     * @return string|null
     */
    public function getDatumAntrag(): ?string
    {
        return $this->datumAntrag;
    }
    /**
     * Set datumAntrag value
     * @param string $datumAntrag
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setDatumAntrag(?string $datumAntrag = null): self
    {
        $this->datumAntrag = $datumAntrag;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get listeGebuehrenpositionen value
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public function getListeGebuehrenpositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->listeGebuehrenpositionen;
    }
    /**
     * Set listeGebuehrenpositionen value
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setListeGebuehrenpositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen = null): self
    {
        $this->listeGebuehrenpositionen = $listeGebuehrenpositionen;
        
        return $this;
    }
    /**
     * Get summeGebuehrenpositionenGesamt value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public function getSummeGebuehrenpositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summeGebuehrenpositionenGesamt;
    }
    /**
     * Set summeGebuehrenpositionenGesamt value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setSummeGebuehrenpositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt = null): self
    {
        $this->summeGebuehrenpositionenGesamt = $summeGebuehrenpositionenGesamt;
        
        return $this;
    }
    /**
     * Get artDesGeschaeftsvorfalls value
     * @return \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public function getArtDesGeschaeftsvorfalls(): ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls
    {
        return $this->artDesGeschaeftsvorfalls;
    }
    /**
     * Set artDesGeschaeftsvorfalls value
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setArtDesGeschaeftsvorfalls(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null): self
    {
        $this->artDesGeschaeftsvorfalls = $artDesGeschaeftsvorfalls;
        
        return $this;
    }
    /**
     * Get halter value
     * @return \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->halter;
    }
    /**
     * Set halter value
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @return \THAG\XKfz\StructType\Type_GebuehrenbescheidAntrag
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->halter = $halter;
        
        return $this;
    }
}
