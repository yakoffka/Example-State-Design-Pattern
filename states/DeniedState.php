<?php

/**
 * Class DeniedState
 *
 * терминальный класс - не предполагает никаких действий
 */
class DeniedState extends State
{
    /**
     * @return string
     */
    public function getStateInfo(): string
    {
        return 'document denied';
    }
}