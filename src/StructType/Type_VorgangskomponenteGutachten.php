<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteGutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteGutachten extends AbstractStructBase
{
    /**
     * The prueforganisation
     */
    public ?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null;

    /**
     * The gutachtenDaten
     */
    public ?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null;

    /**
     * Constructor method for Type.VorgangskomponenteGutachten
     *
     * @uses Type_VorgangskomponenteGutachten::setPrueforganisation()
     * @uses Type_VorgangskomponenteGutachten::setGutachtenDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null, ?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null)
    {
        $this
            ->setPrueforganisation($prueforganisation)
            ->setGutachtenDaten($gutachtenDaten);
    }

    /**
     * Get prueforganisation value
     */
    public function getPrueforganisation(): ?\THAG\XKfz\StructType\Code_Prueforganisation
    {
        return $this->prueforganisation;
    }

    /**
     * Set prueforganisation value
     */
    public function setPrueforganisation(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null): self
    {
        $this->prueforganisation = $prueforganisation;

        return $this;
    }

    /**
     * Get gutachtenDaten value
     */
    public function getGutachtenDaten(): ?\THAG\XKfz\StructType\Type_Gutachten
    {
        return $this->gutachtenDaten;
    }

    /**
     * Set gutachtenDaten value
     */
    public function setGutachtenDaten(?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null): self
    {
        $this->gutachtenDaten = $gutachtenDaten;

        return $this;
    }
}
