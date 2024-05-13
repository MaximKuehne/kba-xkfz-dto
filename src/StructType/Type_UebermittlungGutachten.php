<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.UebermittlungGutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_UebermittlungGutachten extends AbstractStructBase
{
    /**
     * The gutachten
     */
    public ?\THAG\XKfz\StructType\Type_Gutachten $gutachten = null;

    /**
     * The gutachtenPDF
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $gutachtenPDF = null;

    /**
     * Constructor method for Type.UebermittlungGutachten
     *
     * @uses Type_UebermittlungGutachten::setGutachten()
     * @uses Type_UebermittlungGutachten::setGutachtenPDF()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Gutachten $gutachten = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $gutachtenPDF = null)
    {
        $this
            ->setGutachten($gutachten)
            ->setGutachtenPDF($gutachtenPDF);
    }

    /**
     * Get gutachten value
     */
    public function getGutachten(): ?\THAG\XKfz\StructType\Type_Gutachten
    {
        return $this->gutachten;
    }

    /**
     * Set gutachten value
     */
    public function setGutachten(?\THAG\XKfz\StructType\Type_Gutachten $gutachten = null): self
    {
        $this->gutachten = $gutachten;

        return $this;
    }

    /**
     * Get gutachtenPDF value
     */
    public function getGutachtenPDF(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->gutachtenPDF;
    }

    /**
     * Set gutachtenPDF value
     */
    public function setGutachtenPDF(?\THAG\XKfz\StructType\Type_ElektronischesDokument $gutachtenPDF = null): self
    {
        $this->gutachtenPDF = $gutachtenPDF;

        return $this;
    }
}
