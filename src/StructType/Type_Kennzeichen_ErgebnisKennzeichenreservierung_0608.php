<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.ErgebnisKennzeichenreservierung.0608
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisKennzeichenreservierung_0608 extends AbstractStructBase
{
    /**
     * The bestaetigungKennzeichenreservierung
     */
    public ?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null;

    /**
     * Constructor method for Type.Kennzeichen.ErgebnisKennzeichenreservierung.0608
     *
     * @uses Type_Kennzeichen_ErgebnisKennzeichenreservierung_0608::setBestaetigungKennzeichenreservierung()
     */
    public function __construct(?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null)
    {
        $this
            ->setBestaetigungKennzeichenreservierung($bestaetigungKennzeichenreservierung);
    }

    /**
     * Get bestaetigungKennzeichenreservierung value
     */
    public function getBestaetigungKennzeichenreservierung(): ?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung
    {
        return $this->bestaetigungKennzeichenreservierung;
    }

    /**
     * Set bestaetigungKennzeichenreservierung value
     */
    public function setBestaetigungKennzeichenreservierung(?\THAG\XKfz\StructType\BestaetigungKennzeichenreservierung $bestaetigungKennzeichenreservierung = null): self
    {
        $this->bestaetigungKennzeichenreservierung = $bestaetigungKennzeichenreservierung;

        return $this;
    }
}
