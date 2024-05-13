<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageHalterauskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageHalterauskunft extends AbstractStructBase
{
    /**
     * The bankverbindungAnfrager
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindungAnfrager = null;

    /**
     * The bankverbindungAnfragerNeu
     */
    public ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungAnfragerNeu = null;

    /**
     * The zahlungAnfrager
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlungAnfrager = null;

    /**
     * Constructor method for Type.AnfrageHalterauskunft
     *
     * @uses Type_AnfrageHalterauskunft::setBankverbindungAnfrager()
     * @uses Type_AnfrageHalterauskunft::setBankverbindungAnfragerNeu()
     * @uses Type_AnfrageHalterauskunft::setZahlungAnfrager()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindungAnfrager = null, ?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungAnfragerNeu = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlungAnfrager = null)
    {
        $this
            ->setBankverbindungAnfrager($bankverbindungAnfrager)
            ->setBankverbindungAnfragerNeu($bankverbindungAnfragerNeu)
            ->setZahlungAnfrager($zahlungAnfrager);
    }

    /**
     * Get bankverbindungAnfrager value
     */
    public function getBankverbindungAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung
    {
        return $this->bankverbindungAnfrager;
    }

    /**
     * Set bankverbindungAnfrager value
     */
    public function setBankverbindungAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindungAnfrager = null): self
    {
        $this->bankverbindungAnfrager = $bankverbindungAnfrager;

        return $this;
    }

    /**
     * Get bankverbindungAnfragerNeu value
     */
    public function getBankverbindungAnfragerNeu(): ?\THAG\XKfz\StructType\Type_Bankverbindung
    {
        return $this->bankverbindungAnfragerNeu;
    }

    /**
     * Set bankverbindungAnfragerNeu value
     */
    public function setBankverbindungAnfragerNeu(?\THAG\XKfz\StructType\Type_Bankverbindung $bankverbindungAnfragerNeu = null): self
    {
        $this->bankverbindungAnfragerNeu = $bankverbindungAnfragerNeu;

        return $this;
    }

    /**
     * Get zahlungAnfrager value
     */
    public function getZahlungAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung
    {
        return $this->zahlungAnfrager;
    }

    /**
     * Set zahlungAnfrager value
     */
    public function setZahlungAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlungAnfrager = null): self
    {
        $this->zahlungAnfrager = $zahlungAnfrager;

        return $this;
    }
}
