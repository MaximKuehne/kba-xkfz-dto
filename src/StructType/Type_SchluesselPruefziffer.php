<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SchluesselPruefziffer StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SchluesselPruefziffer extends AbstractStructBase
{
    /**
     * The untersuchungsstelle
     * @var \THAG\XKfz\StructType\Type_Untersuchungsstelle|null
     */
    public ?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null;
    /**
     * The wirkdatum
     * @var string|null
     */
    public ?string $wirkdatum = null;
    /**
     * The schluessel
     * @var string|null
     */
    public ?string $schluessel = null;
    /**
     * The ablaufdatum
     * @var string|null
     */
    public ?string $ablaufdatum = null;
    /**
     * Constructor method for Type.SchluesselPruefziffer
     * @uses Type_SchluesselPruefziffer::setUntersuchungsstelle()
     * @uses Type_SchluesselPruefziffer::setWirkdatum()
     * @uses Type_SchluesselPruefziffer::setSchluessel()
     * @uses Type_SchluesselPruefziffer::setAblaufdatum()
     * @param \THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle
     * @param string $wirkdatum
     * @param string $schluessel
     * @param string $ablaufdatum
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
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle|null
     */
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_Untersuchungsstelle
    {
        return $this->untersuchungsstelle;
    }
    /**
     * Set untersuchungsstelle value
     * @param \THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_SchluesselPruefziffer
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;
        
        return $this;
    }
    /**
     * Get wirkdatum value
     * @return string|null
     */
    public function getWirkdatum(): ?string
    {
        return $this->wirkdatum;
    }
    /**
     * Set wirkdatum value
     * @param string $wirkdatum
     * @return \THAG\XKfz\StructType\Type_SchluesselPruefziffer
     */
    public function setWirkdatum(?string $wirkdatum = null): self
    {
        $this->wirkdatum = $wirkdatum;
        
        return $this;
    }
    /**
     * Get schluessel value
     * @return string|null
     */
    public function getSchluessel(): ?string
    {
        return $this->schluessel;
    }
    /**
     * Set schluessel value
     * @param string $schluessel
     * @return \THAG\XKfz\StructType\Type_SchluesselPruefziffer
     */
    public function setSchluessel(?string $schluessel = null): self
    {
        $this->schluessel = $schluessel;
        
        return $this;
    }
    /**
     * Get ablaufdatum value
     * @return string|null
     */
    public function getAblaufdatum(): ?string
    {
        return $this->ablaufdatum;
    }
    /**
     * Set ablaufdatum value
     * @param string $ablaufdatum
     * @return \THAG\XKfz\StructType\Type_SchluesselPruefziffer
     */
    public function setAblaufdatum(?string $ablaufdatum = null): self
    {
        $this->ablaufdatum = $ablaufdatum;
        
        return $this;
    }
}
