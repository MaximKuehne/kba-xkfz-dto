<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNutzerRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNutzerRechercheAntwort extends AbstractStructBase
{
    /**
     * The NutzerRechercheAntwort
     * @var \THAG\XKfz\StructType\NutzerRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\NutzerRechercheAntwort $NutzerRechercheAntwort = null;
    /**
     * Constructor method for ListeNutzerRechercheAntwort
     * @uses ListeNutzerRechercheAntwort::setNutzerRechercheAntwort()
     * @param \THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort
     */
    public function __construct(?\THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort = null)
    {
        $this
            ->setNutzerRechercheAntwort($nutzerRechercheAntwort);
    }
    /**
     * Get NutzerRechercheAntwort value
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort|null
     */
    public function getNutzerRechercheAntwort(): ?\THAG\XKfz\StructType\NutzerRechercheAntwort
    {
        return $this->NutzerRechercheAntwort;
    }
    /**
     * Set NutzerRechercheAntwort value
     * @param \THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort
     * @return \THAG\XKfz\StructType\ListeNutzerRechercheAntwort
     */
    public function setNutzerRechercheAntwort(?\THAG\XKfz\StructType\NutzerRechercheAntwort $nutzerRechercheAntwort = null): self
    {
        $this->NutzerRechercheAntwort = $nutzerRechercheAntwort;
        
        return $this;
    }
}
