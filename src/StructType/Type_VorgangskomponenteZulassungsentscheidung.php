<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsentscheidung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsentscheidung extends AbstractStructBase
{
    /**
     * The antragsgemaesseEntscheidung
     */
    public ?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null;

    /**
     * The ablehnendeEntscheidung
     */
    public ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null;

    /**
     * Constructor method for Type.VorgangskomponenteZulassungsentscheidung
     *
     * @uses Type_VorgangskomponenteZulassungsentscheidung::setAntragsgemaesseEntscheidung()
     * @uses Type_VorgangskomponenteZulassungsentscheidung::setAblehnendeEntscheidung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null, ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null)
    {
        $this
            ->setAntragsgemaesseEntscheidung($antragsgemaesseEntscheidung)
            ->setAblehnendeEntscheidung($ablehnendeEntscheidung);
    }

    /**
     * Get antragsgemaesseEntscheidung value
     */
    public function getAntragsgemaesseEntscheidung(): ?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung
    {
        return $this->antragsgemaesseEntscheidung;
    }

    /**
     * Set antragsgemaesseEntscheidung value
     */
    public function setAntragsgemaesseEntscheidung(?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null): self
    {
        $this->antragsgemaesseEntscheidung = $antragsgemaesseEntscheidung;

        return $this;
    }

    /**
     * Get ablehnendeEntscheidung value
     */
    public function getAblehnendeEntscheidung(): ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung
    {
        return $this->ablehnendeEntscheidung;
    }

    /**
     * Set ablehnendeEntscheidung value
     */
    public function setAblehnendeEntscheidung(?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null): self
    {
        $this->ablehnendeEntscheidung = $ablehnendeEntscheidung;

        return $this;
    }
}
