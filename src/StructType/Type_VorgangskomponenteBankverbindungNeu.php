<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteBankverbindungNeu StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteBankverbindungNeu extends AbstractStructBase
{
    /**
     * The bankverbindungDaten
     */
    public ?\THAG\XKfz\StructType\BankverbindungDaten $bankverbindungDaten = null;

    /**
     * Constructor method for Type.VorgangskomponenteBankverbindungNeu
     *
     * @uses Type_VorgangskomponenteBankverbindungNeu::setBankverbindungDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\BankverbindungDaten $bankverbindungDaten = null)
    {
        $this
            ->setBankverbindungDaten($bankverbindungDaten);
    }

    /**
     * Get bankverbindungDaten value
     */
    public function getBankverbindungDaten(): ?\THAG\XKfz\StructType\BankverbindungDaten
    {
        return $this->bankverbindungDaten;
    }

    /**
     * Set bankverbindungDaten value
     */
    public function setBankverbindungDaten(?\THAG\XKfz\StructType\BankverbindungDaten $bankverbindungDaten = null): self
    {
        $this->bankverbindungDaten = $bankverbindungDaten;

        return $this;
    }
}
