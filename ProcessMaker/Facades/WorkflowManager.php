<?php

namespace ProcessMaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ProcessMaker\Managers\WorkflowManager
 * 
 * @method static mixed callProcess($filename, $processId)
 * @method static mixed triggerStartEvent($definitions, $event, array $data)
 * @method static mixed runScripTask(\ProcessMaker\Nayra\Contracts\Bpmn\ScriptTaskInterface $scriptTask, Token $token)
 * @method static mixed runServiceTask(\ProcessMaker\Nayra\Contracts\Bpmn\ServiceTaskInterface $serviceTask, Token $token)
 * @method static void throwSignalEventDefinition(\ProcessMaker\Nayra\Contracts\Bpmn\EventDefinitionInterface $sourceEventDefinition, \ProcessMaker\Nayra\Contracts\Bpmn\TokenInterface $token)
 * @method static void onDataValidation(callable $callback)
 * @method static void validateData(array $data, $definitions, $element)
 */
class WorkflowManager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'workflow.manager';
    }
}
