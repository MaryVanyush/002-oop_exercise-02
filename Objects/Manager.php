<?php

declare(strict_types=1);

namespace Objects;

use Objects\Employee;
use Objects\LeadInterface;
use Objects\WebinarSpeakerInterface;


class Manager extends Employee implements LeadInterface, WebinarSpeakerInterface {
    public function getPosition() {
        return "менеджер";
    }

    public function manageTeam() {
        return "координирует работу команды";
    }

    public function conductWebinar() {
        return "проводит вебинары по управлению проектами";
    }
}