<?php namespace Tots\EloFilter\Where;

use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Configure
 *
 * @author matiascamiletti
 */
class RawWhere extends AbstractWhere 
{
    protected $type = AbstractWhere::TYPE_RAW;

    /**
     *
     * @var string
     */
    protected $query = '';
    /**
     * 
     *
     * @var array
     */
    protected $values;

    public function __construct($data)
    {
        $this->key = $data['key'];
        $this->query = $data['query'];
        $this->values = $data['values'];
    }
    /**
     * 
     *
     * @param Model $query
     * @return void
     */
    public function run($query)
    {
        $query->whereRaw($this->query, $this->values);
    }
}