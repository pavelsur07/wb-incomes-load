<?php

namespace ContainerXuTnKSP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getConnection', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getMetadataFactory', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getExpressionBuilder', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'beginTransaction', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getCache', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'transactional', array('func' => $func), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->transactional($func);
    }

    public function commit()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'commit', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->commit();
    }

    public function rollback()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'rollback', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getClassMetadata', array('className' => $className), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'createQuery', array('dql' => $dql), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'createNamedQuery', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'createQueryBuilder', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'flush', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'clear', array('entityName' => $entityName), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->clear($entityName);
    }

    public function close()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'close', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->close();
    }

    public function persist($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'persist', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'remove', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'refresh', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'detach', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'merge', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'contains', array('entity' => $entity), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getEventManager', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getConfiguration', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'isOpen', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getUnitOfWork', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getProxyFactory', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'initializeObject', array('obj' => $obj), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'getFilters', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'isFiltersStateClean', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, 'hasFilters', array(), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        return $this->valueHolder0daee->hasFilters();
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

        $instance->initializer1872f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0daee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0daee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0daee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__get', ['name' => $name], $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        if (isset(self::$publicProperties69bff[$name])) {
            return $this->valueHolder0daee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
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

        $targetObject = $this->valueHolder0daee;
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
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0daee;
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
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__isset', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0daee;
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
        $this->initializer1872f && ($this->initializer1872f->__invoke($valueHolder0daee, $this, '__unset', array('name' => $name), $this->initializer1872f) || 1) && $this->valueHolder0daee = $valueHolder0daee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0daee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0daee;
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
