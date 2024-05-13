<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNutzerRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNutzerRechercheAntwort extends AbstractStructBase
{
    /**
     * The NutzerRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\NutzerRechercheAntwort $NutzerRechercheAntwort = null;

    /**
     * Constructor method for ListeNutzerRechercheAntwort
     *
     * @uses ListeNutzerRechercheAntwort::setNutzerRechercheAntwort()
     */
    public function __construct(?\THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort = null)
    {
        $this
            ->setNutzerRechercheAntwort($nutzerRechercheAntwort);
    }

    /**
     * Get NutzerRechercheAntwort value
     */
    public function getNutzerRechercheAntwort(): ?\THAG\XKfz\StructType\NutzerRechercheAntwort
    {
        return $this->NutzerRechercheAntwort;
    }

    /**
     * Set NutzerRechercheAntwort value
     */
    public function setNutzerRechercheAntwort(?\THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort = null): self
    {
        $this->NutzerRechercheAntwort = $nutzerRechercheAntwort;

        return $this;
    }
}
