<?php

namespace Rido\MDR\Models;

class DnsRecord extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'domein',
        'tld',
        'record_id',
        'host',
        'address',
        'priority',
        'weight',
        'port',
    ];

    /**
     * @param array $attributes
     *
     * @return array
     */
    public function create(array $attributes)
    {
        $this->fill($attributes);

        $result = $this->connection->put('dns_record_add', $this->attributes);

        return $result;
    }

    /**
     * @param array $attributes
     *
     * @return array
     */
    public function update(array $attributes = [])
    {
        $this->fill($attributes);

        $result = $this->connection->put('dns_record_modify', $this->attributes);

        return $result;
    }

    /**
     * @param array $attributes
     *
     * @return array
     */
    public function remove(array $attributes = [])
    {
        $this->fill($attributes);

        $result = $this->connection->put('dns_record_del', $this->attributes);

        return $result;
    }
}
