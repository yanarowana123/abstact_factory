<?php
/**
 * Created by PhpStorm.
 * User: it06
 * Date: 01.03.2021
 * Time: 11:27
 */

class  RadiantHeroFactory implements HeroesFactory
{
    public function createAgilityHero():AgilityHero
    {
        return new RadiantAgilityHero();
    }

    public function createIntelligenceHero()
    {
        // TODO: Implement createIntelligenceHero() method.
    }

    public function createStrengthHero()
    {
        // TODO: Implement createStrengthHero() method.
    }
}