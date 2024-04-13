<?php
namespace EasyMVC\Api;
interface ScopeConfig
{    
    /**
     * GetValue from default configuration
     *
     * @param  string $path
     * @return mixed
     */
    public function getValue(string $path) : mixed;
}
