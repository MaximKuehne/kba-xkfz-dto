<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.ErgebnisKennzeichensuche.0602 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisKennzeichensuche_0602 extends AbstractStructBase
{
    /**
     * The listeFreierKennzeichen
     * @var \THAG\XKfz\StructType\ListeFreierKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\ListeFreierKennzeichen $listeFreierKennzeichen = null;
    /**
     * Constructor method for Type.Kennzeichen.ErgebnisKennzeichensuche.0602
     * @uses Type_Kennzeichen_ErgebnisKennzeichensuche_0602::setListeFreierKennzeichen()
     * @param \THAG\XKfz\StructType\ListeFreierKennzeichen $listeFreierKennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\ListeFreierKennzeichen $listeFreierKennzeichen = null)
    {
        $this
            ->setListeFreierKennzeichen($listeFreierKennzeichen);
    }
    /**
     * Get listeFreierKennzeichen value
     * @return \THAG\XKfz\StructType\ListeFreierKennzeichen|null
     */
    public function getListeFreierKennzeichen(): ?\THAG\XKfz\StructType\ListeFreierKennzeichen
    {
        return $this->listeFreierKennzeichen;
    }
    /**
     * Set listeFreierKennzeichen value
     * @param \THAG\XKfz\StructType\ListeFreierKennzeichen $listeFreierKennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_ErgebnisKennzeichensuche_0602
     */
    public function setListeFreierKennzeichen(?\THAG\XKfz\StructType\ListeFreierKennzeichen $listeFreierKennzeichen = null): self
    {
        $this->listeFreierKennzeichen = $listeFreierKennzeichen;
        
        return $this;
    }
}
