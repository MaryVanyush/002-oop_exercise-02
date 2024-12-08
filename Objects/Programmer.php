<?php

declare(strict_types=1);

namespace Objects;

use Objects\Employee;
use Objects\ApplicationCreatorInterface;

class Programmer extends Employee implements ApplicationCreatorInterface {
    public function getPosition() {
        return "программист";
    }

    public function developApplication() {
        return "пишет код";
    }
}
