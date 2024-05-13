<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteZulassungsentscheidung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteZulassungsentscheidung extends AbstractStructBase
{
    /**
     * The antragsgemaesseEntscheidung
     * @var \THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung|null
     */
    public ?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null;
    /**
     * The ablehnendeEntscheidung
     * @var \THAG\XKfz\StructType\Type_AblehnendeEntscheidung|null
     */
    public ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null;
    /**
     * Constructor method for Type.VorgangskomponenteZulassungsentscheidung
     * @uses Type_VorgangskomponenteZulassungsentscheidung::setAntragsgemaesseEntscheidung()
     * @uses Type_VorgangskomponenteZulassungsentscheidung::setAblehnendeEntscheidung()
     * @param \THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung
     * @param \THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null, ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null)
    {
        $this
            ->setAntragsgemaesseEntscheidung($antragsgemaesseEntscheidung)
            ->setAblehnendeEntscheidung($ablehnendeEntscheidung);
    }
    /**
     * Get antragsgemaesseEntscheidung value
     * @return \THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung|null
     */
    public function getAntragsgemaesseEntscheidung(): ?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung
    {
        return $this->antragsgemaesseEntscheidung;
    }
    /**
     * Set antragsgemaesseEntscheidung value
     * @param \THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung
     */
    public function setAntragsgemaesseEntscheidung(?\THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung $antragsgemaesseEntscheidung = null): self
    {
        $this->antragsgemaesseEntscheidung = $antragsgemaesseEntscheidung;
        
        return $this;
    }
    /**
     * Get ablehnendeEntscheidung value
     * @return \THAG\XKfz\StructType\Type_AblehnendeEntscheidung|null
     */
    public function getAblehnendeEntscheidung(): ?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung
    {
        return $this->ablehnendeEntscheidung;
    }
    /**
     * Set ablehnendeEntscheidung value
     * @param \THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung
     */
    public function setAblehnendeEntscheidung(?\THAG\XKfz\StructType\Type_AblehnendeEntscheidung $ablehnendeEntscheidung = null): self
    {
        $this->ablehnendeEntscheidung = $ablehnendeEntscheidung;
        
        return $this;
    }
}
