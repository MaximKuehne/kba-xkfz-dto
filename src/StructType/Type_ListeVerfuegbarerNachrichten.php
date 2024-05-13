<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeVerfuegbarerNachrichten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeVerfuegbarerNachrichten extends AbstractStructBase
{
    /**
     * The nachricht
     * @var \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null;
    /**
     * Constructor method for Type.ListeVerfuegbarerNachrichten
     * @uses Type_ListeVerfuegbarerNachrichten::setNachricht()
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null)
    {
        $this
            ->setNachricht($nachricht);
    }
    /**
     * Get nachricht value
     * @return \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachricht;
    }
    /**
     * Set nachricht value
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht
     * @return \THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten
     */
    public function setNachricht(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachricht = null): self
    {
        $this->nachricht = $nachricht;
        
        return $this;
    }
}
