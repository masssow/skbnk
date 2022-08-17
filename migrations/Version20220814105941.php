<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220814105941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4FBF094FA76ED395 ON company (user_id)');
        $this->addSql('ALTER TABLE job_competent ADD CONSTRAINT FK_FB5AE11CB0C570B7 FOREIGN KEY (competent_id) REFERENCES competent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD competent_id INT DEFAULT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B0C570B7 FOREIGN KEY (competent_id) REFERENCES competent (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649B0C570B7 ON user (competent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FA76ED395');
        $this->addSql('DROP INDEX IDX_4FBF094FA76ED395 ON company');
        $this->addSql('ALTER TABLE company DROP user_id');
        $this->addSql('ALTER TABLE job_competent DROP FOREIGN KEY FK_FB5AE11CB0C570B7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B0C570B7');
        $this->addSql('DROP INDEX UNIQ_8D93D649B0C570B7 ON user');
        $this->addSql('ALTER TABLE user DROP competent_id, DROP first_name, DROP last_name');
    }
}
