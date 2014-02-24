<?php
return array(
    'router' => array(
        'routes' => array(
            'db-api.rest.category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/category[/:category_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Category\\Controller',
                    ),
                ),
            ),
            'db-api.rest.enclosure' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/enclosure[/:enclosure_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Enclosure\\Controller',
                    ),
                ),
            ),
            'db-api.rest.enclosure-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/enclosure_type[/:enclosure_type_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\EnclosureType\\Controller',
                    ),
                ),
            ),
            'db-api.rest.item' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/item[/:item_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Item\\Controller',
                    ),
                ),
            ),
            'db-api.rest.item-to-keyword' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/item_to_keyword[/:item_to_keyword_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\ItemToKeyword\\Controller',
                    ),
                ),
            ),
            'db-api.rest.keyword' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/keyword[/:keyword_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Keyword\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'db-api.rest.category',
            1 => 'db-api.rest.enclosure',
            2 => 'db-api.rest.enclosure-type',
            3 => 'db-api.rest.item',
            4 => 'db-api.rest.item-to-keyword',
            5 => 'db-api.rest.keyword',
        ),
    ),
    'zf-rest' => array(
        'DbApi\\V1\\Rest\\Category\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Category\\CategoryResource',
            'route_name' => 'db-api.rest.category',
            'route_identifier_name' => 'category_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'category',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\Category',
            'collection_class' => 'DbApi\\V1\\Rest\\Category\\CategoryCollection',
        ),
        'DbApi\\V1\\Rest\\Enclosure\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Enclosure\\EnclosureResource',
            'route_name' => 'db-api.rest.enclosure',
            'route_identifier_name' => 'enclosure_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'enclosure',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\Enclosure',
            'collection_class' => 'DbApi\\V1\\Rest\\Enclosure\\EnclosureCollection',
        ),
        'DbApi\\V1\\Rest\\EnclosureType\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeResource',
            'route_name' => 'db-api.rest.enclosure-type',
            'route_identifier_name' => 'enclosure_type_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'enclosure_type',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\EnclosureType',
            'collection_class' => 'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeCollection',
        ),
        'DbApi\\V1\\Rest\\Item\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Item\\ItemResource',
            'route_name' => 'db-api.rest.item',
            'route_identifier_name' => 'item_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'item',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\Item',
            'collection_class' => 'DbApi\\V1\\Rest\\Item\\ItemCollection',
        ),
        'DbApi\\V1\\Rest\\ItemToKeyword\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordResource',
            'route_name' => 'db-api.rest.item-to-keyword',
            'route_identifier_name' => 'item_to_keyword_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'item_to_keyword',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\ItemToKeyword',
            'collection_class' => 'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordCollection',
        ),
        'DbApi\\V1\\Rest\\Keyword\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Keyword\\KeywordResource',
            'route_name' => 'db-api.rest.keyword',
            'route_identifier_name' => 'keyword_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'keyword',
            'resource_http_methods' => array(
                0 => 'GET',
#                1 => 'PATCH',
#                2 => 'PUT',
#                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
#                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => 'limit',
            'entity_class' => 'Db\\Entity\\Keyword',
            'collection_class' => 'DbApi\\V1\\Rest\\Keyword\\KeywordCollection',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'DbApi\\V1\\Rest\\Category\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\Enclosure\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\EnclosureType\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\Item\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\ItemToKeyword\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\Keyword\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'DbApi\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Enclosure\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\EnclosureType\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Item\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\ItemToKeyword\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Keyword\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'DbApi\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Enclosure\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\EnclosureType\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Item\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\ItemToKeyword\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Keyword\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Db\\Entity\\Category' => array(
                'route_identifier_name' => 'category_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.category',
                'hydrator' => 'DbApi\\V1\\Rest\\Category\\CategoryHydrator',
            ),
            'DbApi\\V1\\Rest\\Category\\CategoryCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.category',
                'is_collection' => true,
            ),
            'Db\\Entity\\Enclosure' => array(
                'route_identifier_name' => 'enclosure_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.enclosure',
                'hydrator' => 'DbApi\\V1\\Rest\\Enclosure\\EnclosureHydrator',
            ),
            'DbApi\\V1\\Rest\\Enclosure\\EnclosureCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.enclosure',
                'is_collection' => true,
            ),
            'Db\\Entity\\EnclosureType' => array(
                'route_identifier_name' => 'enclosure_type_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.enclosure-type',
                'hydrator' => 'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeHydrator',
            ),
            'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.enclosure-type',
                'is_collection' => true,
            ),
            'Db\\Entity\\Item' => array(
                'route_identifier_name' => 'item_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.item',
                'hydrator' => 'DbApi\\V1\\Rest\\Item\\ItemHydrator',
            ),
            'DbApi\\V1\\Rest\\Item\\ItemCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.item',
                'is_collection' => true,
            ),
            'Db\\Entity\\ItemToKeyword' => array(
                'route_identifier_name' => 'item_to_keyword_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.item-to-keyword',
                'hydrator' => 'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordHydrator',
            ),
            'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.item-to-keyword',
                'is_collection' => true,
            ),
            'Db\\Entity\\Keyword' => array(
                'route_identifier_name' => 'keyword_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.keyword',
                'hydrator' => 'DbApi\\V1\\Rest\\Keyword\\KeywordHydrator',
            ),
            'DbApi\\V1\\Rest\\Keyword\\KeywordCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.keyword',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-rest-doctrine-hydrator' => array(
        'DbApi\\V1\\Rest\\Category\\CategoryHydrator' => array(
            'entity_class' => 'Db\\Entity\\Category',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'item' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionLink',
            ),
        ),
        'DbApi\\V1\\Rest\\Enclosure\\EnclosureHydrator' => array(
            'entity_class' => 'Db\\Entity\\Enclosure',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
        ),
        'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeHydrator' => array(
            'entity_class' => 'Db\\Entity\\EnclosureType',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'enclosure' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionLink',
            ),
        ),
        'DbApi\\V1\\Rest\\Item\\ItemHydrator' => array(
            'entity_class' => 'Db\\Entity\\Item',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'enclosure' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionLink',
                'itemToKeyword' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionLink',
            ),
        ),
        'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordHydrator' => array(
            'entity_class' => 'Db\\Entity\\ItemToKeyword',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
        ),
        'DbApi\\V1\\Rest\\Keyword\\KeywordHydrator' => array(
            'entity_class' => 'Db\\Entity\\Keyword',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(
                'itemToKeyword' => 'ZF\\Apigility\\Doctrine\\Server\\Hydrator\\Strategy\\CollectionLink',
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'DbApi\\V1\\Rest\\Category\\CategoryResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Category\\CategoryHydrator',
            ),
            'DbApi\\V1\\Rest\\Enclosure\\EnclosureResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Enclosure\\EnclosureHydrator',
            ),
            'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\EnclosureType\\EnclosureTypeHydrator',
            ),
            'DbApi\\V1\\Rest\\Item\\ItemResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Item\\ItemHydrator',
            ),
            'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\ItemToKeyword\\ItemToKeywordHydrator',
            ),
            'DbApi\\V1\\Rest\\Keyword\\KeywordResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Keyword\\KeywordHydrator',
            ),
        ),
    ),
);
