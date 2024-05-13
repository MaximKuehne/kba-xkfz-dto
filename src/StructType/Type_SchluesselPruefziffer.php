<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SchluesselPruefziffer StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SchluesselPruefziffer extends AbstractStructBase
{
    /**
     * The untersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null;

    /**
     * The wirkdatum
     */
    public ?string $wirkdatum = null;

    /**
     * The schluessel
     */
    public ?string $schluessel = null;

    /**
     * The ablaufdatum
     */
    public ?string $ablaufdatum = null;

    /**
     * Constructor method for Type.SchluesselPruefziffer
     *
     * @uses Type_SchluesselPruefziffer::setUntersuchungsstelle()
     * @uses Type_SchluesselPruefziffer::setWirkdatum()
     * @uses Type_SchluesselPruefziffer::setSchluessel()
     * @uses Type_SchluesselPruefziffer::setAblaufdatum()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null, ?string $wirkdatum = null, ?string $schluessel = null, ?string $ablaufdatum = null)
    {
        $this
            ->setUntersuchungsstelle($untersuchungsstelle)
            ->setWirkdatum($wirkdatum)
            ->setSchluessel($schluessel)
            ->setAblaufdatum($ablaufdatum);
    }

    /**
     * Get untersuchungsstelle value
     */
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_Untersuchungsstelle
    {
        return $this->untersuchungsstelle;
    }

    /**
     * Set untersuchungsstelle value
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;

        return $this;
    }

    /**
     * Get wirkdatum value
     */
    public function getWirkdatum(): ?string
    {
        return $this->wirkdatum;
    }

    /**
     * Set wirkdatum value
     */
    public function setWirkdatum(?string $wirkdatum = null): self
    {
        $this->wirkdatum = $wirkdatum;

        return $this;
    }

    /**
     * Get schluessel value
     */
    public function getSchluessel(): ?string
    {
        return $this->schluessel;
    }

    /**
     * Set schluessel value
     */
    public function setSchluessel(?string $schluessel = null): self
    {
        $this->schluessel = $schluessel;

        return $this;
    }

    /**
     * Get ablaufdatum value
     */
    public function getAblaufdatum(): ?string
    {
        return $this->ablaufdatum;
    }

    /**
     * Set ablaufdatum value
     */
    public function setAblaufdatum(?string $ablaufdatum = null): self
    {
        $this->ablaufdatum = $ablaufdatum;

        return $this;
    }
}
