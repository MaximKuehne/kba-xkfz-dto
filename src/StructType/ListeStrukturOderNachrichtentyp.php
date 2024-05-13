<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeStrukturOderNachrichtentyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeStrukturOderNachrichtentyp extends AbstractStructBase
{
    /**
     * The StrukturOderNachrichtentyp
     * @var string|null
     */
    public ?string $StrukturOderNachrichtentyp = null;
    /**
     * Constructor method for ListeStrukturOderNachrichtentyp
     * @uses ListeStrukturOderNachrichtentyp::setStrukturOderNachrichtentyp()
     * @param string $strukturOderNachrichtentyp
     */
    public function __construct(?string $strukturOderNachrichtentyp = null)
    {
        $this
            ->setStrukturOderNachrichtentyp($strukturOderNachrichtentyp);
    }
    /**
     * Get StrukturOderNachrichtentyp value
     * @return string|null
     */
    public function getStrukturOderNachrichtentyp(): ?string
    {
        return $this->StrukturOderNachrichtentyp;
    }
    /**
     * Set StrukturOderNachrichtentyp value
     * @param string $strukturOderNachrichtentyp
     * @return \THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp
     */
    public function setStrukturOderNachrichtentyp(?string $strukturOderNachrichtentyp = null): self
    {
        $this->StrukturOderNachrichtentyp = $strukturOderNachrichtentyp;
        
        return $this;
    }
}
