<?php

namespace App\Command;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    // ./symfony console create-product   
    name: 'create-product',
    description: 'Add a short description for your command',
)]
class AddTenProductCommand extends Command
{

    private ManagerRegistry $doctrine;

    protected function configure(): void
    {
        /*$this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;*/
    }

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
        parent::__construct();
    }



    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        

        $entityManager = $this->doctrine->getManager();

        // Produit 1 : Un jeu de plateforme
        $game1 = new Product;
        $game1->setName('Super Jump Bros');
        $game1->setPrice(4.99);
        $game1->setPlatforms('iOS, Android');
        $game1->setDescription('Un jeu de plateforme classique avec des sauts et des combats contre des ennemis.');
        $game1->setReleaseDate(new \DateTime('2022-03-01'));
        $entityManager->persist($game1);


        // Produit 2 : Un jeu de stratégie
        $game2 = new Product;
        $game2->setName('Kingdoms at War');
        $game2->setPrice(9.99);
        $game2->setPlatforms('iOS, Android');
        $game2->setDescription('Un jeu de stratégie de guerre avec des batailles en temps réel et la gestion de ressources.');
        $game2->setReleaseDate(new \DateTime('2022-04-15'));
        $entityManager->persist($game2);

        // Produit 3 : Un jeu de course
        $game3 = new Product;
        $game3->setName('Speed Racer');
        $game3->setPrice(2.99);
        $game3->setPlatforms('iOS, Android');
        $game3->setDescription('Un jeu de course d\'arcade avec des défis et des améliorations de véhicules.');
        $game3->setReleaseDate(new \DateTime('2022-05-01'));
        $entityManager->persist($game3);

        // Produit 4 : Un jeu de rôle
        $game4 = new Product;
        $game4->setName('Epic Quest');
        $game4->setPrice(6.99);
        $game4->setPlatforms('iOS, Android');
        $game4->setDescription('Un jeu de rôle avec une histoire épique et des combats au tour par tour.');
        $game4->setReleaseDate(new \DateTime('2022-06-15'));
        $entityManager->persist($game4);

        // Produit 5 : Un jeu de sport
        $game5 = new Product;
        $game5->setName('Home Run Derby');
        $game5->setPrice(3.99);
        $game5->setPlatforms('iOS, Android');
        $game5->setDescription('Un jeu de baseball pour les fans de sport avec des défis de coup sûr et des équipes de joueurs.');
        $game5->setReleaseDate(new \DateTime('2022-07-01'));
        $entityManager->persist($game5);

        // Produit 6 : Un jeu de puzzle
        $game6 = new Product;
        $game6->setName('Jewel Blitz');
        $game6->setPrice(1.99);
        $game6->setPlatforms('iOS, Android');
        $game6->setDescription('Un jeu de puzzle de match 3 avec des défis et des power-ups.');
        $game6->setReleaseDate(new \DateTime('2022-08-15'));
        $entityManager->persist($game6);

        // Produit 7 : Un jeu de simulation
        $game7 = new Product;
        $game7->setName('SimCity Builder');
        $game7->setPrice(7.99);
        $game7->setPlatforms('iOS, Android');
        $game7->setDescription('Un jeu de simulation de construction de ville avec la gestion de ressources et l\'amélioration de la communauté.');
        $game7->setReleaseDate(new \DateTime('2022-09-01'));
        $entityManager->persist($game7);

        // Produit 7 : Un jeu de simulation
        $game8 = new Product;
        $game8->setName('gta');
        $game8->setPrice(7.99);
        $game8->setPlatforms('iOS, Android');
        $game8->setDescription('Un jeu dans un open world');
        $game8->setReleaseDate(new \DateTime('2022-09-06'));
        $entityManager->persist($game8);

        // Produit 9 : Un jeu d'aventure
        $game9 = new Product;
        $game9->setName('Island Escape');
        $game9->setPrice(5.99);
        $game9->setPlatforms('iOS, Android');
        $game9->setDescription('Un jeu d\'aventure de survie sur une île déserte avec des défis de construction et de recherche de nourriture.');
        $game9->setReleaseDate(new \DateTime('2022-11-01'));
        $entityManager->persist($game9);

        // Produit 10 : Un jeu de combat
        $game10 = new Product;
        $game10->setName('Fight Club');
        $game10->setPrice(8.99);
        $game10->setPlatforms('iOS, Android');
        $game10->setDescription('Un jeu de combat de rue avec des personnages uniques et des combos de combat.');
        $game10->setReleaseDate(new \DateTime('2022-12-15'));
        $entityManager->persist($game10);

        $entityManager->flush();
        return Command::SUCCESS;
    }
}
