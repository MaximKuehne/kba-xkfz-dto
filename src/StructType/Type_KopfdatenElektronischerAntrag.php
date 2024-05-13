<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KopfdatenElektronischerAntrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KopfdatenElektronischerAntrag extends AbstractStructBase
{
    /**
     * The artDesGeschaeftsvorfalls
     * @var \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;
    /**
     * The referenzAntragsteller
     * @var \THAG\XKfz\StructType\Type_ReferenzAntragsteller|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller = null;
    /**
     * The listeReferenzAntrag
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null;
    /**
     * The warnungenIgnorieren
     * @var \THAG\XKfz\StructType\Type_WarnungenIgnorieren|null
     */
    public ?\THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren = null;
    /**
     * Constructor method for Type.KopfdatenElektronischerAntrag
     * @uses Type_KopfdatenElektronischerAntrag::setArtDesGeschaeftsvorfalls()
     * @uses Type_KopfdatenElektronischerAntrag::setReferenzAntragsteller()
     * @uses Type_KopfdatenElektronischerAntrag::setListeReferenzAntrag()
     * @uses Type_KopfdatenElektronischerAntrag::setWarnungenIgnorieren()
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls
     * @param \THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag
     * @param \THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null, ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null, ?\THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren = null)
    {
        $this
            ->setArtDesGeschaeftsvorfalls($artDesGeschaeftsvorfalls)
            ->setReferenzAntragsteller($referenzAntragsteller)
            ->setListeReferenzAntrag($listeReferenzAntrag)
            ->setWarnungenIgnorieren($warnungenIgnorieren);
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
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
     */
    public function setArtDesGeschaeftsvorfalls(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null): self
    {
        $this->artDesGeschaeftsvorfalls = $artDesGeschaeftsvorfalls;
        
        return $this;
    }
    /**
     * Get referenzAntragsteller value
     * @return \THAG\XKfz\StructType\Type_ReferenzAntragsteller|null
     */
    public function getReferenzAntragsteller(): ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller
    {
        return $this->referenzAntragsteller;
    }
    /**
     * Set referenzAntragsteller value
     * @param \THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
     */
    public function setReferenzAntragsteller(?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller = null): self
    {
        $this->referenzAntragsteller = $referenzAntragsteller;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
     */
    public function setListeReferenzAntrag(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null): self
    {
        $this->listeReferenzAntrag = $listeReferenzAntrag;
        
        return $this;
    }
    /**
     * Get warnungenIgnorieren value
     * @return \THAG\XKfz\StructType\Type_WarnungenIgnorieren|null
     */
    public function getWarnungenIgnorieren(): ?\THAG\XKfz\StructType\Type_WarnungenIgnorieren
    {
        return $this->warnungenIgnorieren;
    }
    /**
     * Set warnungenIgnorieren value
     * @param \THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
     */
    public function setWarnungenIgnorieren(?\THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren = null): self
    {
        $this->warnungenIgnorieren = $warnungenIgnorieren;
        
        return $this;
    }
}
