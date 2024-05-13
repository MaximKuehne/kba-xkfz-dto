<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeVerfuegbarerNachrichten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeVerfuegbarerNachrichten extends AbstractStructBase
{
    /**
     * The nachricht
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null;

    /**
     * Constructor method for Type.ListeVerfuegbarerNachrichten
     *
     * @uses Type_ListeVerfuegbarerNachrichten::setNachricht()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null)
    {
        $this
            ->setNachricht($nachricht);
    }

    /**
     * Get nachricht value
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachricht;
    }

    /**
     * Set nachricht value
     */
    public function setNachricht(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null): self
    {
        $this->nachricht = $nachricht;

        return $this;
    }
}
