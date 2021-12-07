<?php

namespace ContainerTtTvyUy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera174e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4179f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28eb5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getConnection', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getMetadataFactory', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getExpressionBuilder', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'beginTransaction', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getCache', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'transactional', array('func' => $func), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'commit', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->commit();
    }

    public function rollback()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'rollback', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getClassMetadata', array('className' => $className), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'createQuery', array('dql' => $dql), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'createNamedQuery', array('name' => $name), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'createQueryBuilder', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'flush', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'clear', array('entityName' => $entityName), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->clear($entityName);
    }

    public function close()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'close', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->close();
    }

    public function persist($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'persist', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'remove', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'refresh', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'detach', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'merge', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'contains', array('entity' => $entity), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getEventManager', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getConfiguration', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'isOpen', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getUnitOfWork', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getProxyFactory', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'initializeObject', array('obj' => $obj), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'getFilters', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'isFiltersStateClean', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'hasFilters', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return $this->valueHoldera174e->hasFilters();
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

        $instance->initializer4179f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera174e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera174e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera174e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__get', ['name' => $name], $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        if (isset(self::$publicProperties28eb5[$name])) {
            return $this->valueHoldera174e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera174e;

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

        $targetObject = $this->valueHoldera174e;
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
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera174e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera174e;
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
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__isset', array('name' => $name), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera174e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera174e;
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
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__unset', array('name' => $name), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera174e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera174e;
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
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__clone', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        $this->valueHoldera174e = clone $this->valueHoldera174e;
    }

    public function __sleep()
    {
        $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, '__sleep', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;

        return array('valueHoldera174e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4179f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4179f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4179f && ($this->initializer4179f->__invoke($valueHoldera174e, $this, 'initializeProxy', array(), $this->initializer4179f) || 1) && $this->valueHoldera174e = $valueHoldera174e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera174e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera174e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
