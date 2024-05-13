<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Reservierungsmerkmal StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Reservierungsmerkmal extends AbstractStructBase
{
    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Code_Reservierungsmerkmal $code = null;

    /**
     * The nichtGelisteterWert
     */
    public ?string $nichtGelisteterWert = null;

    /**
     * Constructor method for Type.Reservierungsmerkmal
     *
     * @uses Type_Reservierungsmerkmal::setCode()
     * @uses Type_Reservierungsmerkmal::setNichtGelisteterWert()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Reservierungsmerkmal $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_Reservierungsmerkmal
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Code_Reservierungsmerkmal $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get nichtGelisteterWert value
     */
    public function getNichtGelisteterWert(): ?string
    {
        return $this->nichtGelisteterWert;
    }

    /**
     * Set nichtGelisteterWert value
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;

        return $this;
    }
}
