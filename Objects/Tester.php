<?php

declare(strict_types=1);

namespace Objects;

use Objects\Employee;
use Objects\ApplicationCreatorInterface;
use Objects\WebinarSpeakerInterface;

class Tester extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface {
    public function getPosition() {
        return "тестировщик";
    }

    public function developApplication() {
        return "проводит тестирование";
    }

    public function conductWebinar() {
        return "проводит вебинары по тестированию";
    }
}