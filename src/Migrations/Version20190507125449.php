<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190507125449 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, noob_id INT NOT NULL, boss_id INT NOT NULL, reason_id INT NOT NULL, urgence_id INT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_97A0ADA3AC0A967F (noob_id), INDEX IDX_97A0ADA3261FB672 (boss_id), INDEX IDX_97A0ADA359BB1592 (reason_id), INDEX IDX_97A0ADA3578B7FBD (urgence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3AC0A967F FOREIGN KEY (noob_id) REFERENCES noob (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3261FB672 FOREIGN KEY (boss_id) REFERENCES boss (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA359BB1592 FOREIGN KEY (reason_id) REFERENCES reason (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3578B7FBD FOREIGN KEY (urgence_id) REFERENCES urgence (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ticket');
    }
}
