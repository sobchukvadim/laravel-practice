<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Facades\Log;

class MysqlHelper
{
    protected const EQ  = '=';

    protected const NEQ = '<>';

    protected const LT  = '<';

    protected const LTE = '<=';

    protected const GT  = '>';

    protected const GTE = '>=';

    /**
     * @param string $table
     * @param string $column
     * @return string
     */
    public static function column(string $table, string $column): string
    {
        return "`{$table}`.`{$column}`";
    }

    /**
     * @param QueryBuilder|EloquentBuilder $builder
     * @return string
     */
    public static function getBuilderSql(QueryBuilder|EloquentBuilder $builder): string
    {
        return vsprintf(str_replace(['?'], ['\'%s\''], $builder->toSql()), $builder->getBindings());
    }
}
