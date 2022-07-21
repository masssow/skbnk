<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220630190201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE representing ADD user_id INT DEFAULT NULL, ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE representing ADD CONSTRAINT FK_A78CBAFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A78CBAFA76ED395 ON representing (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE representing DROP FOREIGN KEY FK_A78CBAFA76ED395');
        $this->addSql('DROP INDEX UNIQ_A78CBAFA76ED395 ON representing');
        $this->addSql('ALTER TABLE representing DROP user_id, DROP password');
    }
}
