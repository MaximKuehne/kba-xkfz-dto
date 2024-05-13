<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.DatumHauptuntersuchung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_DatumHauptuntersuchung extends AbstractStructBase
{
    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * Constructor method for Type.DatumHauptuntersuchung
     *
     * @uses Type_DatumHauptuntersuchung::setNaechsteHauptuntersuchung()
     * @uses Type_DatumHauptuntersuchung::setNaechsteSicherheitspruefung()
     */
    public function __construct(?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null)
    {
        $this
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung);
    }

    /**
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

        return $this;
    }
}
