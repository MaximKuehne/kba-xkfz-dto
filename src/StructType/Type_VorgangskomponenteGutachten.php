<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteGutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteGutachten extends AbstractStructBase
{
    /**
     * The prueforganisation
     * @var \THAG\XKfz\StructType\Code_Prueforganisation|null
     */
    public ?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null;
    /**
     * The gutachtenDaten
     * @var \THAG\XKfz\StructType\Type_Gutachten|null
     */
    public ?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null;
    /**
     * Constructor method for Type.VorgangskomponenteGutachten
     * @uses Type_VorgangskomponenteGutachten::setPrueforganisation()
     * @uses Type_VorgangskomponenteGutachten::setGutachtenDaten()
     * @param \THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation
     * @param \THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null, ?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null)
    {
        $this
            ->setPrueforganisation($prueforganisation)
            ->setGutachtenDaten($gutachtenDaten);
    }
    /**
     * Get prueforganisation value
     * @return \THAG\XKfz\StructType\Code_Prueforganisation|null
     */
    public function getPrueforganisation(): ?\THAG\XKfz\StructType\Code_Prueforganisation
    {
        return $this->prueforganisation;
    }
    /**
     * Set prueforganisation value
     * @param \THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten
     */
    public function setPrueforganisation(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null): self
    {
        $this->prueforganisation = $prueforganisation;
        
        return $this;
    }
    /**
     * Get gutachtenDaten value
     * @return \THAG\XKfz\StructType\Type_Gutachten|null
     */
    public function getGutachtenDaten(): ?\THAG\XKfz\StructType\Type_Gutachten
    {
        return $this->gutachtenDaten;
    }
    /**
     * Set gutachtenDaten value
     * @param \THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten
     */
    public function setGutachtenDaten(?\THAG\XKfz\StructType\Type_Gutachten $gutachtenDaten = null): self
    {
        $this->gutachtenDaten = $gutachtenDaten;
        
        return $this;
    }
}
