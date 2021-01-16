<?php

namespace ContainerXuTnKSP;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0daee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1872f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties69bff = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        if ($this->valueHolder0daee === $returnValue = $this->valueHolder0daee->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer1872f = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder0daee) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder0daee = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__get', ['name' => $name], $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        if (isset(self::$publicProperties69bff[$name])) {
            return $this->valueHolder0daee->$name;
        }

        $targetObject = $this->valueHolder0daee;

        $backtrace = debug_backtrace(false, 1);
        trigger_error(
            sprintf(
                'Undefined property: %s::$%s in %s on line %s',
                $realInstanceReflection->getName(),
                $name,
                $backtrace[0]['file'],
                $backtrace[0]['line']
            ),
            \E_USER_NOTICE
        );
        return $targetObject->$name;
    }

    public function __set($name, $value)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $targetObject = $this->valueHolder0daee;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__isset', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $targetObject = $this->valueHolder0daee;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__unset', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $targetObject = $this->valueHolder0daee;

        unset($targetObject->$name);

return;
    }

    public function __clone()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__clone', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $this->valueHolder0daee = clone $this->valueHolder0daee;
    }

    public function __sleep()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__sleep', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return array('valueHolder0daee');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1872f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1872f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'initializeProxy', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0daee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0daee;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
