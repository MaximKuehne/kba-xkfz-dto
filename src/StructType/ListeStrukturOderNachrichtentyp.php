<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeStrukturOderNachrichtentyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeStrukturOderNachrichtentyp extends AbstractStructBase
{
    /**
     * The StrukturOderNachrichtentyp
     */
    public ?string $StrukturOderNachrichtentyp = null;

    /**
     * Constructor method for ListeStrukturOderNachrichtentyp
     *
     * @uses ListeStrukturOderNachrichtentyp::setStrukturOderNachrichtentyp()
     */
    public function __construct(?string $strukturOderNachrichtentyp = null)
    {
        $this
            ->setStrukturOderNachrichtentyp($strukturOderNachrichtentyp);
    }

    /**
     * Get StrukturOderNachrichtentyp value
     */
    public function getStrukturOderNachrichtentyp(): ?string
    {
        return $this->StrukturOderNachrichtentyp;
    }

    /**
     * Set StrukturOderNachrichtentyp value
     */
    public function setStrukturOderNachrichtentyp(?string $strukturOderNachrichtentyp = null): self
    {
        $this->StrukturOderNachrichtentyp = $strukturOderNachrichtentyp;

        return $this;
    }
}
