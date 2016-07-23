<?php

namespace HansOtt\Holiday\Translator\Belgium;

use HansOtt\Holiday\TranslatorAbstract;
use HansOtt\Holiday\Calendar\Belgium\AllSaints;
use HansOtt\Holiday\Calendar\Belgium\LabourDay;
use HansOtt\Holiday\Calendar\Belgium\WhitMonday;
use HansOtt\Holiday\Calendar\Belgium\NewYearsDay;
use HansOtt\Holiday\Calendar\Belgium\ArmisticeDay;
use HansOtt\Holiday\Calendar\Belgium\AscensionDay;
use HansOtt\Holiday\Calendar\Belgium\EasterMonday;
use HansOtt\Holiday\Calendar\Belgium\ChristmasDay;
use HansOtt\Holiday\Calendar\Belgium\IndependenceDay;
use HansOtt\Holiday\Calendar\Belgium\AssumptionOfMary;

final class Dutch extends TranslatorAbstract
{
    public function __construct()
    {
        parent::__construct([
            NewYearsDay::class => 'Nieuwjaar',
            EasterMonday::class => 'Paasmaandag',
            LabourDay::class => 'Feest Van De Arbeid',
            AscensionDay::class => 'Onze Lieve Heer Hemelvaart',
            WhitMonday::class => 'Pinkstermaandag',
            IndependenceDay::class => 'Nationale Feestdag',
            AssumptionOfMary::class => 'Onze Lieve Vrouw Hemelvaart',
            AllSaints::class => 'Allerheiligen',
            ArmisticeDay::class => 'Wapenstilstand',
            ChristmasDay::class => 'Kerstmis',
        ]);
    }
}
