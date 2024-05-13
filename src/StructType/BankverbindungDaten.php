<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankverbindungDaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BankverbindungDaten extends AbstractStructBase
{
    /**
     * The bankverbindungKlartext
     */
    public ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null;

    /**
     * The bankverbindungVerschluesselt
     */
    public ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null;

    /**
     * Constructor method for bankverbindungDaten
     *
     * @uses BankverbindungDaten::setBankverbindungKlartext()
     * @uses BankverbindungDaten::setBankverbindungVerschluesselt()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null, ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null)
    {
        $this
            ->setBankverbindungKlartext($bankverbindungKlartext)
            ->setBankverbindungVerschluesselt($bankverbindungVerschluesselt);
    }

    /**
     * Get bankverbindungKlartext value
     */
    public function getBankverbindungKlartext(): ?\THAG\XKfz\StructType\Type_Bankverbindung
    {
        return $this->bankverbindungKlartext;
    }

    /**
     * Set bankverbindungKlartext value
     */
    public function setBankverbindungKlartext(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null): self
    {
        $this->bankverbindungKlartext = $bankverbindungKlartext;

        return $this;
    }

    /**
     * Get bankverbindungVerschluesselt value
     */
    public function getBankverbindungVerschluesselt(): ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData
    {
        return $this->bankverbindungVerschluesselt;
    }

    /**
     * Set bankverbindungVerschluesselt value
     */
    public function setBankverbindungVerschluesselt(?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null): self
    {
        $this->bankverbindungVerschluesselt = $bankverbindungVerschluesselt;

        return $this;
    }
}
