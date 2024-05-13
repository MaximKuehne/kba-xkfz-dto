<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verschluesselteNachricht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VerschluesselteNachricht extends AbstractStructBase
{
    /**
     * The typDerVerschluesseltenNachricht
     * @var \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null;
    /**
     * The verschluesselteDaten
     * @var \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData|null
     */
    public ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null;
    /**
     * Constructor method for verschluesselteNachricht
     * @uses VerschluesselteNachricht::setTypDerVerschluesseltenNachricht()
     * @uses VerschluesselteNachricht::setVerschluesselteDaten()
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht
     * @param \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null, ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null)
    {
        $this
            ->setTypDerVerschluesseltenNachricht($typDerVerschluesseltenNachricht)
            ->setVerschluesselteDaten($verschluesselteDaten);
    }
    /**
     * Get typDerVerschluesseltenNachricht value
     * @return \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public function getTypDerVerschluesseltenNachricht(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->typDerVerschluesseltenNachricht;
    }
    /**
     * Set typDerVerschluesseltenNachricht value
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht
     * @return \THAG\XKfz\StructType\VerschluesselteNachricht
     */
    public function setTypDerVerschluesseltenNachricht(?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null): self
    {
        $this->typDerVerschluesseltenNachricht = $typDerVerschluesseltenNachricht;
        
        return $this;
    }
    /**
     * Get verschluesselteDaten value
     * @return \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData|null
     */
    public function getVerschluesselteDaten(): ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData
    {
        return $this->verschluesselteDaten;
    }
    /**
     * Set verschluesselteDaten value
     * @param \THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten
     * @return \THAG\XKfz\StructType\VerschluesselteNachricht
     */
    public function setVerschluesselteDaten(?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null): self
    {
        $this->verschluesselteDaten = $verschluesselteDaten;
        
        return $this;
    }
}
