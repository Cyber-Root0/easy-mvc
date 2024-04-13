<?php
namespace EasyMVC\Config;
use EasyMVC\Api\ScopeConfig;
class DataProvider implements ScopeConfig
{   
    private array $config;    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        private string $fileConfig
    ){
        $jsonConfig = file_get_contents($fileConfig);
        $this->config = json_decode($jsonConfig, true);
    }    
    /**
     * getValue
     *
     * @param  string $path
     * @return mixed
     */
    public function getValue(string $path): mixed{
        return $this->provide($path);
    }    
    /**
     * provide config value
     *
     * @param  string $path
     * @return mixed
     */
    private function provide($path){
        $splitPath = explode(".", $path);
        $current = $this->config;

        foreach($splitPath as $way){
            if (isset($current[$way])){
                $current = $current[$way];
            }else{
                break;
            }
        }
        if ($current === $this->config){
            return false;
        }
        return $current;
    }
}