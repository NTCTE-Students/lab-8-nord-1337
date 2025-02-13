<?php

trait Cacheable {
    protected $cache = [];
    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;
    public function getData($id) {
        $cacheKey = "data_{$id}";
        $cachedData = $this->getCache($cacheKey);
        
        if ($cachedData !== null) {
            return $cachedData; 
        }

        $data = $this->fetchDataFromDatabase($id);

        $this->setCache($cacheKey, $data);

        return $data;
    }

    protected function fetchDataFromDatabase($id) {
        return "Data for ID {$id}";
    }
}
class ProductRepository {
    use Cacheable;

    public function getProduct($id) {
        $cacheKey = "product_{$id}";
        $cachedProduct = $this->getCache($cacheKey);
        
        if ($cachedProduct !== null) {
            return $cachedProduct;
        }

        $product = $this->fetchProductFromDatabase($id);

        $this->setCache($cacheKey, $product);

        return $product;
    }

    protected function fetchProductFromDatabase($id) {
        return "Product for ID {$id}"; 
    }
}

