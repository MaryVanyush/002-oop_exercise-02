<?php

declare(strict_types=1);

namespace Objects;

use Objects\Employee;
use Objects\LeadInterface;
use Objects\WebinarSpeakerInterface;


class Director extends Employee implements LeadInterface, WebinarSpeakerInterface {
    public function getPosition() {
        return "директор";
    }

    public function manageTeam() {
        return "управляет командой";
    }

    public function conductWebinar() {
        return "проводит вебинары на стратегические темы";
    }
}