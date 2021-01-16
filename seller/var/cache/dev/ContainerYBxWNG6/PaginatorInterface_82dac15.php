<?php

namespace ContainerYBxWNG6;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4125d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1eecf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc88c3 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        if ($this->valueHolder4125d === $returnValue = $this->valueHolder4125d->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer1eecf = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4125d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4125d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__get', ['name' => $name], $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        if (isset(self::$publicPropertiesc88c3[$name])) {
            return $this->valueHolder4125d->$name;
        }

        $targetObject = $this->valueHolder4125d;

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
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $targetObject = $this->valueHolder4125d;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__isset', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $targetObject = $this->valueHolder4125d;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__unset', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $targetObject = $this->valueHolder4125d;

        unset($targetObject->$name);

return;
    }

    public function __clone()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__clone', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $this->valueHolder4125d = clone $this->valueHolder4125d;
    }

    public function __sleep()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__sleep', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return array('valueHolder4125d');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1eecf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1eecf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'initializeProxy', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4125d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4125d;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
