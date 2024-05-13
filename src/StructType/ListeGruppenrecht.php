<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeGruppenrecht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeGruppenrecht extends AbstractStructBase
{
    /**
     * The Gruppenrecht
     */
    public ?\THAG\XKfz\StructType\Gruppenrecht $Gruppenrecht = null;

    /**
     * Constructor method for ListeGruppenrecht
     *
     * @uses ListeGruppenrecht::setGruppenrecht()
     */
    public function __construct(?\THAG\XKfz\StructType\Gruppenrecht $gruppenrecht = null)
    {
        $this
            ->setGruppenrecht($gruppenrecht);
    }

    /**
     * Get Gruppenrecht value
     */
    public function getGruppenrecht(): ?\THAG\XKfz\StructType\Gruppenrecht
    {
        return $this->Gruppenrecht;
    }

    /**
     * Set Gruppenrecht value
     */
    public function setGruppenrecht(?\THAG\XKfz\StructType\Gruppenrecht $gruppenrecht = null): self
    {
        $this->Gruppenrecht = $gruppenrecht;

        return $this;
    }
}
