<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.ErgebnisKennzeichenZurBearbeitungSperren.0614 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisKennzeichenZurBearbeitungSperren_0614 extends AbstractStructBase
{
    /**
     * The bestaetigungBearbeitungssperre
     */
    public ?\THAG\XKfz\StructType\BestaetigungBearbeitungssperre $bestaetigungBearbeitungssperre = null;

    /**
     * Constructor method for
     * Type.Kennzeichen.ErgebnisKennzeichenZurBearbeitungSperren.0614
     *
     * @uses Type_Kennzeichen_ErgebnisKennzeichenZurBearbeitungSperren_0614::setBestaetigungBearbeitungssperre()
     */
    public function __construct(?\THAG\XKfz\StructType\BestaetigungBearbeitungssperre $bestaetigungBearbeitungssperre = null)
    {
        $this
            ->setBestaetigungBearbeitungssperre($bestaetigungBearbeitungssperre);
    }

    /**
     * Get bestaetigungBearbeitungssperre value
     */
    public function getBestaetigungBearbeitungssperre(): ?\THAG\XKfz\StructType\BestaetigungBearbeitungssperre
    {
        return $this->bestaetigungBearbeitungssperre;
    }

    /**
     * Set bestaetigungBearbeitungssperre value
     */
    public function setBestaetigungBearbeitungssperre(?\THAG\XKfz\StructType\BestaetigungBearbeitungssperre $bestaetigungBearbeitungssperre = null): self
    {
        $this->bestaetigungBearbeitungssperre = $bestaetigungBearbeitungssperre;

        return $this;
    }
}
