<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220720153937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city_competent (city_id INT NOT NULL, competent_id INT NOT NULL, INDEX IDX_98BE12188BAC62AF (city_id), INDEX IDX_98BE1218B0C570B7 (competent_id), PRIMARY KEY(city_id, competent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE city_competent ADD CONSTRAINT FK_98BE12188BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE city_competent ADD CONSTRAINT FK_98BE1218B0C570B7 FOREIGN KEY (competent_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE city_competent DROP FOREIGN KEY FK_98BE12188BAC62AF');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE city_competent');
    }
}
