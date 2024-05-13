<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenbescheidAntrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenbescheidAntrag extends AbstractStructBase
{
    /**
     * The listeReferenzAntrag
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null;

    /**
     * The datumAntrag
     */
    public ?string $datumAntrag = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The listeGebuehrenpositionen
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen = null;

    /**
     * The summeGebuehrenpositionenGesamt
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt = null;

    /**
     * The artDesGeschaeftsvorfalls
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;

    /**
     * The halter
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $halter = null;

    /**
     * Constructor method for Type.GebuehrenbescheidAntrag
     *
     * @uses Type_GebuehrenbescheidAntrag::setListeReferenzAntrag()
     * @uses Type_GebuehrenbescheidAntrag::setDatumAntrag()
     * @uses Type_GebuehrenbescheidAntrag::setKennzeichen()
     * @uses Type_GebuehrenbescheidAntrag::setListeGebuehrenpositionen()
     * @uses Type_GebuehrenbescheidAntrag::setSummeGebuehrenpositionenGesamt()
     * @uses Type_GebuehrenbescheidAntrag::setArtDesGeschaeftsvorfalls()
     * @uses Type_GebuehrenbescheidAntrag::setHalter()
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
     */
    public function getListeReferenzAntrag(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenzAntrag;
    }

    /**
     * Set listeReferenzAntrag value
     */
    public function setListeReferenzAntrag(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null): self
    {
        $this->listeReferenzAntrag = $listeReferenzAntrag;

        return $this;
    }

    /**
     * Get datumAntrag value
     */
    public function getDatumAntrag(): ?string
    {
        return $this->datumAntrag;
    }

    /**
     * Set datumAntrag value
     */
    public function setDatumAntrag(?string $datumAntrag = null): self
    {
        $this->datumAntrag = $datumAntrag;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get listeGebuehrenpositionen value
     */
    public function getListeGebuehrenpositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->listeGebuehrenpositionen;
    }

    /**
     * Set listeGebuehrenpositionen value
     */
    public function setListeGebuehrenpositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $listeGebuehrenpositionen = null): self
    {
        $this->listeGebuehrenpositionen = $listeGebuehrenpositionen;

        return $this;
    }

    /**
     * Get summeGebuehrenpositionenGesamt value
     */
    public function getSummeGebuehrenpositionenGesamt(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summeGebuehrenpositionenGesamt;
    }

    /**
     * Set summeGebuehrenpositionenGesamt value
     */
    public function setSummeGebuehrenpositionenGesamt(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summeGebuehrenpositionenGesamt = null): self
    {
        $this->summeGebuehrenpositionenGesamt = $summeGebuehrenpositionenGesamt;

        return $this;
    }

    /**
     * Get artDesGeschaeftsvorfalls value
     */
    public function getArtDesGeschaeftsvorfalls(): ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls
    {
        return $this->artDesGeschaeftsvorfalls;
    }

    /**
     * Set artDesGeschaeftsvorfalls value
     */
    public function setArtDesGeschaeftsvorfalls(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null): self
    {
        $this->artDesGeschaeftsvorfalls = $artDesGeschaeftsvorfalls;

        return $this;
    }

    /**
     * Get halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->halter;
    }

    /**
     * Set halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->halter = $halter;

        return $this;
    }
}
