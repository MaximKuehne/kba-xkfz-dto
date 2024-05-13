<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeGruppe StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeGruppe extends AbstractStructBase
{
    /**
     * The Gruppe
     */
    public ?\THAG\XKfz\StructType\Gruppe $Gruppe = null;

    /**
     * Constructor method for ListeGruppe
     *
     * @uses ListeGruppe::setGruppe()
     */
    public function __construct(?\THAG\XKfz\StructType\Gruppe $gruppe = null)
    {
        $this
            ->setGruppe($gruppe);
    }

    /**
     * Get Gruppe value
     */
    public function getGruppe(): ?\THAG\XKfz\StructType\Gruppe
    {
        return $this->Gruppe;
    }

    /**
     * Set Gruppe value
     */
    public function setGruppe(?\THAG\XKfz\StructType\Gruppe $gruppe = null): self
    {
        $this->Gruppe = $gruppe;

        return $this;
    }
}
