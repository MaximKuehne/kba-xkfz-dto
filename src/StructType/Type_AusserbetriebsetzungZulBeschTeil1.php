<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungZulBeschTeil1 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungZulBeschTeil1 extends AbstractStructBase
{
    /**
     * The HinweisRueckgabeEinziehung
     */
    public ?string $HinweisRueckgabeEinziehung = null;

    /**
     * The DatumRueckgabeEinziehung
     */
    public ?string $DatumRueckgabeEinziehung = null;

    /**
     * Constructor method for Type.AusserbetriebsetzungZulBeschTeil1
     *
     * @uses Type_AusserbetriebsetzungZulBeschTeil1::setHinweisRueckgabeEinziehung()
     * @uses Type_AusserbetriebsetzungZulBeschTeil1::setDatumRueckgabeEinziehung()
     */
    public function __construct(?string $hinweisRueckgabeEinziehung = null, ?string $datumRueckgabeEinziehung = null)
    {
        $this
            ->setHinweisRueckgabeEinziehung($hinweisRueckgabeEinziehung)
            ->setDatumRueckgabeEinziehung($datumRueckgabeEinziehung);
    }

    /**
     * Get HinweisRueckgabeEinziehung value
     */
    public function getHinweisRueckgabeEinziehung(): ?string
    {
        return $this->HinweisRueckgabeEinziehung;
    }

    /**
     * Set HinweisRueckgabeEinziehung value
     */
    public function setHinweisRueckgabeEinziehung(?string $hinweisRueckgabeEinziehung = null): self
    {
        $this->HinweisRueckgabeEinziehung = $hinweisRueckgabeEinziehung;

        return $this;
    }

    /**
     * Get DatumRueckgabeEinziehung value
     */
    public function getDatumRueckgabeEinziehung(): ?string
    {
        return $this->DatumRueckgabeEinziehung;
    }

    /**
     * Set DatumRueckgabeEinziehung value
     */
    public function setDatumRueckgabeEinziehung(?string $datumRueckgabeEinziehung = null): self
    {
        $this->DatumRueckgabeEinziehung = $datumRueckgabeEinziehung;

        return $this;
    }
}
