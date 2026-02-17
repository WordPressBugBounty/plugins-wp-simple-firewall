<?php

// Functions and constants

namespace {
    if(!function_exists('\\twig_cycle')){
        function twig_cycle(...$args) {
            return \aptowebdeps_pfx_twig_cycle(...func_get_args());
        }
    }
    if(!function_exists('\\twig_random')){
        function twig_random(...$args) {
            return \aptowebdeps_pfx_twig_random(...func_get_args());
        }
    }
    if(!function_exists('\\twig_date_format_filter')){
        function twig_date_format_filter(...$args) {
            return \aptowebdeps_pfx_twig_date_format_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_date_modify_filter')){
        function twig_date_modify_filter(...$args) {
            return \aptowebdeps_pfx_twig_date_modify_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_sprintf')){
        function twig_sprintf(...$args) {
            return \aptowebdeps_pfx_twig_sprintf(...func_get_args());
        }
    }
    if(!function_exists('\\twig_date_converter')){
        function twig_date_converter(...$args) {
            return \aptowebdeps_pfx_twig_date_converter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_replace_filter')){
        function twig_replace_filter(...$args) {
            return \aptowebdeps_pfx_twig_replace_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_round')){
        function twig_round(...$args) {
            return \aptowebdeps_pfx_twig_round(...func_get_args());
        }
    }
    if(!function_exists('\\twig_number_format_filter')){
        function twig_number_format_filter(...$args) {
            return \aptowebdeps_pfx_twig_number_format_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_urlencode_filter')){
        function twig_urlencode_filter(...$args) {
            return \aptowebdeps_pfx_twig_urlencode_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_merge')){
        function twig_array_merge(...$args) {
            return \aptowebdeps_pfx_twig_array_merge(...func_get_args());
        }
    }
    if(!function_exists('\\twig_slice')){
        function twig_slice(...$args) {
            return \aptowebdeps_pfx_twig_slice(...func_get_args());
        }
    }
    if(!function_exists('\\twig_first')){
        function twig_first(...$args) {
            return \aptowebdeps_pfx_twig_first(...func_get_args());
        }
    }
    if(!function_exists('\\twig_last')){
        function twig_last(...$args) {
            return \aptowebdeps_pfx_twig_last(...func_get_args());
        }
    }
    if(!function_exists('\\twig_join_filter')){
        function twig_join_filter(...$args) {
            return \aptowebdeps_pfx_twig_join_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_split_filter')){
        function twig_split_filter(...$args) {
            return \aptowebdeps_pfx_twig_split_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_get_array_keys_filter')){
        function twig_get_array_keys_filter(...$args) {
            return \aptowebdeps_pfx_twig_get_array_keys_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_reverse_filter')){
        function twig_reverse_filter(...$args) {
            return \aptowebdeps_pfx_twig_reverse_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_sort_filter')){
        function twig_sort_filter(...$args) {
            return \aptowebdeps_pfx_twig_sort_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_matches')){
        function twig_matches(...$args) {
            return \aptowebdeps_pfx_twig_matches(...func_get_args());
        }
    }
    if(!function_exists('\\twig_trim_filter')){
        function twig_trim_filter(...$args) {
            return \aptowebdeps_pfx_twig_trim_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_nl2br')){
        function twig_nl2br(...$args) {
            return \aptowebdeps_pfx_twig_nl2br(...func_get_args());
        }
    }
    if(!function_exists('\\twig_spaceless')){
        function twig_spaceless(...$args) {
            return \aptowebdeps_pfx_twig_spaceless(...func_get_args());
        }
    }
    if(!function_exists('\\twig_convert_encoding')){
        function twig_convert_encoding(...$args) {
            return \aptowebdeps_pfx_twig_convert_encoding(...func_get_args());
        }
    }
    if(!function_exists('\\twig_length_filter')){
        function twig_length_filter(...$args) {
            return \aptowebdeps_pfx_twig_length_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_upper_filter')){
        function twig_upper_filter(...$args) {
            return \aptowebdeps_pfx_twig_upper_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_lower_filter')){
        function twig_lower_filter(...$args) {
            return \aptowebdeps_pfx_twig_lower_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_striptags')){
        function twig_striptags(...$args) {
            return \aptowebdeps_pfx_twig_striptags(...func_get_args());
        }
    }
    if(!function_exists('\\twig_title_string_filter')){
        function twig_title_string_filter(...$args) {
            return \aptowebdeps_pfx_twig_title_string_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_capitalize_string_filter')){
        function twig_capitalize_string_filter(...$args) {
            return \aptowebdeps_pfx_twig_capitalize_string_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_test_empty')){
        function twig_test_empty(...$args) {
            return \aptowebdeps_pfx_twig_test_empty(...func_get_args());
        }
    }
    if(!function_exists('\\twig_test_iterable')){
        function twig_test_iterable(...$args) {
            return \aptowebdeps_pfx_twig_test_iterable(...func_get_args());
        }
    }
    if(!function_exists('\\twig_include')){
        function twig_include(...$args) {
            return \aptowebdeps_pfx_twig_include(...func_get_args());
        }
    }
    if(!function_exists('\\twig_source')){
        function twig_source(...$args) {
            return \aptowebdeps_pfx_twig_source(...func_get_args());
        }
    }
    if(!function_exists('\\twig_constant')){
        function twig_constant(...$args) {
            return \aptowebdeps_pfx_twig_constant(...func_get_args());
        }
    }
    if(!function_exists('\\twig_constant_is_defined')){
        function twig_constant_is_defined(...$args) {
            return \aptowebdeps_pfx_twig_constant_is_defined(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_batch')){
        function twig_array_batch(...$args) {
            return \aptowebdeps_pfx_twig_array_batch(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_column')){
        function twig_array_column(...$args) {
            return \aptowebdeps_pfx_twig_array_column(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_filter')){
        function twig_array_filter(...$args) {
            return \aptowebdeps_pfx_twig_array_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_map')){
        function twig_array_map(...$args) {
            return \aptowebdeps_pfx_twig_array_map(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_reduce')){
        function twig_array_reduce(...$args) {
            return \aptowebdeps_pfx_twig_array_reduce(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_some')){
        function twig_array_some(...$args) {
            return \aptowebdeps_pfx_twig_array_some(...func_get_args());
        }
    }
    if(!function_exists('\\twig_array_every')){
        function twig_array_every(...$args) {
            return \aptowebdeps_pfx_twig_array_every(...func_get_args());
        }
    }
    if(!function_exists('\\twig_check_arrow_in_sandbox')){
        function twig_check_arrow_in_sandbox(...$args) {
            return \aptowebdeps_pfx_twig_check_arrow_in_sandbox(...func_get_args());
        }
    }
    if(!function_exists('\\twig_var_dump')){
        function twig_var_dump(...$args) {
            return \aptowebdeps_pfx_twig_var_dump(...func_get_args());
        }
    }
    if(!function_exists('\\twig_raw_filter')){
        function twig_raw_filter(...$args) {
            return \aptowebdeps_pfx_twig_raw_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_escape_filter')){
        function twig_escape_filter(...$args) {
            return \aptowebdeps_pfx_twig_escape_filter(...func_get_args());
        }
    }
    if(!function_exists('\\twig_escape_filter_is_safe')){
        function twig_escape_filter_is_safe(...$args) {
            return \aptowebdeps_pfx_twig_escape_filter_is_safe(...func_get_args());
        }
    }
    if(!function_exists('\\twig_template_from_string')){
        function twig_template_from_string(...$args) {
            return \aptowebdeps_pfx_twig_template_from_string(...func_get_args());
        }
    }

}


namespace AptowebDeps {

    use BrianHenryIE\Strauss\Types\AutoloadAliasInterface;

    /**
     * @see AutoloadAliasInterface
     *
     * @phpstan-type ClassAliasArray array{'type':'class',isabstract:bool,classname:string,namespace?:string,extends:string,implements:array<string>}
     * @phpstan-type InterfaceAliasArray array{'type':'interface',interfacename:string,namespace?:string,extends:array<string>}
     * @phpstan-type TraitAliasArray array{'type':'trait',traitname:string,namespace?:string,use:array<string>}
     * @phpstan-type AutoloadAliasArray array<string,ClassAliasArray|InterfaceAliasArray|TraitAliasArray>
     */
    class AliasAutoloader
    {
        private string $includeFilePath;

        /**
         * @var AutoloadAliasArray
         */
        private array $autoloadAliases = array (
  'CrowdSec\\CapiClient\\Client\\AbstractClient' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractClient',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\CapiClient\\Client',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Client\\AbstractClient',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Client\\CapiHandler\\Curl' => 
  array (
    'type' => 'class',
    'classname' => 'Curl',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Client\\CapiHandler',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Client\\CapiHandler\\Curl',
    'implements' => 
    array (
      0 => 'CrowdSec\\CapiClient\\Client\\CapiHandler\\CapiHandlerInterface',
    ),
  ),
  'CrowdSec\\CapiClient\\Client\\CapiHandler\\FileGetContents' => 
  array (
    'type' => 'class',
    'classname' => 'FileGetContents',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Client\\CapiHandler',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Client\\CapiHandler\\FileGetContents',
    'implements' => 
    array (
      0 => 'CrowdSec\\CapiClient\\Client\\CapiHandler\\CapiHandlerInterface',
    ),
  ),
  'CrowdSec\\CapiClient\\ClientException' => 
  array (
    'type' => 'class',
    'classname' => 'ClientException',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\ClientException',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Configuration\\Signal\\Decisions' => 
  array (
    'type' => 'class',
    'classname' => 'Decisions',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Configuration\\Signal',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Configuration\\Signal\\Decisions',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Configuration\\Signal\\Source' => 
  array (
    'type' => 'class',
    'classname' => 'Source',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Configuration\\Signal',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Configuration\\Signal\\Source',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Configuration\\Watcher' => 
  array (
    'type' => 'class',
    'classname' => 'Watcher',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Configuration',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Configuration\\Watcher',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Constants' => 
  array (
    'type' => 'class',
    'classname' => 'Constants',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Constants',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Signal' => 
  array (
    'type' => 'class',
    'classname' => 'Signal',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Signal',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\CapiClient\\Storage\\FileStorage' => 
  array (
    'type' => 'class',
    'classname' => 'FileStorage',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient\\Storage',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Storage\\FileStorage',
    'implements' => 
    array (
      0 => 'CrowdSec\\CapiClient\\Storage\\StorageInterface',
    ),
  ),
  'CrowdSec\\CapiClient\\Watcher' => 
  array (
    'type' => 'class',
    'classname' => 'Watcher',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\CapiClient',
    'extends' => 'AptowebDeps\\CrowdSec\\CapiClient\\Watcher',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\AbstractClient' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractClient',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\Common\\Client',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\AbstractClient',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\ClientException' => 
  array (
    'type' => 'class',
    'classname' => 'ClientException',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\ClientException',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\HttpMessage\\AbstractMessage' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractMessage',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\Common\\Client\\HttpMessage',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\HttpMessage\\AbstractMessage',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\HttpMessage\\AppSecRequest' => 
  array (
    'type' => 'class',
    'classname' => 'AppSecRequest',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client\\HttpMessage',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\HttpMessage\\AppSecRequest',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\HttpMessage\\Request' => 
  array (
    'type' => 'class',
    'classname' => 'Request',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client\\HttpMessage',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\HttpMessage\\Request',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\HttpMessage\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client\\HttpMessage',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\HttpMessage\\Response',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\RequestHandler\\AbstractRequestHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractRequestHandler',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\Common\\Client\\RequestHandler',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\RequestHandler\\AbstractRequestHandler',
    'implements' => 
    array (
      0 => 'CrowdSec\\Common\\Client\\RequestHandler\\RequestHandlerInterface',
    ),
  ),
  'CrowdSec\\Common\\Client\\RequestHandler\\Curl' => 
  array (
    'type' => 'class',
    'classname' => 'Curl',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client\\RequestHandler',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\RequestHandler\\Curl',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\RequestHandler\\FileGetContents' => 
  array (
    'type' => 'class',
    'classname' => 'FileGetContents',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client\\RequestHandler',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\RequestHandler\\FileGetContents',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Client\\TimeoutException' => 
  array (
    'type' => 'class',
    'classname' => 'TimeoutException',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Client',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Client\\TimeoutException',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Configuration\\AbstractConfiguration' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractConfiguration',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\Common\\Configuration',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Configuration\\AbstractConfiguration',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\ConfigurationInterface',
    ),
  ),
  'CrowdSec\\Common\\Constants' => 
  array (
    'type' => 'class',
    'classname' => 'Constants',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Constants',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Exception' => 
  array (
    'type' => 'class',
    'classname' => 'Exception',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Exception',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Logger\\AbstractLog' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractLog',
    'isabstract' => true,
    'namespace' => 'CrowdSec\\Common\\Logger',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Logger\\AbstractLog',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
    ),
  ),
  'CrowdSec\\Common\\Logger\\ConsoleLog' => 
  array (
    'type' => 'class',
    'classname' => 'ConsoleLog',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Logger',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Logger\\ConsoleLog',
    'implements' => 
    array (
    ),
  ),
  'CrowdSec\\Common\\Logger\\FileLog' => 
  array (
    'type' => 'class',
    'classname' => 'FileLog',
    'isabstract' => false,
    'namespace' => 'CrowdSec\\Common\\Logger',
    'extends' => 'AptowebDeps\\CrowdSec\\Common\\Logger\\FileLog',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Attribute\\AsMonologProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'AsMonologProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Attribute',
    'extends' => 'AptowebDeps\\Monolog\\Attribute\\AsMonologProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\DateTimeImmutable' => 
  array (
    'type' => 'class',
    'classname' => 'DateTimeImmutable',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\DateTimeImmutable',
    'implements' => 
    array (
      0 => 'JsonSerializable',
    ),
  ),
  'Monolog\\ErrorHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorHandler',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\ErrorHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\ChromePHPFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ChromePHPFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\ChromePHPFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\ElasticaFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticaFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\ElasticaFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\ElasticsearchFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticsearchFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\ElasticsearchFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\FlowdockFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'FlowdockFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\FlowdockFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\FluentdFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'FluentdFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\FluentdFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\GelfMessageFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'GelfMessageFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\GelfMessageFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\GoogleCloudLoggingFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'GoogleCloudLoggingFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\GoogleCloudLoggingFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\HtmlFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\HtmlFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\JsonFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'JsonFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\JsonFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LineFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LineFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\LineFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogglyFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogglyFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\LogglyFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogmaticFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogmaticFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\LogmaticFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogstashFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogstashFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\LogstashFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\MongoDBFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDBFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\MongoDBFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\NormalizerFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'NormalizerFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\NormalizerFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\ScalarFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ScalarFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\ScalarFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\WildfireFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'WildfireFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'AptowebDeps\\Monolog\\Formatter\\WildfireFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\AbstractHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\AbstractHandler',
    'implements' => 
    array (
      0 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\AbstractProcessingHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractProcessingHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\AbstractProcessingHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\AbstractSyslogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractSyslogHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\AbstractSyslogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\AmqpHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AmqpHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\AmqpHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\BrowserConsoleHandler' => 
  array (
    'type' => 'class',
    'classname' => 'BrowserConsoleHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\BrowserConsoleHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\BufferHandler' => 
  array (
    'type' => 'class',
    'classname' => 'BufferHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\BufferHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\ChromePHPHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ChromePHPHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ChromePHPHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\CouchDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CouchDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\CouchDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\CubeHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CubeHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\CubeHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\Curl\\Util' => 
  array (
    'type' => 'class',
    'classname' => 'Util',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\Curl',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\Curl\\Util',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DeduplicationHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DeduplicationHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\DeduplicationHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DoctrineCouchDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DoctrineCouchDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\DoctrineCouchDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DynamoDbHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DynamoDbHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\DynamoDbHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ElasticaHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticaHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ElasticaHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ElasticsearchHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticsearchHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ElasticsearchHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ErrorLogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorLogHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ErrorLogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FallbackGroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FallbackGroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FallbackGroupHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FilterHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FilterHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FilterHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'ChannelLevelActivationStrategy',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorLevelActivationStrategy',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossedHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FingersCrossedHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FingersCrossedHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\FirePHPHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FirePHPHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FirePHPHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FleepHookHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FleepHookHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FleepHookHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FlowdockHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FlowdockHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\FlowdockHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\GelfHandler' => 
  array (
    'type' => 'class',
    'classname' => 'GelfHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\GelfHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\GroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'GroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\GroupHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\Handler' => 
  array (
    'type' => 'class',
    'classname' => 'Handler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\Handler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\HandlerInterface',
    ),
  ),
  'Monolog\\Handler\\HandlerWrapper' => 
  array (
    'type' => 'class',
    'classname' => 'HandlerWrapper',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\HandlerWrapper',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\HandlerInterface',
      1 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
      3 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\IFTTTHandler' => 
  array (
    'type' => 'class',
    'classname' => 'IFTTTHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\IFTTTHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\InsightOpsHandler' => 
  array (
    'type' => 'class',
    'classname' => 'InsightOpsHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\InsightOpsHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogEntriesHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogEntriesHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\LogEntriesHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogglyHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogglyHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\LogglyHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogmaticHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogmaticHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\LogmaticHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MailHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MailHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\MailHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MandrillHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MandrillHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\MandrillHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MissingExtensionException' => 
  array (
    'type' => 'class',
    'classname' => 'MissingExtensionException',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\MissingExtensionException',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MongoDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\MongoDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NativeMailerHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NativeMailerHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\NativeMailerHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NewRelicHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NewRelicHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\NewRelicHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NoopHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NoopHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\NoopHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NullHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NullHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\NullHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\OverflowHandler' => 
  array (
    'type' => 'class',
    'classname' => 'OverflowHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\OverflowHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\PHPConsoleHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PHPConsoleHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\PHPConsoleHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ProcessHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ProcessHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ProcessHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\PsrHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PsrHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\PsrHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\PushoverHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PushoverHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\PushoverHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RedisHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RedisHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\RedisHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RedisPubSubHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RedisPubSubHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\RedisPubSubHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RollbarHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RollbarHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\RollbarHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RotatingFileHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RotatingFileHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\RotatingFileHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SamplingHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SamplingHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SamplingHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\SendGridHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SendGridHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SendGridHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\Slack\\SlackRecord' => 
  array (
    'type' => 'class',
    'classname' => 'SlackRecord',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\Slack',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\Slack\\SlackRecord',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SlackHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SlackHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SlackHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SlackWebhookHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SlackWebhookHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SlackWebhookHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SocketHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SocketHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SocketHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SqsHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SqsHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SqsHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\StreamHandler' => 
  array (
    'type' => 'class',
    'classname' => 'StreamHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\StreamHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SwiftMailerHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SwiftMailerHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SwiftMailerHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SymfonyMailerHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SymfonyMailerHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SymfonyMailerHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SyslogHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SyslogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogUdp\\UdpSocket' => 
  array (
    'type' => 'class',
    'classname' => 'UdpSocket',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\SyslogUdp',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SyslogUdp\\UdpSocket',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogUdpHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SyslogUdpHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\SyslogUdpHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\TelegramBotHandler' => 
  array (
    'type' => 'class',
    'classname' => 'TelegramBotHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\TelegramBotHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\TestHandler' => 
  array (
    'type' => 'class',
    'classname' => 'TestHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\TestHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\WhatFailureGroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'WhatFailureGroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\WhatFailureGroupHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ZendMonitorHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ZendMonitorHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'AptowebDeps\\Monolog\\Handler\\ZendMonitorHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Logger' => 
  array (
    'type' => 'class',
    'classname' => 'Logger',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\Logger',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Processor\\GitProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'GitProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\GitProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\HostnameProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'HostnameProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\HostnameProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\IntrospectionProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'IntrospectionProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\IntrospectionProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\MemoryPeakUsageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryPeakUsageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\MemoryPeakUsageProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Processor\\MemoryProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryProcessor',
    'isabstract' => true,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\MemoryProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\MemoryUsageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryUsageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\MemoryUsageProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Processor\\MercurialProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MercurialProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\MercurialProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\ProcessIdProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'ProcessIdProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\ProcessIdProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\PsrLogMessageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'PsrLogMessageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\PsrLogMessageProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\TagProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'TagProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\TagProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\UidProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'UidProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\UidProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Processor\\WebProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'WebProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'AptowebDeps\\Monolog\\Processor\\WebProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Registry',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\Registry',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\SignalHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SignalHandler',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\SignalHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Test\\TestCase' => 
  array (
    'type' => 'class',
    'classname' => 'TestCase',
    'isabstract' => false,
    'namespace' => 'Monolog\\Test',
    'extends' => 'AptowebDeps\\Monolog\\Test\\TestCase',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Utils',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'AptowebDeps\\Monolog\\Utils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\ClassBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'ClassBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\ClassBuilder',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator' => 
  array (
    'type' => 'class',
    'classname' => 'ConfigBuilderGenerator',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGeneratorInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\Method' => 
  array (
    'type' => 'class',
    'classname' => 'Method',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\Method',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\Property' => 
  array (
    'type' => 'class',
    'classname' => 'Property',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\Property',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\ConfigCache' => 
  array (
    'type' => 'class',
    'classname' => 'ConfigCache',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\ConfigCache',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\ConfigCacheFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ConfigCacheFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\ConfigCacheFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\ConfigCacheFactoryInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\ArrayNode' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\ArrayNode',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\PrototypeNodeInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\BaseNode' => 
  array (
    'type' => 'class',
    'classname' => 'BaseNode',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\BaseNode',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\NodeInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\BooleanNode' => 
  array (
    'type' => 'class',
    'classname' => 'BooleanNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\BooleanNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\Builder\\ParentNodeDefinitionInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'BooleanNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\EnumNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'EnumNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\EnumNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\ExprBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'ExprBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\ExprBuilder',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\FloatNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'FloatNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\FloatNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\IntegerNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'IntegerNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\IntegerNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\MergeBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'MergeBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\MergeBuilder',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'NodeBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'NodeDefinition',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\NormalizationBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'NormalizationBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\NormalizationBuilder',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\NumericNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'NumericNodeDefinition',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\NumericNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\ScalarNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'ScalarNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\ScalarNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'TreeBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\ValidationBuilder' => 
  array (
    'type' => 'class',
    'classname' => 'ValidationBuilder',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\ValidationBuilder',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\VariableNodeDefinition' => 
  array (
    'type' => 'class',
    'classname' => 'VariableNodeDefinition',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\VariableNodeDefinition',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper' => 
  array (
    'type' => 'class',
    'classname' => 'XmlReferenceDumper',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Dumper',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper' => 
  array (
    'type' => 'class',
    'classname' => 'YamlReferenceDumper',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Dumper',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\EnumNode' => 
  array (
    'type' => 'class',
    'classname' => 'EnumNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\EnumNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\DuplicateKeyException' => 
  array (
    'type' => 'class',
    'classname' => 'DuplicateKeyException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\DuplicateKeyException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\Exception' => 
  array (
    'type' => 'class',
    'classname' => 'Exception',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\Exception',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException' => 
  array (
    'type' => 'class',
    'classname' => 'ForbiddenOverwriteException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidConfigurationException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidDefinitionException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidTypeException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Exception\\UnsetKeyException' => 
  array (
    'type' => 'class',
    'classname' => 'UnsetKeyException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Exception\\UnsetKeyException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\FloatNode' => 
  array (
    'type' => 'class',
    'classname' => 'FloatNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\FloatNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\IntegerNode' => 
  array (
    'type' => 'class',
    'classname' => 'IntegerNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\IntegerNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\NumericNode' => 
  array (
    'type' => 'class',
    'classname' => 'NumericNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\NumericNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Processor' => 
  array (
    'type' => 'class',
    'classname' => 'Processor',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Processor',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\PrototypedArrayNode' => 
  array (
    'type' => 'class',
    'classname' => 'PrototypedArrayNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\PrototypedArrayNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\ScalarNode' => 
  array (
    'type' => 'class',
    'classname' => 'ScalarNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\ScalarNode',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\VariableNode' => 
  array (
    'type' => 'class',
    'classname' => 'VariableNode',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\VariableNode',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Definition\\PrototypeNodeInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Exception\\FileLoaderImportCircularReferenceException' => 
  array (
    'type' => 'class',
    'classname' => 'FileLoaderImportCircularReferenceException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Exception\\FileLoaderImportCircularReferenceException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'FileLocatorFileNotFoundException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Exception\\LoaderLoadException' => 
  array (
    'type' => 'class',
    'classname' => 'LoaderLoadException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Exception\\LoaderLoadException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\FileLocator' => 
  array (
    'type' => 'class',
    'classname' => 'FileLocator',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\FileLocator',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\FileLocatorInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\DelegatingLoader' => 
  array (
    'type' => 'class',
    'classname' => 'DelegatingLoader',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\DelegatingLoader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\FileLoader' => 
  array (
    'type' => 'class',
    'classname' => 'FileLoader',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\FileLoader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\GlobFileLoader' => 
  array (
    'type' => 'class',
    'classname' => 'GlobFileLoader',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\GlobFileLoader',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\Loader' => 
  array (
    'type' => 'class',
    'classname' => 'Loader',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\Loader',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\LoaderResolver' => 
  array (
    'type' => 'class',
    'classname' => 'LoaderResolver',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\LoaderResolver',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Loader\\LoaderResolverInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\ParamConfigurator' => 
  array (
    'type' => 'class',
    'classname' => 'ParamConfigurator',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\ParamConfigurator',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\ClassExistenceResource' => 
  array (
    'type' => 'class',
    'classname' => 'ClassExistenceResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\ClassExistenceResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\ComposerResource' => 
  array (
    'type' => 'class',
    'classname' => 'ComposerResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\ComposerResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\DirectoryResource' => 
  array (
    'type' => 'class',
    'classname' => 'DirectoryResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\DirectoryResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\FileExistenceResource' => 
  array (
    'type' => 'class',
    'classname' => 'FileExistenceResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\FileExistenceResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\FileResource' => 
  array (
    'type' => 'class',
    'classname' => 'FileResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\FileResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\GlobResource' => 
  array (
    'type' => 'class',
    'classname' => 'GlobResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\GlobResource',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\ReflectionClassResource' => 
  array (
    'type' => 'class',
    'classname' => 'ReflectionClassResource',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\ReflectionClassResource',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker' => 
  array (
    'type' => 'class',
    'classname' => 'SelfCheckingResourceChecker',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\ResourceCheckerInterface',
    ),
  ),
  'Symfony\\Component\\Config\\ResourceCheckerConfigCache' => 
  array (
    'type' => 'class',
    'classname' => 'ResourceCheckerConfigCache',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\ResourceCheckerConfigCache',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\ConfigCacheInterface',
    ),
  ),
  'Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ResourceCheckerConfigCacheFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Config\\ConfigCacheFactoryInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidXmlException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Util\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Util\\Exception\\XmlParsingException' => 
  array (
    'type' => 'class',
    'classname' => 'XmlParsingException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Util\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Util\\Exception\\XmlParsingException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Config\\Util\\XmlUtils' => 
  array (
    'type' => 'class',
    'classname' => 'XmlUtils',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Config\\Util',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Config\\Util\\XmlUtils',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException' => 
  array (
    'type' => 'class',
    'classname' => 'FileNotFoundException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\IOException' => 
  array (
    'type' => 'class',
    'classname' => 'IOException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\IOException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\InvalidArgumentException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\RuntimeException' => 
  array (
    'type' => 'class',
    'classname' => 'RuntimeException',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\RuntimeException',
    'implements' => 
    array (
      0 => 'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Filesystem\\Filesystem' => 
  array (
    'type' => 'class',
    'classname' => 'Filesystem',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Filesystem',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Filesystem\\Path' => 
  array (
    'type' => 'class',
    'classname' => 'Path',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Filesystem',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Path',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\AbstractUid' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractUid',
    'isabstract' => true,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\AbstractUid',
    'implements' => 
    array (
      0 => 'JsonSerializable',
    ),
  ),
  'Symfony\\Component\\Uid\\BinaryUtil' => 
  array (
    'type' => 'class',
    'classname' => 'BinaryUtil',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\BinaryUtil',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Command\\GenerateUlidCommand' => 
  array (
    'type' => 'class',
    'classname' => 'GenerateUlidCommand',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Command',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Command\\GenerateUlidCommand',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Command\\GenerateUuidCommand' => 
  array (
    'type' => 'class',
    'classname' => 'GenerateUuidCommand',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Command',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Command\\GenerateUuidCommand',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Command\\InspectUlidCommand' => 
  array (
    'type' => 'class',
    'classname' => 'InspectUlidCommand',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Command',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Command\\InspectUlidCommand',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Command\\InspectUuidCommand' => 
  array (
    'type' => 'class',
    'classname' => 'InspectUuidCommand',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Command',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Command\\InspectUuidCommand',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Factory\\NameBasedUuidFactory' => 
  array (
    'type' => 'class',
    'classname' => 'NameBasedUuidFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Factory',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Factory\\NameBasedUuidFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Factory\\RandomBasedUuidFactory' => 
  array (
    'type' => 'class',
    'classname' => 'RandomBasedUuidFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Factory',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Factory\\RandomBasedUuidFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Factory\\TimeBasedUuidFactory' => 
  array (
    'type' => 'class',
    'classname' => 'TimeBasedUuidFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Factory',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Factory\\TimeBasedUuidFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Factory\\UlidFactory' => 
  array (
    'type' => 'class',
    'classname' => 'UlidFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Factory',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Factory\\UlidFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Factory\\UuidFactory' => 
  array (
    'type' => 'class',
    'classname' => 'UuidFactory',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid\\Factory',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Factory\\UuidFactory',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\NilUlid' => 
  array (
    'type' => 'class',
    'classname' => 'NilUlid',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\NilUlid',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\NilUuid' => 
  array (
    'type' => 'class',
    'classname' => 'NilUuid',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\NilUuid',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Ulid' => 
  array (
    'type' => 'class',
    'classname' => 'Ulid',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Ulid',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\Uuid' => 
  array (
    'type' => 'class',
    'classname' => 'Uuid',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\Uuid',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\UuidV1' => 
  array (
    'type' => 'class',
    'classname' => 'UuidV1',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\UuidV1',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\UuidV3' => 
  array (
    'type' => 'class',
    'classname' => 'UuidV3',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\UuidV3',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\UuidV4' => 
  array (
    'type' => 'class',
    'classname' => 'UuidV4',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\UuidV4',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\UuidV5' => 
  array (
    'type' => 'class',
    'classname' => 'UuidV5',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\UuidV5',
    'implements' => 
    array (
    ),
  ),
  'Symfony\\Component\\Uid\\UuidV6' => 
  array (
    'type' => 'class',
    'classname' => 'UuidV6',
    'isabstract' => false,
    'namespace' => 'Symfony\\Component\\Uid',
    'extends' => 'AptowebDeps\\Symfony\\Component\\Uid\\UuidV6',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Attribute\\YieldReady' => 
  array (
    'type' => 'class',
    'classname' => 'YieldReady',
    'isabstract' => false,
    'namespace' => 'Twig\\Attribute',
    'extends' => 'AptowebDeps\\Twig\\Attribute\\YieldReady',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Cache\\ChainCache' => 
  array (
    'type' => 'class',
    'classname' => 'ChainCache',
    'isabstract' => false,
    'namespace' => 'Twig\\Cache',
    'extends' => 'AptowebDeps\\Twig\\Cache\\ChainCache',
    'implements' => 
    array (
      0 => 'Twig\\Cache\\CacheInterface',
    ),
  ),
  'Twig\\Cache\\FilesystemCache' => 
  array (
    'type' => 'class',
    'classname' => 'FilesystemCache',
    'isabstract' => false,
    'namespace' => 'Twig\\Cache',
    'extends' => 'AptowebDeps\\Twig\\Cache\\FilesystemCache',
    'implements' => 
    array (
      0 => 'Twig\\Cache\\CacheInterface',
    ),
  ),
  'Twig\\Cache\\NullCache' => 
  array (
    'type' => 'class',
    'classname' => 'NullCache',
    'isabstract' => false,
    'namespace' => 'Twig\\Cache',
    'extends' => 'AptowebDeps\\Twig\\Cache\\NullCache',
    'implements' => 
    array (
      0 => 'Twig\\Cache\\CacheInterface',
    ),
  ),
  'Twig\\Cache\\ReadOnlyFilesystemCache' => 
  array (
    'type' => 'class',
    'classname' => 'ReadOnlyFilesystemCache',
    'isabstract' => false,
    'namespace' => 'Twig\\Cache',
    'extends' => 'AptowebDeps\\Twig\\Cache\\ReadOnlyFilesystemCache',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Compiler' => 
  array (
    'type' => 'class',
    'classname' => 'Compiler',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Compiler',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Environment' => 
  array (
    'type' => 'class',
    'classname' => 'Environment',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Environment',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Error\\Error' => 
  array (
    'type' => 'class',
    'classname' => 'Error',
    'isabstract' => false,
    'namespace' => 'Twig\\Error',
    'extends' => 'AptowebDeps\\Twig\\Error\\Error',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Error\\LoaderError' => 
  array (
    'type' => 'class',
    'classname' => 'LoaderError',
    'isabstract' => false,
    'namespace' => 'Twig\\Error',
    'extends' => 'AptowebDeps\\Twig\\Error\\LoaderError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Error\\RuntimeError' => 
  array (
    'type' => 'class',
    'classname' => 'RuntimeError',
    'isabstract' => false,
    'namespace' => 'Twig\\Error',
    'extends' => 'AptowebDeps\\Twig\\Error\\RuntimeError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Error\\SyntaxError' => 
  array (
    'type' => 'class',
    'classname' => 'SyntaxError',
    'isabstract' => false,
    'namespace' => 'Twig\\Error',
    'extends' => 'AptowebDeps\\Twig\\Error\\SyntaxError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\ExpressionParser' => 
  array (
    'type' => 'class',
    'classname' => 'ExpressionParser',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\ExpressionParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\AbstractExtension' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractExtension',
    'isabstract' => true,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\AbstractExtension',
    'implements' => 
    array (
      0 => 'Twig\\Extension\\ExtensionInterface',
    ),
  ),
  'Twig\\Extension\\CoreExtension' => 
  array (
    'type' => 'class',
    'classname' => 'CoreExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\CoreExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\DebugExtension' => 
  array (
    'type' => 'class',
    'classname' => 'DebugExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\DebugExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\EscaperExtension' => 
  array (
    'type' => 'class',
    'classname' => 'EscaperExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\EscaperExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\OptimizerExtension' => 
  array (
    'type' => 'class',
    'classname' => 'OptimizerExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\OptimizerExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\ProfilerExtension' => 
  array (
    'type' => 'class',
    'classname' => 'ProfilerExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\ProfilerExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\SandboxExtension' => 
  array (
    'type' => 'class',
    'classname' => 'SandboxExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\SandboxExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\StagingExtension' => 
  array (
    'type' => 'class',
    'classname' => 'StagingExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\StagingExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\StringLoaderExtension' => 
  array (
    'type' => 'class',
    'classname' => 'StringLoaderExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\StringLoaderExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Extension\\YieldNotReadyExtension' => 
  array (
    'type' => 'class',
    'classname' => 'YieldNotReadyExtension',
    'isabstract' => false,
    'namespace' => 'Twig\\Extension',
    'extends' => 'AptowebDeps\\Twig\\Extension\\YieldNotReadyExtension',
    'implements' => 
    array (
    ),
  ),
  'Twig\\ExtensionSet' => 
  array (
    'type' => 'class',
    'classname' => 'ExtensionSet',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\ExtensionSet',
    'implements' => 
    array (
    ),
  ),
  'Twig\\FileExtensionEscapingStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'FileExtensionEscapingStrategy',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\FileExtensionEscapingStrategy',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Lexer' => 
  array (
    'type' => 'class',
    'classname' => 'Lexer',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Lexer',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Loader\\ArrayLoader' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayLoader',
    'isabstract' => false,
    'namespace' => 'Twig\\Loader',
    'extends' => 'AptowebDeps\\Twig\\Loader\\ArrayLoader',
    'implements' => 
    array (
      0 => 'Twig\\Loader\\LoaderInterface',
    ),
  ),
  'Twig\\Loader\\ChainLoader' => 
  array (
    'type' => 'class',
    'classname' => 'ChainLoader',
    'isabstract' => false,
    'namespace' => 'Twig\\Loader',
    'extends' => 'AptowebDeps\\Twig\\Loader\\ChainLoader',
    'implements' => 
    array (
      0 => 'Twig\\Loader\\LoaderInterface',
    ),
  ),
  'Twig\\Loader\\FilesystemLoader' => 
  array (
    'type' => 'class',
    'classname' => 'FilesystemLoader',
    'isabstract' => false,
    'namespace' => 'Twig\\Loader',
    'extends' => 'AptowebDeps\\Twig\\Loader\\FilesystemLoader',
    'implements' => 
    array (
      0 => 'Twig\\Loader\\LoaderInterface',
    ),
  ),
  'Twig\\Markup' => 
  array (
    'type' => 'class',
    'classname' => 'Markup',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Markup',
    'implements' => 
    array (
      0 => 'Countable',
      1 => 'JsonSerializable',
    ),
  ),
  'Twig\\Node\\AutoEscapeNode' => 
  array (
    'type' => 'class',
    'classname' => 'AutoEscapeNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\AutoEscapeNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\BlockNode' => 
  array (
    'type' => 'class',
    'classname' => 'BlockNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\BlockNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\BlockReferenceNode' => 
  array (
    'type' => 'class',
    'classname' => 'BlockReferenceNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\BlockReferenceNode',
    'implements' => 
    array (
      0 => 'Twig\\Node\\NodeOutputInterface',
    ),
  ),
  'Twig\\Node\\BodyNode' => 
  array (
    'type' => 'class',
    'classname' => 'BodyNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\BodyNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\CaptureNode' => 
  array (
    'type' => 'class',
    'classname' => 'CaptureNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\CaptureNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\CheckSecurityCallNode' => 
  array (
    'type' => 'class',
    'classname' => 'CheckSecurityCallNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\CheckSecurityCallNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\CheckSecurityNode' => 
  array (
    'type' => 'class',
    'classname' => 'CheckSecurityNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\CheckSecurityNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\CheckToStringNode' => 
  array (
    'type' => 'class',
    'classname' => 'CheckToStringNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\CheckToStringNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\DeprecatedNode' => 
  array (
    'type' => 'class',
    'classname' => 'DeprecatedNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\DeprecatedNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\DoNode' => 
  array (
    'type' => 'class',
    'classname' => 'DoNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\DoNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\EmbedNode' => 
  array (
    'type' => 'class',
    'classname' => 'EmbedNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\EmbedNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\AbstractExpression' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractExpression',
    'isabstract' => true,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\AbstractExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\ArrayExpression' => 
  array (
    'type' => 'class',
    'classname' => 'ArrayExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\ArrayExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\ArrowFunctionExpression' => 
  array (
    'type' => 'class',
    'classname' => 'ArrowFunctionExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\ArrowFunctionExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\AssignNameExpression' => 
  array (
    'type' => 'class',
    'classname' => 'AssignNameExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\AssignNameExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\AbstractBinary' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractBinary',
    'isabstract' => true,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\AbstractBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\AddBinary' => 
  array (
    'type' => 'class',
    'classname' => 'AddBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\AddBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\AndBinary' => 
  array (
    'type' => 'class',
    'classname' => 'AndBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\AndBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\BitwiseAndBinary' => 
  array (
    'type' => 'class',
    'classname' => 'BitwiseAndBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\BitwiseAndBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\BitwiseOrBinary' => 
  array (
    'type' => 'class',
    'classname' => 'BitwiseOrBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\BitwiseOrBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\BitwiseXorBinary' => 
  array (
    'type' => 'class',
    'classname' => 'BitwiseXorBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\BitwiseXorBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\ConcatBinary' => 
  array (
    'type' => 'class',
    'classname' => 'ConcatBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\ConcatBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\DivBinary' => 
  array (
    'type' => 'class',
    'classname' => 'DivBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\DivBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\EndsWithBinary' => 
  array (
    'type' => 'class',
    'classname' => 'EndsWithBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\EndsWithBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\EqualBinary' => 
  array (
    'type' => 'class',
    'classname' => 'EqualBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\EqualBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\FloorDivBinary' => 
  array (
    'type' => 'class',
    'classname' => 'FloorDivBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\FloorDivBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\GreaterBinary' => 
  array (
    'type' => 'class',
    'classname' => 'GreaterBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\GreaterBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\GreaterEqualBinary' => 
  array (
    'type' => 'class',
    'classname' => 'GreaterEqualBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\GreaterEqualBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\HasEveryBinary' => 
  array (
    'type' => 'class',
    'classname' => 'HasEveryBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\HasEveryBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\HasSomeBinary' => 
  array (
    'type' => 'class',
    'classname' => 'HasSomeBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\HasSomeBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\InBinary' => 
  array (
    'type' => 'class',
    'classname' => 'InBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\InBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\LessBinary' => 
  array (
    'type' => 'class',
    'classname' => 'LessBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\LessBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\LessEqualBinary' => 
  array (
    'type' => 'class',
    'classname' => 'LessEqualBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\LessEqualBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\MatchesBinary' => 
  array (
    'type' => 'class',
    'classname' => 'MatchesBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\MatchesBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\ModBinary' => 
  array (
    'type' => 'class',
    'classname' => 'ModBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\ModBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\MulBinary' => 
  array (
    'type' => 'class',
    'classname' => 'MulBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\MulBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\NotEqualBinary' => 
  array (
    'type' => 'class',
    'classname' => 'NotEqualBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\NotEqualBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\NotInBinary' => 
  array (
    'type' => 'class',
    'classname' => 'NotInBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\NotInBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\OrBinary' => 
  array (
    'type' => 'class',
    'classname' => 'OrBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\OrBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\PowerBinary' => 
  array (
    'type' => 'class',
    'classname' => 'PowerBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\PowerBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\RangeBinary' => 
  array (
    'type' => 'class',
    'classname' => 'RangeBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\RangeBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\SpaceshipBinary' => 
  array (
    'type' => 'class',
    'classname' => 'SpaceshipBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\SpaceshipBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\StartsWithBinary' => 
  array (
    'type' => 'class',
    'classname' => 'StartsWithBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\StartsWithBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Binary\\SubBinary' => 
  array (
    'type' => 'class',
    'classname' => 'SubBinary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Binary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Binary\\SubBinary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\BlockReferenceExpression' => 
  array (
    'type' => 'class',
    'classname' => 'BlockReferenceExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\BlockReferenceExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\CallExpression' => 
  array (
    'type' => 'class',
    'classname' => 'CallExpression',
    'isabstract' => true,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\CallExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\ConditionalExpression' => 
  array (
    'type' => 'class',
    'classname' => 'ConditionalExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\ConditionalExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\ConstantExpression' => 
  array (
    'type' => 'class',
    'classname' => 'ConstantExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\ConstantExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Filter\\DefaultFilter' => 
  array (
    'type' => 'class',
    'classname' => 'DefaultFilter',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Filter',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Filter\\DefaultFilter',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Filter\\RawFilter' => 
  array (
    'type' => 'class',
    'classname' => 'RawFilter',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Filter',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Filter\\RawFilter',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\FilterExpression' => 
  array (
    'type' => 'class',
    'classname' => 'FilterExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\FilterExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\FunctionExpression' => 
  array (
    'type' => 'class',
    'classname' => 'FunctionExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\FunctionExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\GetAttrExpression' => 
  array (
    'type' => 'class',
    'classname' => 'GetAttrExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\GetAttrExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\InlinePrint' => 
  array (
    'type' => 'class',
    'classname' => 'InlinePrint',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\InlinePrint',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\MethodCallExpression' => 
  array (
    'type' => 'class',
    'classname' => 'MethodCallExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\MethodCallExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\NameExpression' => 
  array (
    'type' => 'class',
    'classname' => 'NameExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\NameExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\NullCoalesceExpression' => 
  array (
    'type' => 'class',
    'classname' => 'NullCoalesceExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\NullCoalesceExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\ParentExpression' => 
  array (
    'type' => 'class',
    'classname' => 'ParentExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\ParentExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\TempNameExpression' => 
  array (
    'type' => 'class',
    'classname' => 'TempNameExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\TempNameExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\ConstantTest' => 
  array (
    'type' => 'class',
    'classname' => 'ConstantTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\ConstantTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\DefinedTest' => 
  array (
    'type' => 'class',
    'classname' => 'DefinedTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\DefinedTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\DivisiblebyTest' => 
  array (
    'type' => 'class',
    'classname' => 'DivisiblebyTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\DivisiblebyTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\EvenTest' => 
  array (
    'type' => 'class',
    'classname' => 'EvenTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\EvenTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\NullTest' => 
  array (
    'type' => 'class',
    'classname' => 'NullTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\NullTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\OddTest' => 
  array (
    'type' => 'class',
    'classname' => 'OddTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\OddTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Test\\SameasTest' => 
  array (
    'type' => 'class',
    'classname' => 'SameasTest',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Test',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Test\\SameasTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\TestExpression' => 
  array (
    'type' => 'class',
    'classname' => 'TestExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\TestExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Unary\\AbstractUnary' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractUnary',
    'isabstract' => true,
    'namespace' => 'Twig\\Node\\Expression\\Unary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Unary\\AbstractUnary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Unary\\NegUnary' => 
  array (
    'type' => 'class',
    'classname' => 'NegUnary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Unary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Unary\\NegUnary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Unary\\NotUnary' => 
  array (
    'type' => 'class',
    'classname' => 'NotUnary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Unary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Unary\\NotUnary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\Unary\\PosUnary' => 
  array (
    'type' => 'class',
    'classname' => 'PosUnary',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression\\Unary',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\Unary\\PosUnary',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Expression\\VariadicExpression' => 
  array (
    'type' => 'class',
    'classname' => 'VariadicExpression',
    'isabstract' => false,
    'namespace' => 'Twig\\Node\\Expression',
    'extends' => 'AptowebDeps\\Twig\\Node\\Expression\\VariadicExpression',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\FlushNode' => 
  array (
    'type' => 'class',
    'classname' => 'FlushNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\FlushNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\ForLoopNode' => 
  array (
    'type' => 'class',
    'classname' => 'ForLoopNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\ForLoopNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\ForNode' => 
  array (
    'type' => 'class',
    'classname' => 'ForNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\ForNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\IfNode' => 
  array (
    'type' => 'class',
    'classname' => 'IfNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\IfNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\ImportNode' => 
  array (
    'type' => 'class',
    'classname' => 'ImportNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\ImportNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\IncludeNode' => 
  array (
    'type' => 'class',
    'classname' => 'IncludeNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\IncludeNode',
    'implements' => 
    array (
      0 => 'Twig\\Node\\NodeOutputInterface',
    ),
  ),
  'Twig\\Node\\MacroNode' => 
  array (
    'type' => 'class',
    'classname' => 'MacroNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\MacroNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\ModuleNode' => 
  array (
    'type' => 'class',
    'classname' => 'ModuleNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\ModuleNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\NameDeprecation' => 
  array (
    'type' => 'class',
    'classname' => 'NameDeprecation',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\NameDeprecation',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\Node' => 
  array (
    'type' => 'class',
    'classname' => 'Node',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\Node',
    'implements' => 
    array (
      0 => 'Countable',
      1 => 'IteratorAggregate',
    ),
  ),
  'Twig\\Node\\PrintNode' => 
  array (
    'type' => 'class',
    'classname' => 'PrintNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\PrintNode',
    'implements' => 
    array (
      0 => 'Twig\\Node\\NodeOutputInterface',
    ),
  ),
  'Twig\\Node\\SandboxNode' => 
  array (
    'type' => 'class',
    'classname' => 'SandboxNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\SandboxNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Node\\SetNode' => 
  array (
    'type' => 'class',
    'classname' => 'SetNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\SetNode',
    'implements' => 
    array (
      0 => 'Twig\\Node\\NodeCaptureInterface',
    ),
  ),
  'Twig\\Node\\TextNode' => 
  array (
    'type' => 'class',
    'classname' => 'TextNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\TextNode',
    'implements' => 
    array (
      0 => 'Twig\\Node\\NodeOutputInterface',
    ),
  ),
  'Twig\\Node\\WithNode' => 
  array (
    'type' => 'class',
    'classname' => 'WithNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Node',
    'extends' => 'AptowebDeps\\Twig\\Node\\WithNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\NodeTraverser' => 
  array (
    'type' => 'class',
    'classname' => 'NodeTraverser',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\NodeTraverser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\NodeVisitor\\AbstractNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractNodeVisitor',
    'isabstract' => true,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\AbstractNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\EscaperNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'EscaperNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\EscaperNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\MacroAutoImportNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'MacroAutoImportNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\MacroAutoImportNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\OptimizerNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'OptimizerNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\OptimizerNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\SafeAnalysisNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'SafeAnalysisNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\SafeAnalysisNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\SandboxNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'SandboxNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\SandboxNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\NodeVisitor\\YieldNotReadyNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'YieldNotReadyNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\NodeVisitor\\YieldNotReadyNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\Parser' => 
  array (
    'type' => 'class',
    'classname' => 'Parser',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Parser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Dumper\\BaseDumper' => 
  array (
    'type' => 'class',
    'classname' => 'BaseDumper',
    'isabstract' => true,
    'namespace' => 'Twig\\Profiler\\Dumper',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Dumper\\BaseDumper',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Dumper\\BlackfireDumper' => 
  array (
    'type' => 'class',
    'classname' => 'BlackfireDumper',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\Dumper',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Dumper\\BlackfireDumper',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Dumper\\HtmlDumper' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlDumper',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\Dumper',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Dumper\\HtmlDumper',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Dumper\\TextDumper' => 
  array (
    'type' => 'class',
    'classname' => 'TextDumper',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\Dumper',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Dumper\\TextDumper',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Node\\EnterProfileNode' => 
  array (
    'type' => 'class',
    'classname' => 'EnterProfileNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\Node',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Node\\EnterProfileNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\Node\\LeaveProfileNode' => 
  array (
    'type' => 'class',
    'classname' => 'LeaveProfileNode',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\Node',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Node\\LeaveProfileNode',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor' => 
  array (
    'type' => 'class',
    'classname' => 'ProfilerNodeVisitor',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler\\NodeVisitor',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor',
    'implements' => 
    array (
      0 => 'Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\Profiler\\Profile' => 
  array (
    'type' => 'class',
    'classname' => 'Profile',
    'isabstract' => false,
    'namespace' => 'Twig\\Profiler',
    'extends' => 'AptowebDeps\\Twig\\Profiler\\Profile',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
      1 => 'Serializable',
    ),
  ),
  'Twig\\Runtime\\EscaperRuntime' => 
  array (
    'type' => 'class',
    'classname' => 'EscaperRuntime',
    'isabstract' => false,
    'namespace' => 'Twig\\Runtime',
    'extends' => 'AptowebDeps\\Twig\\Runtime\\EscaperRuntime',
    'implements' => 
    array (
      0 => 'Twig\\Extension\\RuntimeExtensionInterface',
    ),
  ),
  'Twig\\RuntimeLoader\\ContainerRuntimeLoader' => 
  array (
    'type' => 'class',
    'classname' => 'ContainerRuntimeLoader',
    'isabstract' => false,
    'namespace' => 'Twig\\RuntimeLoader',
    'extends' => 'AptowebDeps\\Twig\\RuntimeLoader\\ContainerRuntimeLoader',
    'implements' => 
    array (
      0 => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
    ),
  ),
  'Twig\\RuntimeLoader\\FactoryRuntimeLoader' => 
  array (
    'type' => 'class',
    'classname' => 'FactoryRuntimeLoader',
    'isabstract' => false,
    'namespace' => 'Twig\\RuntimeLoader',
    'extends' => 'AptowebDeps\\Twig\\RuntimeLoader\\FactoryRuntimeLoader',
    'implements' => 
    array (
      0 => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
    ),
  ),
  'Twig\\Sandbox\\SecurityError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityNotAllowedFilterError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityNotAllowedFilterError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityNotAllowedFilterError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityNotAllowedFunctionError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityNotAllowedFunctionError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityNotAllowedFunctionError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityNotAllowedMethodError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityNotAllowedMethodError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityNotAllowedMethodError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityNotAllowedPropertyError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityNotAllowedPropertyError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityNotAllowedPropertyError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityNotAllowedTagError' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityNotAllowedTagError',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityNotAllowedTagError',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Sandbox\\SecurityPolicy' => 
  array (
    'type' => 'class',
    'classname' => 'SecurityPolicy',
    'isabstract' => false,
    'namespace' => 'Twig\\Sandbox',
    'extends' => 'AptowebDeps\\Twig\\Sandbox\\SecurityPolicy',
    'implements' => 
    array (
      0 => 'Twig\\Sandbox\\SecurityPolicyInterface',
    ),
  ),
  'Twig\\Source' => 
  array (
    'type' => 'class',
    'classname' => 'Source',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Source',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Template' => 
  array (
    'type' => 'class',
    'classname' => 'Template',
    'isabstract' => true,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Template',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TemplateWrapper' => 
  array (
    'type' => 'class',
    'classname' => 'TemplateWrapper',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\TemplateWrapper',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Test\\IntegrationTestCase' => 
  array (
    'type' => 'class',
    'classname' => 'IntegrationTestCase',
    'isabstract' => true,
    'namespace' => 'Twig\\Test',
    'extends' => 'AptowebDeps\\Twig\\Test\\IntegrationTestCase',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Test\\NodeTestCase' => 
  array (
    'type' => 'class',
    'classname' => 'NodeTestCase',
    'isabstract' => true,
    'namespace' => 'Twig\\Test',
    'extends' => 'AptowebDeps\\Twig\\Test\\NodeTestCase',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Token' => 
  array (
    'type' => 'class',
    'classname' => 'Token',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\Token',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\AbstractTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractTokenParser',
    'isabstract' => true,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\AbstractTokenParser',
    'implements' => 
    array (
      0 => 'Twig\\TokenParser\\TokenParserInterface',
    ),
  ),
  'Twig\\TokenParser\\ApplyTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'ApplyTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\ApplyTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\AutoEscapeTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'AutoEscapeTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\AutoEscapeTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\BlockTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'BlockTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\BlockTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\DeprecatedTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'DeprecatedTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\DeprecatedTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\DoTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'DoTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\DoTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\EmbedTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'EmbedTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\EmbedTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\ExtendsTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'ExtendsTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\ExtendsTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\FlushTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'FlushTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\FlushTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\ForTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'ForTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\ForTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\FromTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'FromTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\FromTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\IfTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'IfTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\IfTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\ImportTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'ImportTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\ImportTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\IncludeTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'IncludeTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\IncludeTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\MacroTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'MacroTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\MacroTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\SandboxTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'SandboxTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\SandboxTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\SetTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'SetTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\SetTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\UseTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'UseTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\UseTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenParser\\WithTokenParser' => 
  array (
    'type' => 'class',
    'classname' => 'WithTokenParser',
    'isabstract' => false,
    'namespace' => 'Twig\\TokenParser',
    'extends' => 'AptowebDeps\\Twig\\TokenParser\\WithTokenParser',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TokenStream' => 
  array (
    'type' => 'class',
    'classname' => 'TokenStream',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\TokenStream',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TwigFilter' => 
  array (
    'type' => 'class',
    'classname' => 'TwigFilter',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\TwigFilter',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TwigFunction' => 
  array (
    'type' => 'class',
    'classname' => 'TwigFunction',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\TwigFunction',
    'implements' => 
    array (
    ),
  ),
  'Twig\\TwigTest' => 
  array (
    'type' => 'class',
    'classname' => 'TwigTest',
    'isabstract' => false,
    'namespace' => 'Twig',
    'extends' => 'AptowebDeps\\Twig\\TwigTest',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Util\\DeprecationCollector' => 
  array (
    'type' => 'class',
    'classname' => 'DeprecationCollector',
    'isabstract' => false,
    'namespace' => 'Twig\\Util',
    'extends' => 'AptowebDeps\\Twig\\Util\\DeprecationCollector',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Util\\ReflectionCallable' => 
  array (
    'type' => 'class',
    'classname' => 'ReflectionCallable',
    'isabstract' => false,
    'namespace' => 'Twig\\Util',
    'extends' => 'AptowebDeps\\Twig\\Util\\ReflectionCallable',
    'implements' => 
    array (
    ),
  ),
  'Twig\\Util\\TemplateDirIterator' => 
  array (
    'type' => 'class',
    'classname' => 'TemplateDirIterator',
    'isabstract' => false,
    'namespace' => 'Twig\\Util',
    'extends' => 'AptowebDeps\\Twig\\Util\\TemplateDirIterator',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FormattableHandlerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'FormattableHandlerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\FormattableHandlerTrait',
    ),
  ),
  'Monolog\\Handler\\ProcessableHandlerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'ProcessableHandlerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\ProcessableHandlerTrait',
    ),
  ),
  'Monolog\\Handler\\WebRequestRecognizerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'WebRequestRecognizerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\WebRequestRecognizerTrait',
    ),
  ),
  'CrowdSec\\CapiClient\\Client\\CapiHandler\\CapiHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CapiHandlerInterface',
    'namespace' => 'CrowdSec\\CapiClient\\Client\\CapiHandler',
    'extends' => 
    array (
      0 => 'AptowebDeps\\CrowdSec\\CapiClient\\Client\\CapiHandler\\CapiHandlerInterface',
    ),
  ),
  'CrowdSec\\CapiClient\\Storage\\StorageInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StorageInterface',
    'namespace' => 'CrowdSec\\CapiClient\\Storage',
    'extends' => 
    array (
      0 => 'AptowebDeps\\CrowdSec\\CapiClient\\Storage\\StorageInterface',
    ),
  ),
  'CrowdSec\\Common\\Client\\RequestHandler\\RequestHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestHandlerInterface',
    'namespace' => 'CrowdSec\\Common\\Client\\RequestHandler',
    'extends' => 
    array (
      0 => 'AptowebDeps\\CrowdSec\\Common\\Client\\RequestHandler\\RequestHandlerInterface',
    ),
  ),
  'Monolog\\Formatter\\FormatterInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FormatterInterface',
    'namespace' => 'Monolog\\Formatter',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActivationStrategyInterface',
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FormattableHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FormattableHandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\HandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\HandlerInterface',
    ),
  ),
  'Monolog\\Handler\\ProcessableHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProcessableHandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Handler\\ProcessableHandlerInterface',
    ),
  ),
  'Monolog\\LogRecord' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LogRecord',
    'namespace' => 'Monolog',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\LogRecord',
    ),
  ),
  'Monolog\\Processor\\ProcessorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProcessorInterface',
    'namespace' => 'Monolog\\Processor',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\ResettableInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResettableInterface',
    'namespace' => 'Monolog',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Monolog\\ResettableInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\ConfigBuilderGeneratorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfigBuilderGeneratorInterface',
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\ConfigBuilderGeneratorInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Builder\\ConfigBuilderInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfigBuilderInterface',
    'namespace' => 'Symfony\\Component\\Config\\Builder',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Builder\\ConfigBuilderInterface',
    ),
  ),
  'Symfony\\Component\\Config\\ConfigCacheFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfigCacheFactoryInterface',
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\ConfigCacheFactoryInterface',
    ),
  ),
  'Symfony\\Component\\Config\\ConfigCacheInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfigCacheInterface',
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\ConfigCacheInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\BuilderAwareInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BuilderAwareInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\BuilderAwareInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeParentInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\Builder\\ParentNodeDefinitionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParentNodeDefinitionInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition\\Builder',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\Builder\\ParentNodeDefinitionInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\ConfigurationInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfigurationInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\ConfigurationInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\NodeInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\NodeInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Definition\\PrototypeNodeInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PrototypeNodeInterface',
    'namespace' => 'Symfony\\Component\\Config\\Definition',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Definition\\PrototypeNodeInterface',
    ),
  ),
  'Symfony\\Component\\Config\\FileLocatorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FileLocatorInterface',
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\FileLocatorInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\LoaderInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoaderInterface',
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\LoaderInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Loader\\LoaderResolverInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoaderResolverInterface',
    'namespace' => 'Symfony\\Component\\Config\\Loader',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Loader\\LoaderResolverInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\ResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResourceInterface',
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\ResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SelfCheckingResourceInterface',
    'namespace' => 'Symfony\\Component\\Config\\Resource',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface',
    ),
  ),
  'Symfony\\Component\\Config\\ResourceCheckerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResourceCheckerInterface',
    'namespace' => 'Symfony\\Component\\Config',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Config\\ResourceCheckerInterface',
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExceptionInterface',
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface',
    ),
  ),
  'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IOExceptionInterface',
    'namespace' => 'Symfony\\Component\\Filesystem\\Exception',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface',
    ),
  ),
  'Stringable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Stringable',
    'namespace' => '\\',
    'extends' => 
    array (
      0 => 'AptowebDeps_Pfx_Stringable',
    ),
  ),
  'Twig\\Cache\\CacheInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CacheInterface',
    'namespace' => 'Twig\\Cache',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Cache\\CacheInterface',
    ),
  ),
  'Twig\\Extension\\ExtensionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExtensionInterface',
    'namespace' => 'Twig\\Extension',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Extension\\ExtensionInterface',
    ),
  ),
  'Twig\\Extension\\GlobalsInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GlobalsInterface',
    'namespace' => 'Twig\\Extension',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Extension\\GlobalsInterface',
    ),
  ),
  'Twig\\Extension\\RuntimeExtensionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RuntimeExtensionInterface',
    'namespace' => 'Twig\\Extension',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Extension\\RuntimeExtensionInterface',
    ),
  ),
  'Twig\\Loader\\LoaderInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoaderInterface',
    'namespace' => 'Twig\\Loader',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Loader\\LoaderInterface',
    ),
  ),
  'Twig\\Node\\NodeCaptureInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeCaptureInterface',
    'namespace' => 'Twig\\Node',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Node\\NodeCaptureInterface',
    ),
  ),
  'Twig\\Node\\NodeOutputInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeOutputInterface',
    'namespace' => 'Twig\\Node',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Node\\NodeOutputInterface',
    ),
  ),
  'Twig\\NodeVisitor\\NodeVisitorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NodeVisitorInterface',
    'namespace' => 'Twig\\NodeVisitor',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\NodeVisitor\\NodeVisitorInterface',
    ),
  ),
  'Twig\\RuntimeLoader\\RuntimeLoaderInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RuntimeLoaderInterface',
    'namespace' => 'Twig\\RuntimeLoader',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\RuntimeLoader\\RuntimeLoaderInterface',
    ),
  ),
  'Twig\\Sandbox\\SecurityPolicyInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SecurityPolicyInterface',
    'namespace' => 'Twig\\Sandbox',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Sandbox\\SecurityPolicyInterface',
    ),
  ),
  'Twig\\Sandbox\\SourcePolicyInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SourcePolicyInterface',
    'namespace' => 'Twig\\Sandbox',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\Sandbox\\SourcePolicyInterface',
    ),
  ),
  'Twig\\TokenParser\\TokenParserInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TokenParserInterface',
    'namespace' => 'Twig\\TokenParser',
    'extends' => 
    array (
      0 => 'AptowebDeps\\Twig\\TokenParser\\TokenParserInterface',
    ),
  ),
);

        public function __construct()
        {
            $this->includeFilePath = __DIR__ . '/autoload_alias.php';
        }

        /**
         * @param string $class
         */
        public function autoload($class): void
        {
            if (!isset($this->autoloadAliases[$class])) {
                return;
            }
            switch ($this->autoloadAliases[$class]['type']) {
                case 'class':
                        $this->load(
                            $this->classTemplate(
                                $this->autoloadAliases[$class]
                            )
                        );
                    break;
                case 'interface':
                    $this->load(
                        $this->interfaceTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'trait':
                    $this->load(
                        $this->traitTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                default:
                    // Never.
                    break;
            }
        }

        private function load(string $includeFile): void
        {
            file_put_contents($this->includeFilePath, $includeFile);
            include $this->includeFilePath;
            file_exists($this->includeFilePath) && unlink($this->includeFilePath);
        }

        /**
         * @param ClassAliasArray $class
         */
        private function classTemplate(array $class): string
        {
            $abstract = $class['isabstract'] ? 'abstract ' : '';
            $classname = $class['classname'];
            if (isset($class['namespace'])) {
                $namespace = "namespace {$class['namespace']};";
                $extends = '\\' . $class['extends'];
                $implements = empty($class['implements']) ? ''
                : ' implements \\' . implode(', \\', $class['implements']);
            } else {
                $namespace = '';
                $extends = $class['extends'];
                $implements = !empty($class['implements']) ? ''
                : ' implements ' . implode(', ', $class['implements']);
            }
            return <<<EOD
                <?php
                $namespace
                $abstract class $classname extends $extends $implements {}
                EOD;
        }

        /**
         * @param InterfaceAliasArray $interface
         */
        private function interfaceTemplate(array $interface): string
        {
            $interfacename = $interface['interfacename'];
            $namespace = isset($interface['namespace'])
            ? "namespace {$interface['namespace']};" : '';
            $extends = isset($interface['namespace'])
            ? '\\' . implode('\\ ,', $interface['extends'])
            : implode(', ', $interface['extends']);
            return <<<EOD
                <?php
                $namespace
                interface $interfacename extends $extends {}
                EOD;
        }

        /**
         * @param TraitAliasArray $trait
         */
        private function traitTemplate(array $trait): string
        {
            $traitname = $trait['traitname'];
            $namespace = isset($trait['namespace'])
            ? "namespace {$trait['namespace']};" : '';
            $uses = isset($trait['namespace'])
            ? '\\' . implode(';' . PHP_EOL . '    use \\', $trait['use'])
            : implode(';' . PHP_EOL . '    use ', $trait['use']);
            return <<<EOD
                <?php
                $namespace
                trait $traitname { 
                    use $uses; 
                }
                EOD;
        }
    }

    spl_autoload_register([ new AliasAutoloader(), 'autoload' ]);
}
