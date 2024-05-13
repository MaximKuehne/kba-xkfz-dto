<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.Sammelnachricht.0001 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_Sammelnachricht_0001 extends AbstractStructBase
{
    /**
     * The listeNachrichten
     */
    public ?\THAG\XKfz\StructType\ListeNachrichten $listeNachrichten = null;

    /**
     * Constructor method for Type.Kommunikation.Sammelnachricht.0001
     *
     * @uses Type_Kommunikation_Sammelnachricht_0001::setListeNachrichten()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeNachrichten $listeNachrichten = null)
    {
        $this
            ->setListeNachrichten($listeNachrichten);
    }

    /**
     * Get listeNachrichten value
     */
    public function getListeNachrichten(): ?\THAG\XKfz\StructType\ListeNachrichten
    {
        return $this->listeNachrichten;
    }

    /**
     * Set listeNachrichten value
     */
    public function setListeNachrichten(?\THAG\XKfz\StructType\ListeNachrichten $listeNachrichten = null): self
    {
        $this->listeNachrichten = $listeNachrichten;

        return $this;
    }
}
