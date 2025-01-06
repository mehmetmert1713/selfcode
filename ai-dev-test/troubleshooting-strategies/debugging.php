// Debug Helper
class DebugHelper
{
    public static function logModuleOperation($module, $operation, $context = [])
    {
        Log::channel('module_debug')->info("Module Operation: {$operation}", [
            'module' => $module,
            'context' => $context,
            'timestamp' => now(),
            'trace' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)
        ]);
    }
}
