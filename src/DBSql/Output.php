<?php
/**
 * @author        "Michael Collette" <metrol@metrol.net>
 * @package       Metrol/DBSql
 * @version       1.0
 * @copyright (c) 2016, Michael Collette
 */

namespace Metrol\DBSql;

/**
 * Used to call the buildSQL() method, return that value, and store the
 * completed SQL for diagnostic purposes.
 *
 */
trait Output
{
    /**
     * The last SQL string output generated by this object
     *
     * @var string
     */
    protected $_sqlLastOutput = '';

    /**
     * Produces the output of all the information that was set in the object.
     *
     * @return string Formatted SQL
     */
    public function output()
    {
        $this->_sqlLastOutput = $this->buildSQL();

        return $this->_sqlLastOutput;
    }

    /**
     * There must be a buildSQL() method in the class using this trait.
     *
     * @return string
     */
    abstract protected function buildSQL();
}
