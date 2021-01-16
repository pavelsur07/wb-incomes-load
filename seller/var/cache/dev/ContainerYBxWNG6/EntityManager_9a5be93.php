<?php

namespace ContainerYBxWNG6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getConnection', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getMetadataFactory', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getExpressionBuilder', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'beginTransaction', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getCache', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'transactional', array('func' => $func), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->transactional($func);
    }

    public function commit()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'commit', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->commit();
    }

    public function rollback()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'rollback', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getClassMetadata', array('className' => $className), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'createQuery', array('dql' => $dql), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'createNamedQuery', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'createQueryBuilder', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'flush', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'clear', array('entityName' => $entityName), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->clear($entityName);
    }

    public function close()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'close', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->close();
    }

    public function persist($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'persist', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'remove', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'refresh', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'detach', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'merge', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'contains', array('entity' => $entity), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getEventManager', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getConfiguration', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'isOpen', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getUnitOfWork', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getProxyFactory', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'initializeObject', array('obj' => $obj), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'getFilters', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'isFiltersStateClean', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, 'hasFilters', array(), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        return $this->valueHolder4125d->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1eecf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4125d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4125d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4125d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__get', ['name' => $name], $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        if (isset(self::$publicPropertiesc88c3[$name])) {
            return $this->valueHolder4125d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
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

        $targetObject = $this->valueHolder4125d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4125d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4125d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__isset', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4125d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4125d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1eecf && ($this->initializer1eecf->__invoke($valueHolder4125d, $this, '__unset', array('name' => $name), $this->initializer1eecf) || 1) && $this->valueHolder4125d = $valueHolder4125d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4125d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4125d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
