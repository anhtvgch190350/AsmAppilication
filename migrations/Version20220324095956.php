<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324095956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mobile (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, brand VARCHAR(255) NOT NULL, chip VARCHAR(255) NOT NULL, os VARCHAR(255) NOT NULL, screen_size VARCHAR(255) NOT NULL, screen_tech VARCHAR(255) NOT NULL, cpu VARCHAR(255) NOT NULL, back_cam VARCHAR(255) NOT NULL, front_cam VARCHAR(255) NOT NULL, memory VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE mobile');
    }
}
