<?php

require_once __DIR__ . '/ApprovedState.php';
require_once __DIR__ . '/DeniedState.php';

/**
 * Class ReviewState
 */
class ReviewState extends State
{
    public function approve(): void
    {
        $this->doc->changeState(new ApprovedState($this->doc));
    }

    public function deny(): void
    {
        $this->doc->changeState(new DeniedState($this->doc));
    }

    /**
     * @return string
     */
    public function getStateInfo(): string
    {
        return 'document on review';
    }

    /**
     * @param State $oldState
     */
    public function onEnterState($oldState): void
    {
        parent::onEnterState($oldState);
        if ($this->doc->getSum() < 2000) {
            $this->deny();
        } else {
            $this->approve();
        }
    }
}