<?php
namespace Imi\Db\Consts;

use Imi\Enum\BaseEnum;
use Imi\Enum\Annotation\EnumItem;

abstract class LogicalOperator extends BaseEnum
{
    /**
     * @EnumItem
     */
    const AND = 'and';

    /**
     * @EnumItem
     */
    const OR = 'or';

    /**
     * @EnumItem
     */
    const XOR = 'xor';

    /**
     * @EnumItem
     */
    const AND_NOT = 'and not';

    /**
     * @EnumItem
     */
    const OR_NOT = 'or not';

    /**
     * @EnumItem
     */
    const XOR_NOT = 'xor not';
}