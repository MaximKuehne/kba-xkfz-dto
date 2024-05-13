<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankverbindungDaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BankverbindungDaten extends AbstractStructBase
{
    /**
     * The bankverbindungKlartext
     * @var \THAG\XKfz\StructType\Type_Bankverbindung|null
     */
    public ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null;
    /**
     * The bankverbindungVerschluesselt
     * @var \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData|null
     */
    public ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null;
    /**
     * Constructor method for bankverbindungDaten
     * @uses BankverbindungDaten::setBankverbindungKlartext()
     * @uses BankverbindungDaten::setBankverbindungVerschluesselt()
     * @param \THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext
     * @param \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null, ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null)
    {
        $this
            ->setBankverbindungKlartext($bankverbindungKlartext)
            ->setBankverbindungVerschluesselt($bankverbindungVerschluesselt);
    }
    /**
     * Get bankverbindungKlartext value
     * @return \THAG\XKfz\StructType\Type_Bankverbindung|null
     */
    public function getBankverbindungKlartext(): ?\THAG\XKfz\StructType\Type_Bankverbindung
    {
        return $this->bankverbindungKlartext;
    }
    /**
     * Set bankverbindungKlartext value
     * @param \THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext
     * @return \THAG\XKfz\StructType\BankverbindungDaten
     */
    public function setBankverbindungKlartext(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungKlartext = null): self
    {
        $this->bankverbindungKlartext = $bankverbindungKlartext;
        
        return $this;
    }
    /**
     * Get bankverbindungVerschluesselt value
     * @return \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData|null
     */
    public function getBankverbindungVerschluesselt(): ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData
    {
        return $this->bankverbindungVerschluesselt;
    }
    /**
     * Set bankverbindungVerschluesselt value
     * @param \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt
     * @return \THAG\XKfz\StructType\BankverbindungDaten
     */
    public function setBankverbindungVerschluesselt(?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $bankverbindungVerschluesselt = null): self
    {
        $this->bankverbindungVerschluesselt = $bankverbindungVerschluesselt;
        
        return $this;
    }
}
