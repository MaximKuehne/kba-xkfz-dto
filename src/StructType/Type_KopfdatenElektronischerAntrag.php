<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KopfdatenElektronischerAntrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KopfdatenElektronischerAntrag extends AbstractStructBase
{
    /**
     * The artDesGeschaeftsvorfalls
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;

    /**
     * The referenzAntragsteller
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller = null;

    /**
     * The listeReferenzAntrag
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzAntrag = null;

    /**
     * The warnungenIgnorieren
     */
    public ?\THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren = null;

    /**
     * Constructor method for Type.KopfdatenElektronischerAntrag
     *
     * @uses Type_KopfdatenElektronischerAntrag::setArtDesGeschaeftsvorfalls()
     * @uses Type_KopfdatenElektronischerAntrag::setReferenzAntragsteller()
     * @uses Type_KopfdatenElektronischerAntrag::setListeReferenzAntrag()
     * @uses Type_KopfdatenElektronischerAntrag::setWarnungenIgnorieren()
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
     * Get referenzAntragsteller value
     */
    public function getReferenzAntragsteller(): ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller
    {
        return $this->referenzAntragsteller;
    }

    /**
     * Set referenzAntragsteller value
     */
    public function setReferenzAntragsteller(?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzAntragsteller = null): self
    {
        $this->referenzAntragsteller = $referenzAntragsteller;

        return $this;
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
     * Get warnungenIgnorieren value
     */
    public function getWarnungenIgnorieren(): ?\THAG\XKfz\StructType\Type_WarnungenIgnorieren
    {
        return $this->warnungenIgnorieren;
    }

    /**
     * Set warnungenIgnorieren value
     */
    public function setWarnungenIgnorieren(?\THAG\XKfz\StructType\Type_WarnungenIgnorieren $warnungenIgnorieren = null): self
    {
        $this->warnungenIgnorieren = $warnungenIgnorieren;

        return $this;
    }
}
