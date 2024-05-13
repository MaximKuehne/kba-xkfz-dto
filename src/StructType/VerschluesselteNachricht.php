<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verschluesselteNachricht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VerschluesselteNachricht extends AbstractStructBase
{
    /**
     * The typDerVerschluesseltenNachricht
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null;

    /**
     * The verschluesselteDaten
     */
    public ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null;

    /**
     * Constructor method for verschluesselteNachricht
     *
     * @uses VerschluesselteNachricht::setTypDerVerschluesseltenNachricht()
     * @uses VerschluesselteNachricht::setVerschluesselteDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null, ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null)
    {
        $this
            ->setTypDerVerschluesseltenNachricht($typDerVerschluesseltenNachricht)
            ->setVerschluesselteDaten($verschluesselteDaten);
    }

    /**
     * Get typDerVerschluesseltenNachricht value
     */
    public function getTypDerVerschluesseltenNachricht(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->typDerVerschluesseltenNachricht;
    }

    /**
     * Set typDerVerschluesseltenNachricht value
     */
    public function setTypDerVerschluesseltenNachricht(?\THAG\XKfz\StructType\Code_Nachrichtentyp $typDerVerschluesseltenNachricht = null): self
    {
        $this->typDerVerschluesseltenNachricht = $typDerVerschluesseltenNachricht;

        return $this;
    }

    /**
     * Get verschluesselteDaten value
     */
    public function getVerschluesselteDaten(): ?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData
    {
        return $this->verschluesselteDaten;
    }

    /**
     * Set verschluesselteDaten value
     */
    public function setVerschluesselteDaten(?\THAG\XKfz\StructType\Type_PlatzhalterEncryptedData $verschluesselteDaten = null): self
    {
        $this->verschluesselteDaten = $verschluesselteDaten;

        return $this;
    }
}
