<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721113213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competent_job');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competent_job (competent_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_C5B96B34B0C570B7 (competent_id), INDEX IDX_C5B96B34BE04EA9 (job_id), PRIMARY KEY(competent_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE competent_job ADD CONSTRAINT FK_C5B96B34BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competent_job ADD CONSTRAINT FK_C5B96B34B0C570B7 FOREIGN KEY (competent_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
