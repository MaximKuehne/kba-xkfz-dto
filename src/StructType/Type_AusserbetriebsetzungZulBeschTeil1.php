<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungZulBeschTeil1 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungZulBeschTeil1 extends AbstractStructBase
{
    /**
     * The HinweisRueckgabeEinziehung
     * @var string|null
     */
    public ?string $HinweisRueckgabeEinziehung = null;
    /**
     * The DatumRueckgabeEinziehung
     * @var string|null
     */
    public ?string $DatumRueckgabeEinziehung = null;
    /**
     * Constructor method for Type.AusserbetriebsetzungZulBeschTeil1
     * @uses Type_AusserbetriebsetzungZulBeschTeil1::setHinweisRueckgabeEinziehung()
     * @uses Type_AusserbetriebsetzungZulBeschTeil1::setDatumRueckgabeEinziehung()
     * @param string $hinweisRueckgabeEinziehung
     * @param string $datumRueckgabeEinziehung
     */
    public function __construct(?string $hinweisRueckgabeEinziehung = null, ?string $datumRueckgabeEinziehung = null)
    {
        $this
            ->setHinweisRueckgabeEinziehung($hinweisRueckgabeEinziehung)
            ->setDatumRueckgabeEinziehung($datumRueckgabeEinziehung);
    }
    /**
     * Get HinweisRueckgabeEinziehung value
     * @return string|null
     */
    public function getHinweisRueckgabeEinziehung(): ?string
    {
        return $this->HinweisRueckgabeEinziehung;
    }
    /**
     * Set HinweisRueckgabeEinziehung value
     * @param string $hinweisRueckgabeEinziehung
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1
     */
    public function setHinweisRueckgabeEinziehung(?string $hinweisRueckgabeEinziehung = null): self
    {
        $this->HinweisRueckgabeEinziehung = $hinweisRueckgabeEinziehung;
        
        return $this;
    }
    /**
     * Get DatumRueckgabeEinziehung value
     * @return string|null
     */
    public function getDatumRueckgabeEinziehung(): ?string
    {
        return $this->DatumRueckgabeEinziehung;
    }
    /**
     * Set DatumRueckgabeEinziehung value
     * @param string $datumRueckgabeEinziehung
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1
     */
    public function setDatumRueckgabeEinziehung(?string $datumRueckgabeEinziehung = null): self
    {
        $this->DatumRueckgabeEinziehung = $datumRueckgabeEinziehung;
        
        return $this;
    }
}
