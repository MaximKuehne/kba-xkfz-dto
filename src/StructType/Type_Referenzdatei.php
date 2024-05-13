<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Referenzdatei StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Referenzdatei extends AbstractStructBase
{
    /**
     * The kopf
     */
    public ?\THAG\XKfz\StructType\Type_Kopf $kopf = null;

    /**
     * The nutzdaten
     */
    public ?\THAG\XKfz\StructType\Type_Nutzdaten $nutzdaten = null;

    /**
     * Constructor method for Type.Referenzdatei
     *
     * @uses Type_Referenzdatei::setKopf()
     * @uses Type_Referenzdatei::setNutzdaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Kopf $kopf = null, ?\THAG\XKfz\StructType\Type_Nutzdaten $nutzdaten = null)
    {
        $this
            ->setKopf($kopf)
            ->setNutzdaten($nutzdaten);
    }

    /**
     * Get kopf value
     */
    public function getKopf(): ?\THAG\XKfz\StructType\Type_Kopf
    {
        return $this->kopf;
    }

    /**
     * Set kopf value
     */
    public function setKopf(?\THAG\XKfz\StructType\Type_Kopf $kopf = null): self
    {
        $this->kopf = $kopf;

        return $this;
    }

    /**
     * Get nutzdaten value
     */
    public function getNutzdaten(): ?\THAG\XKfz\StructType\Type_Nutzdaten
    {
        return $this->nutzdaten;
    }

    /**
     * Set nutzdaten value
     */
    public function setNutzdaten(?\THAG\XKfz\StructType\Type_Nutzdaten $nutzdaten = null): self
    {
        $this->nutzdaten = $nutzdaten;

        return $this;
    }
}
