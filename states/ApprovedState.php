
<?php


/**
 * Class ApprovedState
 *
 * терминальный класс - не предполагает никаких действий
 */
class ApprovedState extends State
{
    /**
     * @return string
     */
    public function getStateInfo(): string
    {
        return 'document approved';
    }
}